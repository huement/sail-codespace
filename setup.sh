#!/bin/bash

# ANSI color codes for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# File to modify
ENV_FILE=".env"

echo -e "${YELLOW}[INFO] Copy the example environment file to a new local version...${NC}"
cp .env.example .env

echo -e "${YELLOW}[INFO] Update local .env with desired values...${NC}"
# Check if .env file exists
echo -e "${YELLOW}[INFO] Checking for .env file...${NC}"
if [[ ! -f "$ENV_FILE" ]]; then
    echo -e "${RED}[ERROR] .env file not found!${NC}"
    exit 1
fi

# Check if awk is available
if ! command -v awk >/dev/null 2>&1; then
    echo -e "${RED}[ERROR] awk is required but not installed!${NC}"
    exit 1
fi

# Backup .env file
echo -e "${YELLOW}[INFO] Creating backup of .env file as .env.bak...${NC}"
cp "$ENV_FILE" "${ENV_FILE}.bak" || {
    echo -e "${RED}[ERROR] Failed to create backup!${NC}"
    exit 1
}

# Function to replace or append key-value pair using awk
replace_env()
              {
    local key=$1
    local value=$2
    echo -e "${BLUE}[INFO] Processing $key...${NC}"

    # Create a temporary file
    temp_file=$(mktemp)

    # Use awk to process the file
    awk -v key="$key" -v value="$value" '
        BEGIN { found=0 }
        /^#/ || /^$/ { print; next }  # Preserve comments and empty lines
        $0 ~ "^"key"=" { print key"="value; found=1; next }
        { print }
        END { if (!found) print key"="value }
    ' "$ENV_FILE" >"$temp_file"

    # Check if awk was successful
    if [[ $? -eq 0 ]]; then
        mv "$temp_file" "$ENV_FILE"
        echo -e "${GREEN}[SUCCESS] Set $key=$value${NC}"
    else
        echo -e "${RED}[ERROR] Failed to process $key${NC}"
        rm -f "$temp_file"
        exit 1
    fi
}

# Perform replacements
echo -e "${YELLOW}[INFO] Starting replacement process...${NC}"
replace_env "DB_CONNECTION" "mysql"
replace_env "DB_HOST" "mysql"
replace_env "DB_PORT" "3306"
replace_env "DB_DATABASE" "laravel"
replace_env "DB_USERNAME" "sail"
replace_env "DB_PASSWORD" "password"

# Verify changes
echo -e "${YELLOW}[INFO] Verifying changes...${NC}"
echo -e "${BLUE}Current .env settings:${NC}"
grep "^DB_" "$ENV_FILE" | while read -r line; do
    echo -e "${GREEN}$line${NC}"
done

# Confirmation message
echo -e "${GREEN}[SUCCESS] All database configurations have been updated successfully!${NC}"
echo -e "${YELLOW}Backup of original file is saved as .env.bak${NC}"

echo -e "${BLUE}[INFO] Composer Install dependencies (first sail install will take a while)...${NC}"
composer install

echo -e "${BLUE}[INFO] Start sail containers...${NC}"
./vendor/bin/sail up -d

echo -e "${BLUE}[INFO] Generate the application key...${NC}"
./vendor/bin/sail php artisan key:generate

echo -e "${BLUE}[INFO] Install npm packages...${NC}"
./vendor/bin/sail npm install

echo -e "${BLUE}[INFO] Stop sail containers...${NC}"
./vendor/bin/sail stop

echo -e "${GREEN}[ OK ] SETUP DONE!!!${NC}"
echo -e "${GREEN}[ OK ] Please start sail and execute the mysql db migration afterwards:${NC}"
echo -e "${GREEN}[NEXT] ./vendor/bin/sail artisan migrate...${NC}"

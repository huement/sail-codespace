#!/usr/bin/env bash

echo ""
echo " Running Laravel Sail "
echo " huement.local Dev Server"
echo ""
echo " MUST run Vite via npm for js / scss"
echo " A: 'pm2 start \"./vendor/bin/sail npm run dev\" --name huementlocal'"
echo " B: 'snpm run dev' (requires edited .bashrc)"
echo " C: './vendor/bin/sail npm run dev'"
echo ""
echo " Optionally run the Queue for emails and jobs"
echo " 'sartisan queue:work -v' (requires edited .bashrc)"
echo " './vendor/bin/sail artisan queue:work -v'"
echo ""

./vendor/bin/sail up -d

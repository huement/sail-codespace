<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * This is a catch all cool static class for hooking up HUI stuff and making it mesh well with Laravel.
 */

class HuiHelp
{
    public static $hexCode;

    // Turn a string into a hex code
    /**
     * getHex is for grabbing a css hex code from the style tokens
     *
     * @param [type] $cssColor
     * @param integer $level 100 (light) - 900 (dark)
     * @return string
     */
    public static function getHex($cssColor, $level = 500)
    {
      // @TODO: error checking
      $tokens = self::loadTokens();
      $key = trim($cssColor);
      $result = '#000000';

      if ($tokens[$key]){
        $result = $tokens[$key][$level];
      }

      return $result;
    }

    /**
     * @TODO: this is kinda fucked up w/ the storage facade. revisit it.
     *
     * @return response()
     */
    public static function loadTokens()
    {
        // Read the contents of the JSON file
        $json = Storage::disk('localpub')->get('tokens/colors.json');
        $tokens = json_decode($json, true);
        return $tokens;
    }
}

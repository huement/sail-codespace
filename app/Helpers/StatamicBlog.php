<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * BlogHelp | Statamic Helper
 */
class StatamicBlog
{
  // @TODO: make this work
  public static function getAuthorDetails(int $id, $ver = 1): string
  {
    // Check the cache for given id if found, return that
    // if no summary, get their signup date, return that

    if ($ver === 2) {
      $result = self::getAuthorArticleCount($id);
    } else {
      $result = self::getAuthorWordCount($id);
    }

    return $result;
  }

  public static function getAuthorWordCount(int $id): string
  {
    // @TODO: make this function work
    return '1000+ Words';
  }

  public static function getAuthorArticleCount(int $id): string
  {
    // @TODO: make this function work
    return '10+ Articles';
  }
}
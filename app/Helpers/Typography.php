<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Mtownsend\ReadTime\ReadTime;
use Stevebauman\Purify\Facades\Purify;

use Phiki\Phiki;
use Phiki\Grammar\Grammar;
use Phiki\Theme\Theme;

use DOMDocument;

/**
 * Typography | all sorts of manipulating strings
 */
class Typography
{
  const EXCERPT_LENGTH = 100;

  /**
   * Generate initials from a name
   *
   * @param string $name
   * @return string
   */
  public static function generateInitials(string $name): string
  {
    $words = explode(' ', $name);
    if (count($words) >= 2) {
      return mb_strtoupper(
        mb_substr($words[0], 0, 1, 'UTF-8') .
          mb_substr(end($words), 0, 1, 'UTF-8'),
        'UTF-8'
      );
    }
    return self::makeInitialsFromSingleWord($name);
  }

  /**
   * Make initials from a word with no spaces
   *
   * @param string $name
   * @return string
   */
  protected static function makeInitialsFromSingleWord(string $name): string
  {
    preg_match_all('#([A-Z]+)#', $name, $capitals);
    if (count($capitals[1]) >= 2) {
      return mb_substr(implode('', $capitals[1]), 0, 2, 'UTF-8');
    }
    return mb_strtoupper(mb_substr($name, 0, 2, 'UTF-8'), 'UTF-8');
  }

  /**
   * estimateReadTime
   * docs: https://packagist.org/packages/mtownsend/read-time
   *
   * @param string $text
   * @return string
   */
  public static function estimateReadTime(string $text): string
  {
    // read_time works. Its a global helper, but VSCode throws and error cause its dumb
    // $readTime = read_time($text);
    $readTime = (new ReadTime($text))->get();
    return $readTime;
  }

  public static function cleanPostContent(string $text): string
  {
    $cleaned = Purify::clean($text);
    return $cleaned;
  }

  public static function getPostExcerpt(string $rawText, $category = ''): string
  {
    $text = Purify::clean($rawText);
    if (Str::length($text) > Typography::EXCERPT_LENGTH) {
      $result = Str::limit($text, Typography::EXCERPT_LENGTH);
      $result = $result . '...';
    } else {
      $result = $text;
    }

    if ($category !== '') {
      $result = $category . ' related post about ' . $result;
    }

    return $result;
  }

  /**
   * @TODO: this is an example that is no longer being used. However, in the future it will be sorta of used when I cleanup the main company pages.
   */
  public static function phikiHighlight(string $text, $lang = 'plain')
  {
    $phiki = new Phiki();

    // WORKS!! Getting file from local storage works, but it isnt wahat I want.
    // $file = Storage::disk('local')->path('codepreview.html');
    // $test = file_get_contents($file);

    $result = '';
    switch ($lang) {
      case 'plain':
      case 'html':
        $result = $phiki->codeToHtml($text, Grammar::Html, Theme::GithubDark);
        break;
      case 'php':
        $result = $phiki->codeToHtml($text, Grammar::Php, Theme::GithubDark);
        break;
      case 'scss':
        $result = $phiki->codeToHtml($text, Grammar::Scss, Theme::GithubDark);
        break;
      case 'js':
        $result = $phiki->codeToHtml(
          $text,
          Grammar::Javascript,
          Theme::GithubDark
        );
        break;
      default:
        $result = $phiki->codeToHtml($text, Grammar::Php, Theme::GithubDark);
        break;
    }

    return $result;
  }

  public static function addDropCaps($html)
    {
        // Create a new DOMDocument instance
        $doc = new DOMDocument();

        // Suppress warnings for malformed HTML and preserve encoding
        @$doc->loadHTML('<?xml encoding="UTF-8">' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        // Get all paragraph tags
        $paragraphs = $doc->getElementsByTagName('p');

        // Target the 1st (index 0) and 5th (index 4) paragraphs
        $targetIndexes = [0, 4];

        foreach ($targetIndexes as $index) {
            if ($paragraphs->length > $index) {
                $paragraph = $paragraphs->item($index);

                // Get the paragraph's HTML content
                $pHtml = $doc->saveHTML($paragraph);

                // Use regex to find the first letter after the <p> tag
                if (preg_match('/<p[^>]*>([\s]*)([A-Za-z])/i', $pHtml, $matches)) {
                    $whitespace = $matches[1];
                    $firstLetter = $matches[2];

                    // Replace the first letter with a span-wrapped version
                    $newHtml = preg_replace(
                        '/<p([^>]*)>([\s]*)([A-Za-z])/i',
                        '<p$1>' . $whitespace . '<span class="drop-cap">$3</span>',
                        $pHtml,
                        1
                    );

                    // Create a new DOM fragment with the modified HTML
                    $newNode = $doc->createDocumentFragment();
                    $newNode->appendXML($newHtml);

                    // Replace the original paragraph with the modified one
                    $paragraph->parentNode->replaceChild($newNode, $paragraph);
                }
            }
        }

        // Extract the modified HTML content
        $htmlOutput = '';
        foreach ($doc->childNodes as $node) {
            $htmlOutput .= $doc->saveHTML($node);
        }

        // Clean up XML declaration and return the HTML
        return str_replace('<?xml encoding="UTF-8">', '', $htmlOutput);
    }
}

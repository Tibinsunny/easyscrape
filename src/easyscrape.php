<?php

namespace easyScrape;

class easyScrape
{
    public function scrapeNow($url, $startDelimiter, $endDelimiter)
    {
        $str=$sample = file_get_contents($url);
        $contents = array();
        $startDelimiterLength = strlen($startDelimiter);
        $endDelimiterLength = strlen($endDelimiter);
        $startFrom = $contentStart = $contentEnd = 0;
        while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
          $contentStart += $startDelimiterLength;
          $contentEnd = strpos($str, $endDelimiter, $contentStart);
          if (false === $contentEnd) {
            break;
          }
          $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
          $startFrom = $contentEnd + $endDelimiterLength;
    }
    return $contents;
}
}


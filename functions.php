<?php
declare(strict_types=1);
/**
 * Sort article based on date.
 * @param  array $a
 * @param  array $b
 * @return int
 */
function sortFunction(array $a,array $b ): int {
   return strtotime($b['date']) - strtotime($a['date']);
}

/**
 * Get the articel with most likes.
 * @param  array $news
 * @return array
 */
function getMax(array $news): array {
    $max = 0;
    foreach( $news as $key => $value ) {
      $max = max(array($max, $value['like']));
    }
      foreach ($news as $key => $value) {
        if ($value['like'] == $max) {
          return $value;
      }
    }
  }


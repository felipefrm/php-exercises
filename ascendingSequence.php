<?php

function isAscending($array) {
  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] - $array[$i - 1] <= 0) {
      return false;
    }
  }
  return true;
}

function itCanBeAscendingList($array) {
  $counter = 0;

  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] - $array[$i - 1] <= 0) {
      $counter++;

      $array_copy1 = $array;
      unset($array_copy1[$i]);
      $array_copy1 = array_values($array_copy1);

      $array_copy2 = $array;
      unset($array_copy2[$i-1]);
      $array_copy2 = array_values($array_copy2);

      if ($counter == 1) {
        if (isAscending($array_copy1) || isAscending($array_copy2)) {
          return 1;
        } else {
          return 0;
        }
      }
    }

    if ($counter > 1) {
      return 0;
    }
  }

  return 1;
}

echo itCanBeAscendingList(array(1, 2, 5, 3, 5));

?>
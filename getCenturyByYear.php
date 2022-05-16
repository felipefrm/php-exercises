<?php

function getCenturyByYear($year) {

  if ($year <= 100) {
    return 1;
  }

  $year_digits = strval($year);
  $digits_count = strlen($year_digits); 

  if ($year_digits[$digits_count -1] == 0 && $year_digits[$digits_count -2] == 0) {
    $century = intval(substr($year_digits, 0, -2));
  } else {
    $century = intval(substr($year_digits, 0, -2)) + 1;
  }

  return $century;
}

print_r(getCenturyByYear(300));

?>
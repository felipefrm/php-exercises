<?php

function getPrimesByInterval($initial, $end) {
  $primes = array();
  
  if ($initial < 2) $initial = 2;
  
  for ($i = $initial; $i < $end; $i++) {
    $isPrime = true;
    for ($j = 2; $j <= $i/2; $j++) {
      if ($i % $j == 0) {
        $isPrime = false;
        break;
      }
    }
    if ($isPrime) {
      array_push($primes, $i);
    }
  }

  return $primes;
}

print_r(getPrimesByInterval(1, 29));

?>
<?php

function NoRepeatNumbers($arr) {
  $ocurrences = array_count_values($arr);

  $no_repeat_numbers = array();
  foreach($ocurrences as $key=>$value) {
    if ($value == 1) {
      array_push($no_repeat_numbers, $key);
    }
  }

  return $no_repeat_numbers;
}

$arr = array();
for($i = 0 ; $i < 20; $i++){
  $arr[] = rand(0, 10);
 }

print_r(NoRepeatNumbers($arr));

?>
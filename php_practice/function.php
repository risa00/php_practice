<?php
function search($works, $keyword, $index = 1){
  $result = [];
  foreach ($works as $work) {
    if (strpos($work[$index], $keyword) !== false) {
      $result[] = $work;
    }
  }
  return $result;
}

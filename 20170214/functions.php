<?php
function get_csv_data($fileName){
  $lines = file($fileName, FILE_IGNORE_NEW_LINES);
  $records = [];
  foreach ($lines as $line) {
    $records[] = explode(",", $line);
  }

// print_r($records);
// exit();
  return $records;
}

function search($records, $keyword, $index = 2){
  $result = [];
  foreach ($records as $record) {
    if (strpos($record[2], $keyword) !== false) {
      $result[] = $record;
    }
  }
  return $result;
}

function entry($fileName, $no, $name, $message){
  $line = "$no,$name,$message";
  file_put_contents($fileName, $line . PHP_EOL, FILE_APPEND);
}

function h($str){
  echo htmlspecialchars($str, ENT_QUOTES);
}

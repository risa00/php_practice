<?php
$html = file_get_contents("http://s3-ap-northeast-1.amazonaws.com/itcaret/course/php/day2/data/fruits.html");

echo strlen($html) . PHP_EOL;

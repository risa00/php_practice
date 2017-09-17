<?php
session_start();
$userID = $_SESSION["userID"];

$title = $_POST["title"];
$comment = $_POST["comment"];
$image = $_POST["image"];
$image2 = $_POST["image2"];
$price = $_POST["price"];

$date = date("Y/m/d");


function newworks($userID, $title, $comment, $image, $date, $price, $image2){
  $line = "$userID,$title,$comment,$image,$date,$price,$image2" . PHP_EOL;
  file_put_contents("works.csv", $line, FILE_APPEND);
}

if (is_null($title) || $title == "") {
  header("location: new_works.php");
}else {
  newworks($userID, $title, $comment, $image, $date, $price, $image2);
  header("location: works.php");
}

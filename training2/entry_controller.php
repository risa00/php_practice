<?php
function entry($userID, $password){
  $line = "$userID,$password" . PHP_EOL;
  file_put_contents("user.csv", $line, FILE_APPEND);
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if ($userID !== "" && $password !== "") {
  entry($userID, $password);
  session_start();
  $_SESSION["userID"]= $userID;

  header("location: menu3.php");
}else {
  header("location: entry.php");
}

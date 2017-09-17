<?php
function login($userID, $password){
  $lines = file("user.csv", FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    $user = explode(",", $line);
    if ($user[0] === $userID && $user[1] ===$password) {
      return true;
    }else {
      return false;
    }
  }
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if (login($userID, $password) == true) {
  session_start();
  $_SESSION["userID"]= $userID;
  header("location: menu2.php");
}else {
  header("location: login2.php");
}

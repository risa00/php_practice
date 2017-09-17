<?php

function login($userID, $password){

  $lines = file("user.csv", FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    $user = explode("," , $line);
    if ($user[0] === $userID && $user[1] === $password) {
      return true;
    }else {
      return false;
    }
  }
}

$userID = $_GET["userID"];
$password = $_GET["password"];

if (login($userID, $password) == true) {
  session_start();
  $_SESSION["userID"] = $userID;
  include("questions.php");
}else {
  include("index.html");
}

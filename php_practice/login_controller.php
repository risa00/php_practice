<?php
$userID = $_GET["userID"];
$password = $_GET["password"];


$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root');
$st = $pdo->query('select id, password from wcs');
$loginStates = false;
while ($wcs = $st->fetch()) {
  if ($wcs[0] === $userID && $wcs[1] === $password) {
    session_start();
    $_SESSION["userID"] = $userID;
    $loginStates = true;
  }
}

if ($loginStates == true) {
  header("Location: works.php");
}else{
  header("Location: LP.php");
}

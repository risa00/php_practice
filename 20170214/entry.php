<?php
require("functions.php");

$no = $_POST["no"];
$name = $_POST["name"];
$message = $_POST["message"];
if ($no === "" || $name === "" || $message === "") {
  header("location: ./entry.html");
  return;
}

entry("message.csv", $no, $name, $message);

header("location: ./list.php");

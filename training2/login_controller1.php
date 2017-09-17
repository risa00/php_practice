<?php
$userID = $_POST["userID"];
$password = $_POST["password"];

if ($userID === "itc" && $password ==="201508c") {
  include("menu1.php");
}else {
  include("login1.php");
}

<?php
// リクエストからID、パスワード、Eメールを取得する
$userID = $_POST["userID"];
$password = $_POST["password"];
$email = $_POST["email"];

// 入力チェック
$str_userID = strlen($userID);
$str_password = strlen($password);
$str_email = strlen($email);

if ($str_userID == 0 || $str_userID > 20) {
  header("Location: new_entry.html");
}elseif ($str_password == 0 || $str_password > 20) {
  header("location: new_entry.html");
}elseif($str_email == 0 || $str_email > 20) {
  header("location: new_entry.html");
}else {
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root');
  $pdo->exec("insert into wcs values ('$userID', '$password', '$email')");
  header("Location: LP.php");
}

//mysqlに登録

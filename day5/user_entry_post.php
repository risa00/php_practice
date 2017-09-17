<?php
// リクエストからID、パスワード、Eメールを取得する
$id = $_POST["id"];
$password = $_POST["password"];
$email = $_POST["email"];

$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root');
$count = $pdo->exec("insert into user values ('$id', '$password', '$email')");

echo $count . PHP_EOL;
// USERテーブルにID、パスワード、Eメールを登録する


// user_list.phpにリダイレクトする
header("Location: user_list.php");

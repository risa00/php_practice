<?php
// ユーザID、パスワードを取得する
$userID = $_POST["id"];
$password = $_POST["password"];


// 入力チェック：ユーザIDが0文字の場合、20文字を超える場合はlogin.phpへリダイレクトする
$str_id = strlen($userID);
$str_password = strlen($password);
if ($str_id == 0 || $str_id > 20) {
  header("Location: login.php");

// 入力チェック：パスワードが0文字の場合、20文字を超える場合はlogin.phpへリダイレクトする
}elseif ($str_password == 0 || $str_password > 20) {
  header("location: login.php");
  return;
}

// ログイン処理：select * from user where id = ? and password = ?; を実行してレコードの存在を確認する
// ログインできた場合（レコードが存在する場合）、セッションにユーザIDを保存して、menu.phpへリダイレクトする
// ログインできなかった場合（レコードが存在しない場合）、login.phpへリダイレクトする

$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root');
$st = $pdo->query('select id, password from user');
while ($user = $st->fetch()) {
  if ($user[0] === $userID && $user[1] === $password) {
    session_start();
    $_SESSION["userID"] = $userID;
    header("menu.php");
  }else {
    header("login.php");
  }
}

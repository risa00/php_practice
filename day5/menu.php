<?php
session_start();

if (isset($_SESSION["userID"]) === false) {
  header("Location: login.php");
  return;
}
$userID = $_SESSION["userID"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>IT CARET</title>
</head>
<body>
  <h2>IT CARET</h2>
  User: <?php echo htmlspecialchars($userID); ?>
  <hr>
  <h3>Menu</h3>
  <ul>
    <li>Menu 1</li>
    <li>Menu 2</li>
    <li>Menu 3</li>
  </ul>
</body>
</html>

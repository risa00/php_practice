<?php
session_start();
$userID = $_SESSION["userID"];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT Caret</title>
  </head>
  <body>
    <img src="logo.png" alt="">
    <?php echo $userID . "さんでログイン中"; ?>
    <hr>

    <ul>
      <li>Menu 1</li>
      <li>Menu 2</li>
      <li>Menu 3</li>

    </ul>

  </body>
</html>

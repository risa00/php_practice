<?php
$size = $_GET["size"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT</title>
  </head>
  <body>
    <?php if ($size === "l") { ?>
    <h1>Large</h1>
    <?php }elseif ($size === "m") { ?>
    <h2>Medium</h2>
    <?php }elseif ($size === "s") { ?>
    <h3>small</h3>
    <?php } ?>

  </body>
</html>

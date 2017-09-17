<?php
$fruits = $_POST["fruits"];
$type = $_POST["type"];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT</title>
  </head>
  <body>
    <?php if ($fruits === "apple" || $fruits === "cherry") { ?>
      <font color = "red"><?php echo $fruits . "/". $type ; ?></font>
    <?php }elseif ($fruits === "banana"){ ?>
    <font color = "yellow"><?php echo $fruits . "/" . $type; ?>
    <?php } ?>
  </body>
</html>

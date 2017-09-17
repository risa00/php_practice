<?php
$members = ["Ishihara", "Kashiwabara", "Kawano", "Hiroishi", "Minami"];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <ul>
    <?php for ($i=0; $i < count($members); $i++) {
      echo "<li>" . $members[$i] . "</li>" . PHP_EOL;
    } ?>
    </ul>
  </body>
  </html>

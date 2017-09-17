<?php
function h($val){
  return htmlspecialchars($val);
}

echo php_ini_loaded_file();


$myText = $_POST["myText"];
$myPassword = $_POST["myPassword"];
$myRadio = $_POST["myRadio"];
$myCheckbox = $_POST["myCheckbox"];
$myHidden = $_POST["myHidden"];
$mySelect = $_POST["mySelect"];
$myTextarea = $_POST["myTextarea"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h3>input.php</h3>
    <ul>
      <li>myText:<?php echo h($myText); ?></li>
      <li>myPassword:<?php echo $myPassword; ?></li>
      <li>myRadio:<?php echo $myRadio; ?></li>
      <li>myCheckbox:<?php echo $myCheckbox; ?></li>
      <li>myHidden:<?php echo $myHidden; ?></li>
      <li>mySelect:<?php echo $mySelect; ?></li>
      <li>myTextarea:<?php echo $myTextarea; ?></li>
    </ul>
  </body>
</html>

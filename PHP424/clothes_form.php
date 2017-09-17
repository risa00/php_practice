<?php
session_start();
if (isset($_SESSION["name"])) {
  $name = $_SESSION["name"];
}else { $name = "";
}
if (isset($_SESSION["kana"])) {
  $kana = $_SESSION["kana"];
}else { $kana = "";
}
if (isset($_SESSION["address"])) {
  $address = $_SESSION["address"];
}else { $address = "";
}
if (isset($_SESSION["type"])) {
  $type = $_SESSION["type"];
}else { $type = "";
}
if (isset($_SESSION["size"])) {
  $size = $_SESSION["size"];
}else { $size = "";
}
if (isset($_SESSION["color"])) {
  $color = $_SESSION["color"];
}else { $color = "";
}
if (isset($_SESSION["email"])) {
  $email = $_SESSION["email"];
}else { $email = "";
}
if (isset($_SESSION["pass"])) {
  $pass = $_SESSION["pass"];
}else { $pass = "";
}


?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>php基礎2</title>
 <link rel="stylesheet" href="sample.css">
</head>
<body>
	<div id="page">
		<h2>Form送信画面</h2><br>

<form action="clothes_check.php" method="post" name ="send">
名前 ：
	<input type="text" name="name"   value="<?php echo $name; ?>" >
<br><br><hr><br>

ローマ字表記 ：
	<input type="text" name="kana"   value="<?php echo $kana; ?>">
<br><br><hr><br>

住所：
	<input type="text" name="address"   value="<?php echo $address; ?>">
<br><br><hr><br>

商品タイプ：
<?php
$types = array("レディース", "メンズ", "ユニセックス");
for ($i=0; $i < count($types); $i++) {
echo "<input type='radio' name='type' value='{$types[$i]}'";
  if ($type === $types[$i]) {
    echo "checked";
  }
echo ">{$types[$i]}　";
}
?>
<br><br><hr><br>

サイズ：
<?php
$sizes = array("S", "M", "L");
foreach ($sizes as $value) {
  echo "<input type='radio' name='size' value='$value'";
  if ($size === $value) {
    echo "checked";
  }
  echo ">{$value} サイズ　";
}
 ?>
 <br><br><hr><br>

カラー：
<?php
$colors = array("white.jpg", "green.jpg", "red.jpg", "blue.jpg");
$j = 0;
while ($j < count($colors)) {
  echo "<input type='checkbox' name='color' value='$colors[$j]'";
  if ($color === $colors[$j]) {
    echo "checked";
  }
echo "><img src='{$colors[$j]}' width='100px'>　";
$j++;
}
 ?>
 <br><br><hr><br>


Email：
	<input type="email" name="email"  value="<?php echo $email; ?>">
<br><br>

確認用Email：
<input type="email" name="email_ck"  value="<?php echo $email; ?>">
<br><br><hr><br>

パスワード ：
	<input type="password" name="pass">
<br><br>

確認用パスワード ：
<input type="password" name="pass_ck" >


	<br><br>

<div style="text-align: center;">
	<input type="submit" value="CHECK" name="send" id="submit">
	<input type="reset" value="RESET" name="clear" id="reset">
</div>
</form>

</div>
</body>
</html>

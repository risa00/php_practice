<?php
session_start();
if (isset($_POST["send"])){
	if (isset($_POST["name"], $_POST["sei"], $_POST["size"],
			$_POST["color"], $_POST["item"])){
	$send =$_POST["send"];
	$name = $_POST["name"];
	$sei = $_POST["sei"];
	$size = $_POST["size"];
	$color = $_POST["color"];
	$item = $_POST["item"];

	$_SESSION["send"]=$send;
	$_SESSION["name"]=$name;
	$_SESSION["sei"] =$sei;
	$_SESSION["size"] =$size;
	$_SESSION["color"] =$color;
	$_SESSION["item"] =$item;
}
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
		<h2>確認画面</h2><br>
		名前： <?php echo $name; ?><br><hr><br>
		性別： <?php echo $sei; ?><br><hr><br>
		サイズ： <?php echo $size; ?><br><hr><br>
		カラー： <?php echo $color; ?><br><hr><br>
		個数： <?php echo $item; ?><br><hr><br>
		合計金額： <?php echo $item * 2800 . "円"; ?><br><hr><br>
<br><br>
<div style="text-align: center;">
	<a href ="shopping_buy.php"><input type="submit" value="BUY NOW" name="send" id="submit"></a>
	<a href ="shopping_form.php"><input type="button" value="修正" name="" id="reset"></a>
</div>
	</div>
</body>
</html>

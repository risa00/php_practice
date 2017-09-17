<?php

session_start();
if (isset($_SESSION["send"])){ //確認ページからの戻り
	if (isset($_SESSION["name"], $_SESSION["sei"],
			$_SESSION["size"], $_SESSION["color"],$_SESSION["item"])){

				$send = $_SESSION["send"];
				$name = $_SESSION["name"];
				$sei = $_SESSION["sei"];
				$size = $_SESSION["size"];
				$color = $_SESSION["color"];
				$item = $_SESSION["item"];

	}
}else {
	$send = "";
	$name = "";
	$sei = "";
	$size = "";
	$color = "";
	$item = "";

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
		<h2>Tシャツ　Form画面</h2><br>

<form action="shopping_check.php" method="post">
	氏名：
	<input type="text" name="name"   value="<?php echo $name; ?>">
<br><br><hr><br>

	性別：
	<input type="radio" name="sei" value="女性">女性　
	<input type="radio" name="sei" value="男性">男性　

<br><br><hr><br>


	サイズ：

	<?php
	$sizetype = array("SS", "S", "M", "L");
	foreach($sizetype as $value){
		echo "<input type='radio' name='size' value='{$value}'";
			if ($size == $value){
			echo "checked";
			}
	echo ">{$value} サイズ　" ;
	}
	?>

<br><br><hr><br>

	カラー：
	<?php
	$colortype = array("白", "黒", "赤", "青");
	foreach ($colortype as $value){
		echo
	}
	?>
	<input type="radio" name="color" value="白">白　
	<input type="radio" name="color" value="黒">黒　

<br><br><hr><br>

	個数 ：
	<select   name="item" >
	<option value="1">１枚</option>
	<option value="2">２枚</option>
	<option value="3">３枚</option>
	<option value="4">４枚</option>
	</select>

	<br><br>

<div style="text-align: center;">
	<input type="submit" value="CHECK" name="send" id="submit">
	<input type="reset" value="RESET" name="clear" id="reset">
</div>
</form>

</div>
</body>
</html>

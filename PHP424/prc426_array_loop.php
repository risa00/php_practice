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
		<h2>ループ文を使ったフォーム</h2><br>
<?php
$pre =array("東京", "千葉", "神奈川", "埼玉", "群馬");
echo "<select name= 'address'>";
for ($i = 0; $i<count($pre); $i++){
	echo "<option value='{$pre[$i]}'>{$pre[$i]}</option>";

}echo "</select>";

echo "<br>";

	$aaa =array(1,2,3,4,5,6,7);
	echo "<select name= 'number'>";
	for ($n = 0; $n<count($aaa); $n++){
		echo "<option value='{$aaa[$n]}'>{$aaa[$n]}</option>";
	}echo "</select>";
echo "<br>";

echo "<select name= 'year'>";
for ($y = 1990; $y< date("Y"); $y++){
	echo "<option value='{$y}'>{$y}年</option>";
}	echo "</select>　";

echo "<select name= 'month'>";
for ($y = 1; $y<= 12; $y++){
	echo "<option value='{$y}'>{$y}</option>";
}	echo "</select>月";


echo "<select name= 'day'>";
for ($y = 1; $y<=31; $y++){
	echo "<option value='{$y}'>{$y}</option>";
}	echo "</select>日";
?>
</div>
</body>
</html>
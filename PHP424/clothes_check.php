<?php
session_start();

$ml_error = "<p class='caution'>メールアドレスが確認用と異なります</p>";
$pass_error = "<p class='caution'>パスワードが確認用と異なっています</p>";
$emp_error = "<p class='caution'>入力されていません</p>";
$jap_error ="<p class='caution'>漢字、ひらがな、カタカナのみ使用可能です</p>";
$alf_error ="<p class='caution'>半角英字のみ使用可能です</p>";

//if (isset($_POST["send"])) {
	if (isset($_POST["name"])) {
		if (preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $_POST["name"])) {
			$name = $_POST["name"];
			$_SESSION["name"] = $name;
		}else {
			$name = $jap_error;
		}
	} else {
		$name = $emp_error;
	}

	if (isset($_POST["kana"])) {
		if (preg_match("/^[a-zA-Z]+$/", $_POST["kana"])) {
			$kana = $_POST["kana"];
			$_SESSION["kana"] = $kana;
		}else {
			$kana = $alf_error;
		}
	} else {
		$kana = $emp_error;
	}

	if (isset($_POST["address"])) {
		$address = $_POST["address"];
		$_SESSION["address"] = $address;
	} else {
		$address = $emp_error;
	}

	if (isset($_POST["type"])) {
		$type = $_POST["type"];
		$_SESSION["type"] = $type;
	} else {
		$type = $emp_error;
	}

	if (isset($_POST["size"])) {
		$size = $_POST["size"];
		$_SESSION["size"] = $size;
	} else {
		$size = $emp_error;
	}

	if (isset($_POST["color"])) {
		$color = $_POST["color"];
		$_SESSION["color"] = $color;
	} else {
		$color = $emp_error;
	}

	if (isset($_POST["email"], $_POST["email_ck"])){
		if ($_POST["email"] === $_POST["email_ck"]) {
			$email = $_POST["email"];
			$_SESSION["email"] = $email;
		}else {
			$email = $ml_error;
		}
	} else {
		$email = $emp_error;
	}

	if (isset($_POST["pass"], $_POST["pass_ck"])){
		if ($_POST["pass"] === $_POST["pass_ck"]) {
			$pass = $_POST["pass"];
			$_SESSION["pass"] = $pass;
		}else {
			$pass = $pass_error;
		}
	} else {
		$pass = $emp_error;
	}
//$send = $_POST["send"];
//}

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
		ローマ字表記： <?php echo $kana; ?><br><hr><br>
		住所： <?php echo $address; ?><br><hr><br>
		商品タイプ： <?php echo $type;?><br><hr><br>
		サイズ： <?php echo $size;?><br><hr><br>
		カラー： <?php echo "<img src='{$color}' width='100px'>"; ?><br><hr><br>
		Email： <?php echo $email; ?><br><hr><br>
		パスワード： <?php echo $pass; ?><br><hr><br>


<br><br>
<div style="text-align: center;">
	<a href ="clothes_send.php"><input type="submit" value="送信" id="submit"></a>
	<a href ="clothes_form.php"><input type="button" value="修正" id="reset"></a>

<?php
	echo "<input type='button' value='キャンセル' id='reset' onclick=\"location.href='clothes_form.php'\">";
	//session_destroy();
 ?>
</div>

<?php
/*if ($send === true) {
	echo "<div style='text-align: center;'>
	<a href ='clothes_send.php'><input type='submit' value='送信' id='submit'></a>
	<a href ='clothes_form.php'><input type='button' value='修正' id='reset'></a>
</div>";
}else {
	echo "<div style='text-align: center;'>
	<a href ='clothes_form.php'><input type='button' value='修正' id='reset'></a>
</div>";
}*/
?>
	</div>
</body>
</html>

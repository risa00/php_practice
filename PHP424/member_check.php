<?php
session_start();

	if (isset($_POST["name"], $_POST["kana"], $_POST["email"],
			$_POST["tel1"], $_POST["tel2"], $_POST["tel3"],
			$_POST["address"], $_POST["sei"], $_POST["day"],
			$_POST["pass"], $_POST["email_ck"], $_POST["pass_ck"])){
				if ($_POST["email"] ===$_POST["email_ck"] &&
						$_POST["pass"] ===$_POST["pass_ck"]){

	$name =$_POST["name"];
	$kana =$_POST["kana"];
	$email = $_POST["email"];
	$tel1 =$_POST["tel1"];
	$tel2 =$_POST["tel2"];
	$tel3 =$_POST["tel3"];

	$tel =$_POST["tel1"] . "-". $_POST["tel2"] . "-" . $_POST["tel3"];
	$address =$_POST["address"];
	$sei =$_POST["sei"];
	$day =$_POST["day"];
	$pass =$_POST["pass"];


	$_SESSION["name"]=$name;
	$_SESSION["kana"]=$name;
	$_SESSION["email"] =$email;
	$_SESSION["tel1"] =$tel1;
	$_SESSION["tel2"] =$tel2;
	$_SESSION["tel3"] =$tel3;
	$_SESSION["address"]=$address;
	$_SESSION["sei"]=$sei;
	$_SESSION["day"] =$day;
	$_SESSION["pass"] =$pass;
				}else{
header("location: member_form.php");
	}
}else {
	echo "入力されていない項目があります。 <br>
<input type='button' value='戻る' onclick=\"location.href='member_form.php'\"/>";
	exit();
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
		<h2>Member確認画面</h2><br>
		名前： <?php echo $name; ?><br><hr><br>
		ヨミガナ： <?php echo $kana; ?><br><hr><br>
		Email： <?php echo $email; ?><br><hr><br>
		Tel： <?php echo $tel;?><br><hr><br>
		住所： <?php echo $address; ?><br><hr><br>
		性別： <?php echo $sei; ?><br><hr><br>
		生年月日： <?php echo $day; ?><br><hr><br>
		パスワード： <?php echo $pass; ?><br><hr><br>


<br><br>
<div style="text-align: center;">
	<a href ="member_send.php"><input type="submit" value="送信" name="send" id="submit"></a>
	<a href ="member_form.php"><input type="button" value="修正" name="" id="reset"></a>
</div>
	</div>
</body>
</html>
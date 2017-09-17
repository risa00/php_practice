<?php
session_start();

	if (isset($_SESSION["name"], $_SESSION["kana"], $_SESSION["email"],
			$_SESSION["tel1"], $_SESSION["tel2"], $_SESSION["tel3"],
			$_SESSION["address"], $_SESSION["sei"], $_SESSION["day"],
			$_SESSION["pass"])){
				$send =$_SESSION["send"];
				$name =$_SESSION["name"];
				$kana =$_SESSION["kana"];
				$email = $_SESSION["email"];
				$tel1 =$_SESSION["tel1"];
				$tel2 =$_SESSION["tel2"];
				$tel3 =$_SESSION["tel3"];
				$address =$_SESSION["address"];
				$sei =$_SESSION["sei"];
				$day =$_SESSION["day"];
				$pass =$_SESSION["pass"];

	}
else {

	$name ="";
	$kana ="";
	$email = "";
	$tel1 ="";
	$tel2 ="";
	$tel3 ="";
	$address ="";
	$sei ="";
	$day ="";
	$pass ="";



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
		<h2>会員登録</h2><br>
*は必須項目<br><br>
<form action="member_check.php" method="post">
	名前 *：
	<input type="text" name="name"   value="<?php echo $name; ?>" required>
<br><br><hr><br>

ヨミガナ *：
	<input type="text" name="kana"   value="<?php echo $kana; ?>" required>
<br><br><hr><br>

	Email *：
	<input type="email" name="email"  value="<?php echo $email; ?>"required>
<br><br><hr><br>

Tel：
	<input type="text" name="tel1"   value="<?php echo $tel1; ?>" size="2">-
		<input type="text" name="tel2"   value="<?php echo $tel2; ?>"size="2">-
			<input type="text" name="tel3"   value="<?php echo $tel3; ?>"size="2">
<br><br><hr><br>

住所：
	<input type="text" name="address"   value="<?php echo $address; ?>">
<br><br><hr><br>

	性別：
	<input type="radio" name="sei" value="女性">女性　
	<input type="radio" name="sei" value="男性">男性　
<br><br><hr><br>

	生年月日：
	<input type="date" name="day">
<br><br><hr><br>

	パスワード *：
	<input type="password" name="pass"  required>
<br><br><hr><br>

確認用<br>
	Email *：
	<input type="email" name="email_ck"  value="<?php echo $email; ?>"required>
<br><br>

	パスワード *：
	<input type="password" name="pass_ck" required>


	<br><br>

<div style="text-align: center;">
	<input type="submit" value="CHECK" name="send" id="submit">
	<input type="reset" value="RESET" name="clear" id="reset">
</div>
</form>

</div>
</body>
</html>
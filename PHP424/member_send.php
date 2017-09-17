<?php
session_start();
if (isset($_SESSION["send"])){
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
		<br><h2>送信します。</h2><br>

	</div>
</body>
</html>
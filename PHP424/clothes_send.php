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
		<br><h3>送信しました</h3><br>

	</div>
</body>
</html>

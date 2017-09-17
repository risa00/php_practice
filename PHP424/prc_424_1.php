<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
	body		{background:#666;}
	#wrap	{width:80%; padding:10px 5%; margin:auto;
				background:#55FF88;}
	#fm{width:70%; padding:6%; margin:auto; background:#fff;}
</style>
</head>
<body>
	<div id="wrap">
	<h1>データー送信形式の学習（POST,SESSION,COOKIE)</h1>
 		<h2>SESSOIN復習</h2>
 		＊SESSIONのデーターを別ページに引き継ぐ練習<br>
 		<?php
 			$_SESSION["name"]="鈴木";
 			$_SESSION["day"]=date("Y年m月d日");
 		?>

 		<button type="button"
 		onClick="location.href='prc_424_2.php'">　
 		リンクで送信する　
 		</button>
	<br><hr><br>
		<h2>POST（FORM)の復習</h2>
		<form method="post" action="prc_424_2.php">
			性別　：	男性　<input type="radio" name="sei" value="男性">　　
						女性　<input type="radio" name="sei" value="女性"><br>
			メール ：<input type="email" name="mail" size="30"><br>
			TEL	：<input type="text" name="tel"><br><hr><br>
			<button type="submit">　フォーム送信　</button>
		</form>
<br><hr><br>
		<h2>COOKIEの学習</h2>
		＊COOKIEは、setcookie("クッキー名","データー","有効期間" )で<br>
		設定したデーターを $_COOKIEで呼び出す。</br>
		<?php
			setcookie("test","クッキーデーターの引き継ぎ");
		?>

 		<button type="button"
 		onClick="location.href='prc_424_2.php'">　
 		リンクで送信する　
 		</button>


   </div>
</body>
</html>
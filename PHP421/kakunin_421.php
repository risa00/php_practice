<?php
session_start();

	//FormのPOSTデーターの受け取り
	if(isset($_POST["name"],$_POST["kana"],
				$_POST["sei"],$_POST["day"],
				$_POST["mail"],$_POST["pass"])){
		//POSTデーターの変数化
		$name		=	$_POST["name"];//*
		$kana		=	$_POST["kana"];//*
		$sei			=	$_POST["sei"];
		$birth	 	=	$_POST["day"];//*
		$mail			=	$_POST["mail"];//*
		$pass 		=	$_POST["pass"];//*

		//SESSHONデーター化
		$_SESSION["name"]	=	$name;
		$_SESSION["kana"]	=	$kana;
		$_SESSION["sei"]		=	$sei;
		$_SESSION["day"]	=	$birth;
		$_SESSION["mail"]	=	$mail;
		$_SESSION["pass"]	=	$pass;




		}

		if(isset($_SESSION["hiduke"])){
			$day=$_SESSION["hiduke"];
			}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>確認ページ</title>
<style>
	body		{background:#666;}
	#wrap	{width:80%; padding:10px 5%; margin:auto;
				background:#F9F;}
</style>
</head>

<body>
	<div id="wrap">
   		<header><h1>確認ページ</h1></header>
   		<section>
   		<?php
   			echo "日付：　",$day;
   			echo <<<EOT
				<h3>氏名：{$name}</h3>
		<hr>
				ヨミガナ：　{$kana}<br>
		<hr>
				性別：　{$sei}<br>
		<hr>
				生年月日:　{$birth}<br>
		<hr>
				Eメールアドレス:　$mail<br>
		<hr>
				パスワード:　$pass



EOT;

			?>
		<br><hr><br>

		<a href="form_421.php">　戻る　</a>　　
		<a href="sousin_421.php">送信</a>


   		</section>
   		<footer></footer>
   </div>
</body>
</html>
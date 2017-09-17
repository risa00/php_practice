<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>データー送受信学習２</title>
<style>
	body		{background:#666;}
	#wrap	{width:80%; padding:10px 5%; margin:auto;
				background:#55FF88;}
	#fm{width:70%; padding:6%; margin:auto; background:#fff;}
</style>
</head>
<body>
	<div id="wrap">
 		<h2>SESSOIN受取</h2>
 		<strong>＊isset()関数を利用して$_SESSION[]データーを受け取る</strong><br>
 		<?php
				if(isset($_SESSION["name"] , $_SESSION["day"])){
					$name	=$_SESSION["name"];
					$day		=$_SESSION["day"];

					echo $_SESSION["day"],"<br>",
							$_SESSION["name"];
			}else{	echo "エラー：データーの受け取りに失敗しました。";}
		?>
		 <br><hr><br>
 		<button type="button" onClick="location.href='prc_424_1.php'">　リンクで戻る　</button>
		 <br><hr><br>
		<h2>POST（form）受取</h2>
 		<strong>＊isset()関数を利用して$_POST[]データーを受け取る</strong><br>
 		<?php
				if(isset($_POST["sei"] , $_POST["mail"],$_POST["tel"])){
					$sei	=$_POST["sei"];
					$mail=$_POST["mail"];
					$tel	=$_POST["tel"];

					echo $_POST["sei"],"<br>",$_POST["mail"],"<br>";

			}else{	echo "エラー：データーの受け取りに失敗しました。";}
		?>
	 <br><hr><br>
		<h2>受取データーをフォームに入れる</h2>
		<form method="post" action="#">
			登録日時　：<?php  echo $day; ?><br><hr>
			氏名　：<input type="text" name="name"
						value="<?php if(!empty($name)) {echo $name;}?>"
						readonly><br><hr>
			性別　：<input type="text" name="sei"
						value="<?php if(!empty($sei)) {echo $sei;}?>"
						disabled><br><hr>
			メール ：<input type="email" name="mail"
						value="<?php if(!empty($mail)) {echo $mail;}?>">
		</form>
	<br><hr><br>
	<h2>フォームデーターのエラー表示</h2>
	<?php
		if(!empty($sei)){
			echo $sei."<br>";
		}else{ echo "データーが空です。　<a href=''>戻るボタン</a> ";
					exit(); }

		if(!empty($mail)){
				echo $mail."<br>";
		}else{ echo "メールアドレスは必須情報です。　<a href=''>戻るボタン</a> ";
				exit(); }

		//正規文で電話番号のチェック
		if(!empty($tel)){
			if(preg_match("/^[0-9]{10,12}$/",$tel)){
				echo $tel."<br>";
			}else{ echo "電話番号が適切ではありません。";}
		}else{ echo "電話番号の記載がありません。";}

	?>
	<br><hr><br>
		<h2>COOKIEデーターの受取</h2>
		<?php
		if(isset($_COOKIE["test"])){
			echo $_COOKIE["test"];
		}
		?>

	<br><hr><br>
		<h2>SESSION/COOKIEデーター比較(アクセスカウンター)</h2>
		<?php
			if(isset($_SESSION["count"])){
				$count=$_SESSION["count"]+1;
			}else{$count=1;}
				echo "セッションCOUNTER　：　{$count}";
				$_SESSION["count"]=$count;

			//SESSIONデーターの削除
				echo '<form method="post">
						<button type="submit" name="clear">　
						カウンターリセット　</button><br><hr><br>
						</form>';
				if(isset($_POST["clear"])){
					session_destroy();
					echo'<script>
							setTimeout("location.reload()",1000);
						</script>';
					}


			if(isset($_COOKIE["counter"])){
				  	$counter=$_COOKIE["counter"]+1;
			 }else{$counter=1;}
				  setcookie("counter",$counter,time()+60);
				  echo "クッキーCOUNTER　：　{$counter}";
		  ?>


   </div>
</body>
</html>
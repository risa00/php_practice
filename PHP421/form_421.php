<?php
session_start();
	//確認ページからSESSIONの受取
	if(isset($_SESSION["name"] , $_SESSION["kana"],
			$_SESSION["sei"] , $_SESSION["day"],
			$_SESSION["mail"] , $_SESSION["pass"])){

				$name		=	$_SESSION["name"];//*
				$kana		=	$_SESSION["kana"];//*
				$sei			=	$_SESSION["sei"];
				$birth	 	=	$_SESSION["day"];//*
				$mail			=	$_SESSION["mail"];//*
				$pass 		=	$_SESSION["pass"];//*
	}
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>メンバー登録フォーム</title>
<style>
	body		{background:#666;}
	#wrap	{width:80%; padding:10px 5%; margin:auto;
				background:#55FF88;}
</style>
</head>
<body>
	<div id="wrap">
   		<header><h1>登録フォーム</h1></header>
   		<?php
   			date_default_timezone_set('Asia/Tokyo');
   			$_SESSION["hiduke"]=date("Y-m-d H:i:s");
   		?>
   		<section>
   			<form method="post" action="kakunin_421.php">
   			<table>
   				<tr><th>氏　名</th>
   						<td><input type="text" name="name"
   								value="<?php if(!empty($name)){echo $name;} ?>"
   								placefolder="＊必須項目" required></td></tr>
   				<tr><th>ヨミガナ</th>
   						<td><input type="text" name="kana"
   								value="<?php if(!empty($kana)){echo $kana;} ?>"
   								placefolder="" ></td></tr>
   				<tr><th>性　別</th>
   						<td>
   						<?php
									if (!empty($sei)){
										if($sei=="男性"){ //SESSIONで男性データーが戻った時
									echo '
									男性<input type="radio" name="sei" value="男性"
   										checked="checked" />
   									女性<input type="radio" name="sei" value="女性" />
									';
										}else{ //SESSIONで女性のデーターが戻った時
											echo '
									男性<input type="radio" name="sei" value="男性"	/>
   									女性<input type="radio" name="sei" value="女性"
									checked="checked" />
									';
									}
									}else{ //最初にページを開いた表示
										echo '
									男性<input type="radio" name="sei" value="男性"	/>
   									女性<input type="radio" name="sei" value="女性"
									checked="checked" />
									';
									}

									?>
   						</td></tr>
   				<tr>
						<th>生年月日:</th>
						<td>
						　<input type="date" name="day" />
						</td>
				</tr>
   				<tr><th>メールアドレス:</th>
					<td><input type="email" name="mail" size="30"
							value="<?php if(!empty($mail)){echo $mail;} ?>"
							placefolder="＊必須項目" required /></td>
				</tr>
				<tr>
					<th>パスワード:</th>
					<td><input type="password" name="pass"
								value="<?php if(!empty($pass)){echo $pass;} ?>"
								placefolder="＊必須項目" required><br />
					※4文字以上の半角英数字で入力して下さい
					</td>
				</tr>
				<tr><th colspan="2">
					<input type="submit" value="　確認　" >
					<?php if(isset($name)||isset($kana)||
					 			isset($sei)||isset($mail)||isset($pass)){
					echo '</form>
   				<form method="post" style="display:inline;">
						<input type="submit" name="clear" value=" クリア ">';

					if(isset($_POST["clear"])){
						session_destroy();	//リセットボタンでセッションを消す

					echo'<SCRIPT LANGUAGE="JavaScript">
						<!--
							setTimeout("location.reload()",10);
							//-->
						</SCRIPT>';}//消したセッションを有効にする為にページを更新するJS。

				}else{echo '<input type="reset" value="やり直す">';}
				?>　　　　
					<input type="reset" value="やり直す">
					</th></tr>
   			</table>
   			</form>
   		</section>


   		<footer></footer>
   </div>
</body>
</html>
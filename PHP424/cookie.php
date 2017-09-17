
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>COKKIE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body	{background:#006;}
		#wrap	{background:#3FC688; width:60%; margin:auto; padding:5%;}
		#send	{width:150px; text-align;center; padding:3px 10px;
				font-size:1.6em; border-radius:20px;}

		#user	{width:80%; background:#A9AFFF; padding:5%; margin:20px auto;}

		</style>
  <!--[if lt IE 9]>
  <script src="/js/html5.js></script>
  <![endif]-->
  </head>
  <body>
  <div id="wrap">
  <h1>COOKIE</h1>
  <?php
  if(isset($_COOKIE["user"],$_COOKIE["pass"])){
  	$name=$_COOKIE["user"];
  	$pass=$_COOKIE["pass"];
  }else{ $name=""; $pass="";}

  if(isset($_COOKIE["counter"])){
  	$counter=$_COOKIE["counter"]+1;
  }else{$counter=1;}
  setcookie("counter",$counter);
  echo "COUNTER　：　{$counter}";

  ?>
  <form method="post">
  	<p>ID　：　<input type="text" name="name" value="<?php echo $name; ?>" size="30"></p>
    <p>パスワード　：<input type="password" name="pass" size="10" value="<?php echo $pass; ?>"></p>
    <input type="checkbox" name="save" value="on"><label for="save" >IDを保存する</label>


  	<button type="submit" name="snd" id="send">認 証</button><br>
  </form>
  <hr>
<?php
	if(isset($_POST["snd"])){
		if(isset($_POST["name"],$_POST["pass"])){
			$name=$_POST["name"];
			$pass=$_POST["pass"];

		if(isset($_POST["save"])){
			if($_POST["save"]=="on"){
				setcookie("user",$name,time()+120);
				setcookie("pass",$pass,time()+120);
				echo "認証を保存いたしました";
			}
		}
			echo "<div id='user'>
					<h2>ID : {$name}　です</h2>
					</div>";
				}
		}




?>
</div>
</body>
</html>

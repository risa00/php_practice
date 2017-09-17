<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>演習問題為替計算フォーム</title>
	<style>
		body{background:#004400;}
		#wrap{width:60%; padding:50px; margin:auto;
				background:#98fb98;}
	</style>

    <body>
    <div id="wrap">
   <h1>CURRENCY EXCHANGE</h1>
   <form method="post">
   		$ => \ <input type="radio" name="money" value="yen"> 　　\ => $ <input type="radio" name="money" value="dollar">
  		<br><hr><br>
   		金額：　　<input type="text" size="30" name="price">
   		<br><hr><br>


   		<input type="submit"  name="snd" value="　確 認　">
    </form>
    <?php
		if(isset($_POST["snd"])){
			if(isset($_POST["price"],$_POST["money"])){
				$price=$_POST["price"];
				$money=$_POST["money"];

				if($money=="dollar"){$m=0.0097;
					echo "<h3> {$price}円　→　米ドル　：",$price * $m,"ドル</h3>";
				}
				else{$m=110;
				echo "<h3> {$price}米ドル　→　円　：",$price * $m,"円</h3>";
				}

			}//form受け取り終了
		}//snd終了
	?>
	</div>
    </body>

</html>
<?php
session_start();
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
	#fm{width:70%; padding:6%; margin:auto; background:#fff;}
</style>
</head>
<body>
	<div id="wrap">
 	<h1>練習4/21</h1>
 		<h3>DATE関数</h3>
 		date("");　””コーテーション内のパラメーターは、<br>
 		Y = 4桁の西暦　　M =英語の月　　m =数字の月　　d =日付<br>
 		H =時刻　　　　i =分　　　　s =秒　　　　w =曜日の数字　<br>
 		<?php
   			date_default_timezone_set('Asia/Tokyo');
 			$week=array("日","月","火","水","木","金","土");
 			echo date("Y年m月d日"), $week[date("w")]."曜日<br>";
 			echo date("H時i分s秒");

   			?>

   		<h3>フォームと、セッションの復習</h3>
   		<?php
   		$_SESSION["a"]="鈴木";
   		?>
   		<form method ="post">
   		文字データー　：　<input type="text" name="text" size="30"><br>
		<input type="submit" name="snd" value="　テスト　">
   		</form>

   		<?php
   		//データーの受取
   		if(isset($_POST["snd"])){
   			if(isset($_POST["text"],$_SESSION["a"])){
   				echo "セッションデーター：", $_SESSION["a"],"様いらっしゃいませ<br>";
   				echo "ポストデーター：", $_POST["text"],"<br>";
   			}
   		}

   		?>
<hr>
	<h2>練習課題　血液型占い</h2>
	<div id="fm">
		<form method="post">
		 <p>名前:　　<input type="text" name="name" placeholder="お名前" size="20"/></p>
		 <p>血液型は？:
		  <input type="radio" name="ketsueki" value="A" />A型　　
		  <input type="radio" name="ketsueki" value="AB"/>AB型　　
		  <input type="radio" name="ketsueki" value="B"/>B型　　
		  <input type="radio" name="ketsueki" value="O"/>O型
		 </p>
		 <p>	<input type="submit" name="sub" value="送信"/>　　<input type="reset" value="クリア"</p>

		</form>
	<?php
		if(isset($_POST["sub"])){
			if(isset($_POST["name"],$_POST["ketsueki"])){
		echo"<br><hr><br>";

			$a=	array("完璧主義者のあなたにふさわしい良い1日",
						"一途な思いで将来が明るくなります",
						"きれいずきが裏目に出て仕事が大変");
			$ab=	array("飽きっぽい性格が幸いして、良い経験が出来ます",
						"感情豊かなあなたには少しつらい出来事が",
						"アートな感性を持っている分物事が新鮮に見えます");
			$b=	array("わがままから、周りとの人間関係が大変に",
						"頑固な性格が逆に、一途な面に表れて良いことが",
						"太っ腹なあなたに頼ってくる異性が出てくるかも");
			$o=	array("世話好きなあなたも面倒と思うタイプの異性が出てくるかも",
						"大雑把な性格が幸いして、トラブルからは回避！！",
						"委員長タイプでまとめ役になる事が多いけど、今日はゆったり出来ます");

			echo "<h3>{$_POST["name"]}さんの今日の占い</h3>";
			if($_POST["ketsueki"]=="A"){
				echo $a[rand(0,count($a))];
			}else if($_POST["ketsueki"]=="B"){
				echo $b[rand(0,count($b))];
			}if($_POST["ketsueki"]=="AB"){
				echo $ab[rand(0,count($ab))];
			}if($_POST["ketsueki"]=="O"){
				echo $o[rand(0,count($o))];
			}else{}
		}//post 受けend
	}//sub end
	?>

</div>

   </div>
</body>
</html>
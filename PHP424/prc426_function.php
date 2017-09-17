
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>php基礎2</title>
<link rel="stylesheet" href="sample.css">
</head>

<body>
	<div id="page">

		<h2>PHP関数の復習(定義関数)</h2>
<?php
	function test(){
		echo "hello!";
		$aisatsu = "おはよう";
		echo  $aisatsu;
	}
	test();
	echo "<br>";

	function num($a=1){
		//ここに$a=1を書いてもいい
		$b = 10;
		$c = 5;
		echo  $b + $c;
		echo "<br>";
		echo  ($a + $c) * $b;
	}
	num();
	echo "<br><br><hr><br>";
?>
		<h2>shuffle関数</h2>
<?php
$trump = array("A", "B", "C", 1,2,3,4,5,6);

shuffle($trump); //配列等のデータをシャッフルする
var_dump($trump); //配列をすべて表示する、stringは文字列、intは数字
echo"<br><br>";

$draw1 = array_shift($trump); //配列の先頭を引いて利用後に最後尾に回す
$draw2 = array_shift($trump); //randと違ってすでに出たデータは出ない
$draw3 = array_shift($trump);
$draw4 = array_shift($trump);
echo $draw1 . "<br>";
echo $draw2 . "<br>";
echo $draw3 . "<br>";
echo $draw4 . "<br>";

$data = array("red" , "yellow" ,  "1" , "2" , 3, 4);
var_dump($data);

?>

<br><br><hr><br>

<?php
$list = array("青木", "女性", "大阪",
				"田中", "女性", "東京",
				"鈴木", "男性", "愛知");

$n1 =  array_shift($list);
$s1 =  array_shift($list);
$k1 =  array_shift($list);
$n2 =  array_shift($list);
$s2 =  array_shift($list);
$k2 =  array_shift($list);
$n3 =  array_shift($list);
$s3 =  array_shift($list);
$k3 =  array_shift($list);

echo <<<EOF
<table border=1>
<tr>
<th>name</th> <th>sei</th> <th>address</th>
</tr>
<tr>
<td>$n1</td> <td>$s1</td> <td>$k1</td>
</tr>
<tr>
<td>$n2</td> <td>$s2</td> <td>$k2</td>
</tr>
<tr>
<td>$n3</td> <td>$s3</td> <td>$k3</td>
</tr>

</table>
EOF;
?>

	</div>
</body>
</html>
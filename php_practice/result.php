<?php
$submit = $_POST['submit'];
$questions = $_POST['questions'];

if (isset($submit)) {
  $sum = count($questions);
}

if ($sum <= 1) {
  $result = ["ねこ", "いつもマイペース、ひとりで気ままに暮らすのが大好き", "brown"];
}elseif ($sum <= 2) {
  $result = ["キツネ","ひとりでふらふらしがち、時々さみしく感じることも", "yellow"];
}elseif ($sum <= 3) {
  $result = ["シャチ", "基本は単独行動が好き、でもいざというときはチームワークにも長けています", "blue"];
}elseif ($sum <= 4) {
  $result = ["犬", "周りの人と穏やかな関係を築けます、よく言われているように忠誠心もあります", "red"];
}elseif ($sum <= 5) {
  $result = ["ミーアキャット", "周りの人を大切にする性格です、洞察力もまあまあ鋭い", "orange"];
}else ($sum <= 6) {
  $result = ["ペンギン", "多くの人に囲まれていると安心、社会の動向をよくみきわめています", "grey"]
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <title>動物占い</title>
</head>
<body>
  <div class="container" style="margin-top: 20px">
    <div class="well">
      <h1>占い結果</h1>
      <?php echo "あなたを動物に例えると、<span style='color:$result[2]'>" . $result[0] . "</span>でしょう" . "<br>";
echo $result[1];
 ?>

    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

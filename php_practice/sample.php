<?php
session_start();
$userID = $_SESSION["userID"];
?>

<!DOCTYPE html>
<html>
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
      <h1>動物占い</h1>
      <form class="" action="questions_controller.php" method="post">
        <div class="row">
          <div class="form-group col-xs-6">
            <h4>当てはまる項目にチェックを入れてね</h4>

            <div>
              <?php
              $questions = array (
                "自分は愛嬌があるほうだ",
                "周りの人のためにすることが好き",
                "後輩より先輩と過ごす時間が長い",
                "みんなとわいわい楽しむタイプ",
                "長期的にこつこつ取り組むことが得意",
                "休日は外で過ごすことが多い"
              );
              foreach ( $questions as $value ) {
                echo '<input type="checkbox" name="questions[]" value="">' . $value . '<br>';

              }
              ?>
            </div>

            <br>
            <div>
              <button type="submit" name="submit" class="btn btn-primary btn-sm center-block">送信</button>
            </div>

          </div>
        </form>
      </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  </html>

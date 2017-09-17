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
  <link href="css/materialize.min.css" rel="stylesheet" media="screen"/>
  <link href="css/style.css" rel="stylesheet" media="screen"/>
  <link href="css/bootstrap.css" rel="stylesheet">

  <title>Wolrd Ceramic Studio</title>
</head>
<body>

  <div class="navbar-fixed">
    <nav class="teal darken-2">
      <div class="nav-wrapper">
        <a class="brand-logo center" href="works.php">Wolrd Ceramic Studio</a>
      </div>
    </nav>
  </div>

  <div class="row container">
    <h5><?php echo $userID;?>さんの作品を登録する</h5>

    <div class="container">
      <form action="new_works_post.php" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input name="title" type="text" class="validate">
            <label for="title">作品名</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s5">
            <input name="price" type="number" class="validate">
            <label for="price">値段</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="comment" class="materialize-textarea"></textarea>
            <label for="comment">作品の紹介</label>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>作品の画像(メイン)</span>
              <input type="file" name="image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>作品の画像(2枚目)</span>
              <input type="file" name="image2">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col s12 center">
            <input type="submit" value="作品を登録する" class="btn red lighten-2">
          </div>
        </div>
      </form>
    </div>
  </div>


  <footer class="page-footer grey lighten-4">
    <p class="center">
      Wolrd Ceramic Studio</p>
      <p class="center">
        世界で唯一の陶芸作品を手に入れる</p>
        <div class="footer-copyright center lighten-3">
          © 2016 Wolrd Ceramic Studio
        </div>
      </footer>



      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

      $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
      });
      </script>
    </body>
    </html>

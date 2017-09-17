<?php
session_start();
$userID = $_SESSION["userID"];

if (isset($_SESSION["userID"]) === false) {
  header("Location: new_entry.html");
  return;
}

$works = [];
$handle = fopen("works.csv", "r");
while ($line = fgets($handle)) {
  $works[] = explode(",", $line);
}
fclose($handle);

require("function.php");
$keyword = "";
if (isset($_GET["keyword"]) && $_GET["keyword"] !== "") {
  $keyword = $_GET["keyword"];
  $works = search($works, $keyword);
}
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
  <style media="screen">
  .icon-m {
    font-size: 40px;
  }
  </style>
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
    <?php
    include("works_search.php"); ?>
    <a href="new_works.php" class="btn red lighten-2 col s8 offset-s2">あなたの作品を登録する</a>
  </div>

  <div class="row container">
    <?php for ($i=0; $i < count($works); $i++) { ?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="images/<?php echo $works[$i][3]; ?>">
            <a href="#"><span class="card-title"><?php echo $works[$i][0]; ?></span></a>
          </div>
          <div class="card-content">
            <h5><?php echo $works[$i][1]; ?></h5>
            <p><?php echo $works[$i][2] . "(" . $works[$i][4] . ")"; ?></p>
            <br>
            <a href="itempage.php" class="btn grey lighten-1">詳細を見る</a>
          </div>
        </div>
      </div>
      <?php } ?>
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
          $('.carousel').carousel();
        });
        </script>
      </body>
      </html>

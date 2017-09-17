<?php
session_start();
$userID = $_SESSION["userID"];
$id = $_GET["id"];

$works = [];
$handle = fopen("works.csv", "r");
while ($line = fgets($handle)) {
  $works[] = explode(",", $line);
}
fclose($handle);

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

<br>

<div class="row container">
  <div class="slider">
      <ul class="slides">
        <li>
          <img src="images/<?php echo $works[$id][3]; ?>">
        </li>
        <li>
          <img src="images/<?php echo $works[$id][6]; ?>">
        </li>
      </ul>
    </div>
</div>

<div class="row container">
  <h5><?php echo $works[$id][1]; ?></h5>
  <h5>￥<?php echo $works[$id][5]; ?></h5>

  <div class="row">
             <div class="col s2">
               <img src="images/risa.jpg" alt="" class="circle responsive-img">
             </div>
             <div class="col s10">
               <span class="black-text">
                 <?php echo $works[$id][0]; ?>
               </span>
             </div>
           </div>

<hr>
  <h5>作品紹介</h5>
<p><?php echo $works[$id][2]; ?></p>

</div>

<div class="row container">
      <a href="#" class="btn red lighten-2 col s6 offset-s3">BUY NOW</a>
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
          $('.slider').slider();
        });
        </script>
      </body>
      </html>

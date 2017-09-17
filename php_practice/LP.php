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
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">WCSについて</a></li>
          <li><a href="#">会員登録</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#">WCSについて</a></li>
          <li><a href="#">会員登録</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="images/image23.jpg"></div>
    <div class="row container center title">
      <div class="col s12 m7 l6 hide-on-med-and-down">
        <h5 class="white-text text-darken-3 lighten-3">世界で唯一の陶芸作品を手に入れよう</h5>
        <h2 class="header grey-text text-lighten-3">Wolrd Ceramic Studio</h2>
      </div>
    </div>
  </div>

  <div class="section white">
    <div class="row container">
      <h4 class="header">Wolrd Ceramic Studio</h4>
      <p class="grey-text text-darken-3 lighten-3">WCSは世界中の陶芸職人と一点ものの陶芸作品を求めるユーザーをつなげるサービスです</p>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="images/image22.jpg"></div>
  </div>

  <div class="section white">
    <div class="row container">
      <h4 class="header">WCSでできること</h4>

      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <h5>特注による作品生産</h5>
            <p>
              作品の購入は全てユーザーからの特注によって行われます。ユーザーは職人に作品の完成イメージを伝えましょう。それを職人が形にすることで、世界中で自分だけの作品を手に入れることができます。
            </p>
          </div>
          <div class="col s12 m6">
            <img src="images/image25.jpg" class="responsive-img img-thumbnail">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col s12 m6 push-m6">
            <h5>職人とユーザーの直接やりとり</h5>
            <p>
              ユーザーは職人たちのポートフォリオ一覧を見て、気に入った職人を選べます。お気に入りの職人を見つけたら、メッセージページで連絡を取り合いましょう。直接メッセージ送れるため、スピーディーに、より正確に情報を伝えることができます。
            </p>
          </div>
          <div class="col s12 m6 pull-m6">
            <img src="images/image26.jpg" class="responsive-img img-thumbnail">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <h5>誰もが職人・ユーザーになれる</h5>
            <p>
              世界中の誰でも作品の購入が可能なことはもちろん、職人として作品を制作することができます。
            </p>
          </div>
          <div class="col s12 m6 l6">
            <img src="images/image20.jpg" class="responsive-img img-thumbnail">
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="images/image30.jpg"></div>
  </div>


  <div class="section white">
    <div class="row container">
      <h4 class="header">ログイン</h4>

      <div class="row">
        <form action="login_controller.php" method="get">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">account_circle</i>
            <input name="userID" type="text" class="validate">
            <label for="userID">userID</label>
          </div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">lock</i>
            <input name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <br>
          <div class="row">
            <div class="center col s12">
              <input type="submit" value="ログイン" class="btn teal darken-2 waves-effect waves-light">
            </div>
          </div>
          <div class="row">
            <div class="center col s12">
              <a href="new_entry.html">新規登録する</a>

            </div>


          </div>
        </form>
      </div>
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

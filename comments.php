<!DOCTYPE html>
<html>
  <head>
    <title>Wasabi Way</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="C:/Users/Ivan Boyko/Desktop/Диплом/wasabi_way/img/logo.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css"> 
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="tour_login.html">Wasabi Way</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="tour_login.html" class="nav-link">Обрати тур</a></li>
          <li class="nav-item"><a href="comments.php" class="nav-link">Коментарі</a></li>
          <li class="nav-item"><a href="document.html" class="nav-link">Документи</a></li>
          <li class="nav-item"><a href="touragent.php" class="nav-link">Наша команда</a></li>
          <li class="nav-item"><a href="index.html" class="nav-link"><span>Вихід</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('img/bg/comments.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="tour_login.html">Головна</a></span> <span>Коментарі</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">&nbsp;</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
  <?php
  $host = 'localhost';  
  $user = 'c12ivan';    
  $pass = 'Talan2020!@'; 
  $db_name = 'c12ivan';   
  $link = mysqli_connect($host, $user, $pass, $db_name); 

  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
  $sql = mysqli_query($link, 'SELECT `id`, `name`, `text` FROM `comments`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['name']} <br> {$result['text']}<br><br>";
  }
?> 
</div>
<div align="center">
  <?php
  if (isset($_POST['name']) && isset($_POST['text'])){

    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];
    
    // Параметры для подключения
    $db_table = "comments"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($host,$user,$pass,$db_name);

    // Если есть ошибка соединения, выводим её и убиваем подключение
  if ($mysqli->connect_error) {
      die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");   
}
  ?>
  <form method="POST" action="">
  <input name="name" type="text" placeholder="Ім'я"/>
  <input name="text" type="text" placeholder="Коментар"/>
  <input type="submit" value="Відправити"/>
 </form>
</div>        
</section>	              
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Wasabi Way</h2>
              <p>Туристичний оператор « Wasabi Way» — успішна провідна компанія на ринку України в галузі туризму.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                
                <li class="ftco-animate"><a href="https://www.facebook.com/ivan.wasabi"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/ivan_wasabi/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Є запитання?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">вул. Героїв Оборони, 16А, Київ, Україна</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+380936286454</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">iboyko1999@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/range.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
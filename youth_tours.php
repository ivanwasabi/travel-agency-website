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
      <a class="navbar-brand" href="index.html">Wasabi Way</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Головна</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Обрати тур</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link">Галерея</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Блог</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Зворотній зв'язок</a></li>
          <li class="nav-item"><a href="avt.php" class="nav-link"><span>Вхід</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('img/bg/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Головна</a></span> <span>Тур</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Молодіжні тури</h1>
          </div>
        </div>
      </div>
    </div>
<br>
<h2 align="center">Молодіжні тури:</h2>
<br>
    <?php
    include ("classes/Singleton_youth.php");
    include("classes/Proxy_youth.php");
    include("classes/SettlementInfo_youth.php");
    include ("classes/MyIterator_youth.php");

    $db = Singleton::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT * FROM youth_tours";
    $result = $mysqli->query($sql_query);

    while($row = mysqli_fetch_array($result)){

        $infObj = new SettlementInfo();
        $infObj->GetName($row['name']);
        $infObj->GetCountry($row['country']);
        $infObj->GetPrice($row['price']);
        $infObj->GetURL($row['url']);

        $obj1 = new SomeObject($infObj->SetURL());
        $proxy_obj = new Proxy($obj1);
        $checked = $proxy_obj->doSomething();

        echo " 
             <div align = 'center' style = 'width:350px; height:550px; display:inline-block; 
             border: 0px solid blue; margin-left:8%; font-family: \" AR JULIAN\"; font-size: 20px; margin-bottom: 20px;
             border-radius: 25px;' > <image src='$checked ' alt='Tours' width='300px' height='380px'><br>
             <span class='descript'>Назва: </span> ".$infObj->SetName()." <br/><span class='descript'>Країна:</span>  ".$infObj->SetCountry()." <br/>
             <span class='descript'>Ціна:</span> ".$infObj->SetPrice()." <br/>
             </div> ";

    }
    echo "<br/>";
    
    ?>
    <script>
    function show()
    {
      $.ajax({
        url: "youth_tours_login.php",
        cache: false,
        success: function(html){
          $("#content").html(html);
        }
      });
    }
  
    $(document).ready(function(){
      show();
    });
  </script>
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

  <script type="text/javascript" src="js/jquery.js"></script>
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
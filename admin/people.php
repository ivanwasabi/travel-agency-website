<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <style>
        @media only screen and (max-width: 1024px){
            #head-line-2{
                background:#000;
                font-size:20px;
                font-family: 'ROBOTO';
            }
        }
    </style>
</head>
<body  background="../img/bg/1.jpg"  style="background-size:100%;">
<header>
    <div id="head-line-2">
        Зареєстровані користувачі:
    </div>
</header>
<div align="center">
	<br>
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
  $sql = mysqli_query($link, 'SELECT `id`, `login`, `password` FROM `users`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['login']} | {$result['password']}<br>";
  }
?>  
</div>    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
echo "<div style='margin-left:41%; '><a href='third.php' style='text-decoration: none; '><span style='font-size:40px; color:#fff; 
font-family: \"ROBOTO\"; '>
Видалити тур</span></a> </div>";
?>
<?php
echo "<div style='margin-left:42%; '><a href='second_page.php' style='text-decoration: none; '><span style='font-size:40px; color:#fff; 
font-family: \"ROBOTO\"; '>
Додати тур</span></a> </div>";
?>
<?php
echo "<div style='margin-left:46%; '><a href='verification/viiti.php' style='text-decoration: none; '><span style='font-size:40px; color:#fff; 
font-family: \"ROBOTO\"; '>
Вихід</span></a> </div>";
?>

</body>
</html>
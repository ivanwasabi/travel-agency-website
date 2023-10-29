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
        З нами втратиш цноту до подорожей!
    </div>
</header>
<div style="position:relative; left:10px; top:0px; height:200px; width:800px;" align="center">

    <?php
    if ($_POST) //Условие будет выполнено, если произведен POST-запрос к скрипту.
    {
        $name = trim($_POST['rname']);
        
       $error = false;//Создаем переменную, контролирующую ошибки регистрации.
        
        if (empty($name))
        {
            $error = true;
            $errortext.="<script>alert('Поля порожні!')</script>";
        } else {
            if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$name))
            {
                $error = true;
                $errortext.="<script>alert('Make sure that the NAME contains from 2 to 30 characters and does not contain numbers!')</script>";
            }
        } 

        $errortext .= "</ul></b>";
        if ($error)
        {
            echo($errortext);//Выводим текст ошибок.
        } else {
            //Подключаемся к базе данных.
            $dbcon = mysqli_connect("localhost", "c12ivan", "Talan2020!@");
            mysqli_select_db($dbcon, "c12ivan");
            if (!$dbcon)
            {
                echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
            } else {
                if (!mysqli_select_db($dbcon, "c12ivan"))
                {
                    echo("<p>Выбранной базы данных не существует!</p>");
                }
            }
            //Выполняем SQL-запрос записывающий данные пользователя в таблицу.
            $sql = mysqli_query($dbcon, "DELETE FROM tours WHERE name ='$name';");
            #if (!$sql) {echo "Запрос не прошел. Попробуйте еще раз.";}
            if (!$sql) {echo "<script> alert('Such a login exists. Change your login.'); </script>";}
            if ($sql)
            {
                //Выводим сообщение об успешной регистрации.
                exit ('<div style = " position:relative; top:250px; left:40%; background:black; color:white; font-family:ROBOTO; height: 50px; width: 700px;
border-radius: 50%;"><h3>
        Ви успішно видалили тур!<br/> <a href="../admin/third.php" style = "text-decoration:none;"><font color="blue">Видалити ще!</font></a> !</h3></div>
  ');
            }
            mysqli_close($dbcon);//Закрываем соединение MySQL.
        }
    }
    if (($_POST && $error) || !$_POST)
    {
    }
    ?>
    
</div>
<!--Начало формы регистрации-->
<form id="register_form" name="register_form" method="post" action="">
    <table width="250" height="200" border="3" align="center" cellpadding="0" cellspacing="0" bgcolor="#000" style="color:#fff;">
        <tr>
            <td align="center">
                <span style = "font-size:25px;"><b>Назва туру:</b></span> <input style = "background:#DCDCDC" type="text" name="rname" id="rname" />
            </td>
        </tr> 
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="reg_button" id="reg_button" style="font-size:25px;font-family:'ALGERIAN'; color:black; background-color:#C0C0C0; border: 3px solid black;border-radius:5px;" value="Видалити" />
            </td>
        </tr> 
            </table>
</form>
<br><br><br><br><br><br><br>

<?php
echo "<div style='margin-left:33%; '><a href='people.php' style='text-decoration: none; '><span style='font-size:40px; color:#fff; 
font-family: \"ROBOTO\"; '>
Зареєстровані користувачі</span></a> </div>";
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
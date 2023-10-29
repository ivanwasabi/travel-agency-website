<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<html>
    <head>
    <title>Авторизація</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    </head>
    <body>    

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
    <form class="login100-form validate-form" action="testreg.php" method="post">
    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
    <span class="login100-form-title p-b-70">
    Спробуйте всі можливості з Wasabi Way
    </span>
    
<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
    <input class="input100" type="text" name="login">
        <span class="focus-input100" data-placeholder="Логін"></span>
</div>

<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
    <input class="input100" type="password" name="password">
        <span class="focus-input100" data-placeholder="Пароль"></span>
</div>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>

    <div class="container-login100-form-btn" name="submit">
        <button class="login100-form-btn" name="submit">Вхід</button>
    </div>  
    
    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<li>
<span class="txt1">Немає аккаунту?</span>
<a href="reg.php" class="txt2">Зареєструватися</a>
</li>
</p></form>
</div></div></div>
<br>

</body>
</html>
<html>
    <head>
    <title>Реєстрація</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    </head>
    <body>
    <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
    <form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
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
        <button class="login100-form-btn" name="submit">Створити аккаунт</button>
    </div> 
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
</div></div></div>
</body>
</html>
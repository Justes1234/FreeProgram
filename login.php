<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    #block1{
        background: white;
        height: 360px;
        width: 440px;
        border-style: inset;
        border-color: #0bd2f5;
        border-radius: 5px;
    }
    #block2{
        position: absolute;
        top: 280px;
        left: 549px;
    }
    #text1{
        text-shadow: black 0 0 1px;
    }
    #text2{
        text-align: center;
        color: #0bd2f5;
        text-shadow: black 0 0 1px;
    }
</style>
<body background="images/0.jpeg">

    <!-- Форма авторизації -->
<div id="block1">
    <h1 id="text2">Авторизація</h1>
    <form id="block2">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit" class="login-btn">Увійти</button>
        <p>
            <label>У вас немає облікового запису? - </label><label id="text1"><a href="/register.php">Зареєструйтесь!</a></label>
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</div>
</body>
</html>
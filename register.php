<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    #block1{
        background: white;
        height: 670px;
        width: 440px;
        border-style: inset;
        border-color: #0bd2f5;
        border-radius: 5px;
        position: absolute;
        top: 50px;
    }
    #block2{
        position: absolute;
        top: 60px;
        left: 20px;
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

    <!-- Форма реєстрації -->
    <div id="block1">
        <h1 id="text2">Реєстрація</h1>
    <form id="block2">
        <label>ПIБ</label>
        <input type="text" name="full_name" placeholder="Введіть своє повне ім'я">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пошта</label>
        <input type="email" name="email" placeholder="Введіть адресу своєї пошти">
        <label>Зображення профілю</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердження пароля">
        <button type="submit" class="register-btn">Зареєструватись</button>
        <p>
            <label>Ви вже маєте обліковий запис? - </label><label id="text1"><a href="login.php">Авторизуйтесь!</a></label>
        </p>
        <p class="msg none">Lorem ipsum.</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    </div>
</body>
</html>
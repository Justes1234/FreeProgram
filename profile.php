<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація та реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    body {
        background-image: url(/images/0.jpeg);
        background-attachment: fixed;
    }
    #block1{
        background: white;
        height: 330px;
        width: 400px;
        text-align: center;
        border-style: inset;
        border-color: #0bd2f5;
        border-radius: 5px;
        position: absolute;
        top: 180px;
        }
</style>
<body>

    <!-- Профіль -->

    <form id="block1">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="400" alt="avatar">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Вихід</a>
        <a href="indexLogin1.php" class="logout">Головна</a>
    </form>

</body>
</html>
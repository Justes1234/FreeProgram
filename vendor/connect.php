<?php

    $connect = mysqli_connect('localhost', 'root', '', 'test');

    if (!$connect) {
        die('Помилка підключення до бази даних');
    }
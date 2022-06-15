<?php

$connection = mysqli_connect("localhost", "root", "", "test");

if ($connection == false) {
    echo "Error!";
    echo mysqli_connect_error();
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Programs</title>

</head>

<style>
    body {
        background-image: url(/images/0.jpeg);
        background-attachment: fixed;
    }

    .transfer1 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 5px;
        left: 10px;
        width: 50px;
    }

    .transfer2 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 30px;
        width: 50px;
    }

    .transfer4 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 1300px;
        width: 50px;
    }

    .transfer5 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 1170px;
        width: 50px;
    }

    .transfer6 {
        position: absolute;
        top: 35px;
        left: 1062px;
        width: 50px;
        color: white;
    }

    .transfer7 {
        position: absolute;
        top: 1000px;
        left: 645px;
        width: 50px;
        color: white;
    }

    .transfer8 {
        position: absolute;
        top: 1000px;
        left: 745px;
        width: 50px;
        color: white;
    }

    .transfer9 {
        position: absolute;
        top: 1002px;
        left: 831px;
        width: 50px;
        color: white;
    }

    .transfer10 {
        position: absolute;
        top: 1002px;
        left: 912px;
        width: 50px;
        color: white;
    }

    .transfer11 {
        position: absolute;
        top: 1000px;
        left: 992px;
        width: 50px;
        color: white;
    }

    .transfer12 {
        position: absolute;
        top: 1000px;
        left: 1078px;
        width: 50px;
        color: white;
    }

    .transfer13 {
        position: absolute;
        top: 258px;
        left: 624px;
    }

    .transfer14 {
        position: absolute;
        top: 258px;
        left: 624px;
    }

    .transfer15 {
        position: absolute;
        top: 258px;
        left: 624px;
    }

    .Category {
        width: 300px;
        height: 400px;
        position: absolute;
        top: -647px;
        left: -350px;
        background: #161616;
        border: 3px solid #494949;
        opacity: 75%;
    }

    .Category2 {
        width: 300px;
        height: 400px;
        position: absolute;
        top: -647px;
        left: -348px;
    }

    .hat {
        width: 100%;
        height: 100px;
        position: absolute;
        top: -1px;
        left: -3px;
        background: #ff0000;
        border: 3px solid #494949;
    }

    #banner {
        width: 100%;
        height: 100px;
        position: absolute;
        left: -3px;
        top: -5px;
        background: #161616;
        border: 3px solid #494949;
        clip-path: polygon(0 0%, 100% 0, 100% 100%, 0 30%);
    }

    a.button8 {
        display: inline-block;
        color: white;
        font-weight: 700;
        text-decoration: none;
        user-select: none;
        padding: .5em 2em;
        outline: none;
        border: 2px solid;
        border-radius: 1px;
        transition: 0.2s;
    }

    a.button8:hover {
        background: rgba(255, 255, 255, .2);
    }

    a.button8:active {
        background: white;
    }

    a.button81 {
        width: 224.6px;
        display: inline-block;
        color: white;
        font-weight: 700;
        text-decoration: none;
        user-select: none;
        padding: .5em 2em;
        outline: none;
        border: 2px solid;
        border-radius: 1px;
        transition: 0.2s;
    }

    a.button81:hover {
        background: rgba(255, 255, 255, .2);
    }

    a.button81:active {
        background: white;
    }


    #centerblock {
        width: 1100px;
        height: 1082px;
        position: absolute;
        top: 110px;
        left: 24.5%;
        background: #161616;
        border: 3px solid #494949;
        opacity: 75%;
    }

    #block {
        width: 300px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: 5px;
        left: 0.5%;
    }

    #blocks {
        width: 782.5px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: -3px;
        left: 102%;
    }

    #block2 {
        width: 300px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: 315px;
        left: -1%;
    }

    #blocks2 {
        width: 782.5px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: -3px;
        left: 102%;
    }

    #block3 {
        width: 300px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: 315px;
        left: -1%;
    }

    #blocks3 {
        width: 782.5px;
        height: 300px;
        background: #161616;
        border: 3px solid #494949;
        position: absolute;
        top: -2.9px;
        left: 102%;
    }

    #zatemnenie {
        width: 400px;
        height: 400px;
        position: absolute;
        left: 500px;
        top: 320px;
        display: none;
    }

    #okno {
        width: 900px;
        height: 600px;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
        position: absolute;
        top: -95%;
        left: -55%;
        background: #fff;
    }

    #zatemnenie:target {
        display: block;
    }

    .close {
        display: inline-block;
        border: 1px solid #0000cc;
        color: #0000cc;
        padding: 0 10px;
        margin: 10px;
        text-decoration: none;
        background: #f2f2f2;
        font-size: 14pt;
        cursor: pointer;
        position: absolute;
        top: 91%;
        left: 2.5%;
    }

    .close:hover {
        background: #e6e6ff;
    }


</style>

<body>
<div class="hat">
    <h1 class="transfer1" style="color: white;">Free </h1>
    <h1 class="transfer2" style="color: white;">Program</h1>
    <div id="banner">
    </div>
    <div class="transfer4">
        <a href="register.php" class="button8">Реєстрація</a>
    </div>
    <div class="transfer5">
        <a href="login.php" class="button8">Увійти</a>
    </div>
    <div class="transfer6">
        <a href="#zatemnenie" class="button8">Опис</a>
    </div>
</div>
<div id="centerblock">

    <div id="block">
        <img src="images/01.jpeg" width="300" height="300" alt="">
        <div id="blocks" style="text-align: center;">
            <h1 style="color:white">
                <?php

                $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='1'");

                while ($article = mysqli_fetch_assoc($query)) {

                    echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                    echo $article ['depiction'] . '<br></h3>';
                }
                ?>


                <div class="transfer13"><a href="/pages/adobePhotoshop.html" class="button8">Детальніше</a></div>
        </div>

        <div id="block2">
            <img src="images/02.jpeg" width="300" height="300" alt="">
            <div id="blocks2" style="text-align: center;">
                <h1 style="color:white">
                    <?php

                    $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='2'");

                    while ($article = mysqli_fetch_assoc($query)) {

                        echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                        echo $article ['depiction'] . '<br></h3>';
                    }
                    ?>

                    <div class="transfer14"><a href="/pages/adobePremierePro.html" class="button8">Детальніше</a></div>
            </div>

            <div id="block3">
                <img src="images/03.jpeg" width="300" height="300" alt="">
                <div id="blocks3" style="text-align: center;">
                    <h1 style="color:white">
                        <?php

                        $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='3'");

                        while ($article = mysqli_fetch_assoc($query)) {

                            echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                            echo $article ['depiction'] . '<br></h3>';
                        }
                        ?>

                        <div class="transfer15"><a href="/pages/Adobe Audition.html" class="button8">Детальніше</a>
                        </div>
                </div>

                <div class="Category">
                </div>
                <div class="Category2">
                    <div style="color:white;">
                        <h2>
                            <div style="text-align: center;">Категорії</div>
                        </h2>
                    </div>

                    <h3>
                        <a href="VideoEditing.php" class="button81">◈ Монтаж відео.</a>
                    </h3>

                    <h3>
                        <a href="PhotoEditing.php" class="button81">◈ Редагування фото.</a>
                    </h3>

                    <h3>
                        <a href="SoundEditing.php" class="button81">◈ Редагування звуку.</a>
                    </h3>

                    <h3>
                        <a href="VideoRecording.php" class="button81">◈ Запис відео.</a>
                    </h3>

                    <div id="zatemnenie">
                        <div id="okno">
                            <h1>Доброго дня!</h1>
                            <h2 style="text-indent: 1.5em; text-align: justify;">
                                Якщо ви відкрили це вікно, то вам, мабуть, цікаво дізнатися про наш сайт. Якщо ви
                                зробили це випадково, то можете закрити цю сторінку 😝 Цей сайт був створений, щоб
                                ділитися безкоштовно цікавими програмами з інтернет-користувачами.
                            </h2>
                            <a href="#" class="close">X</a>
                        </div>
                    </div>
                    <div class="transfer7">
                        <a href="/" class="button8">⮘⮘</a>
                    </div>
                    <div class="transfer8">
                        <a href="/" class="button8">⮘</a>
                    </div>
                    <div class="transfer9">
                        <a href="/" class="button8">1</a>
                    </div>
                    <div class="transfer10">
                        <a href="index2.php" class="button8">2</a>
                    </div>
                    <div class="transfer11">
                        <a href="index2.php" class="button8">⮚</a>
                    </div>
                    <div class="transfer12">
                        <a href="index2.php" class="button8">⮚⮚</a>
                    </div>
                </div>

            </div>
</body>
</html>
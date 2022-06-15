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
    <title>Video Editing</title>

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

    .transfer3 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 1300px;
        width: 50px;
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
        position: absolute;
        left: -15px;
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
        height: 950px;
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

</style>

<body>
<div class="hat">
    <h1 class="transfer1" style="color: white;">Free </h1>
    <h1 class="transfer2" style="color: white;">Program</h1>
    <div id="banner">
    </div>
    <div class="transfer3">
        <a class="button8" onclick="javascript:history.back(); return false;">Повернутись</a>
    </div>
</div>
<div id="centerblock">

    <div id="block">
        <img src="images/04.jpeg" width="300" height="300" alt="">
        <div id="blocks" style="text-align: center;">
            <h1 style="color:white">
                <?php

                $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='4'");

                while ($article = mysqli_fetch_assoc($query)) {

                    echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                    echo $article ['depiction'] . '<br></h3>';
                }
                ?>


                <div class="transfer13"><a href="/pages/adobeAfterEffects.html" class="button8">Детальніше</a></div>
        </div>

        <div id="block2">
            <img src="images/05.jpeg" width="300" height="300" alt="">
            <div id="blocks2" style="text-align: center;">
                <h1 style="color:white">
                    <?php

                    $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='5'");

                    while ($article = mysqli_fetch_assoc($query)) {

                        echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                        echo $article ['depiction'] . '<br></h3>';
                    }
                    ?>

                    <div class="transfer14"><a href="/pages/sonyVegasPro.html" class="button8">Детальніше</a></div>
            </div>

            <div id="block3">
                <img src="images/02.jpeg" width="300" height="300" alt="">
                <div id="blocks3" style="text-align: center;">
                    <h1 style="color:white">
                        <?php

                        $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='2'");

                        while ($article = mysqli_fetch_assoc($query)) {

                            echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                            echo $article ['depiction'] . '<br></h3>';
                        }
                        ?>

                        <div class="transfer15"><a href="/pages/adobePremierePro.html" class="button8">Детальніше</a></div>
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

                </div>

            </div>
</body>
</html>
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

    .transfer4 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 1120px;
        width: 50px;
    }

    .transfer5 {
        font-family: Verdana, Helvetica, Arial, sans-serif;
        position: absolute;
        top: 35px;
        left: 980px;
        width: 50px;
    }

    .transfer6 {
        position: absolute;
        top: 35px;
        left: 863px;
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
        top: -10px;
        left: -350px;
        background: #161616;
        border: 3px solid #494949;
        opacity: 75%;
    }

    .Category2 {
        width: 300px;
        height: 400px;
        position: absolute;
        top: -10px;
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
        height: 680px;
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

</style>

<body>
<div class="hat">
    <h1 class="transfer1" style="color: white;">Free </h1>
    <h1 class="transfer2" style="color: white;">Program</h1>
    <div id="banner">
    </div>
    <div class="transfer3">
        <a class="button8" onclick="javascript:history.back(); return false;">??????????????????????</a>
    </div>
</div>
<div id="centerblock">

    <div id="block">
        <img src="images/03.jpeg" width="300" height="300" alt="">
        <div id="blocks" style="text-align: center;">
            <h1 style="color:white">
                <?php

                $query = mysqli_query($connection, "SELECT * FROM programs WHERE id='3'");

                while ($article = mysqli_fetch_assoc($query)) {

                    echo $article ['Program_Name'] . '<br> </center> </h1><h3 style="color:white; text-indent: 1.5em; text-align: justify;">';

                    echo $article ['depiction'] . '<br></h3>';
                }
                ?>


                <div class="transfer13"><a href="/pages/Adobe Audition.html" class="button8">????????????????????</a></div>
        </div>

                <div class="Category">
                </div>
                <div class="Category2">
                    <div style="color:white;">
                        <h2>
                            <div style="text-align: center;">??????????????????</div>
                        </h2>
                    </div>

                    <h3>
                        <a href="VideoEditing.php" class="button81">??? ???????????? ??????????.</a>
                    </h3>

                    <h3>
                        <a href="PhotoEditing.php" class="button81">??? ?????????????????????? ????????.</a>
                    </h3>

                    <h3>
                        <a href="SoundEditing.php" class="button81">??? ?????????????????????? ??????????.</a>
                    </h3>

                    <h3>
                        <a href="VideoRecording.php" class="button81">??? ?????????? ??????????.</a>
                    </h3>

                </div>

            </div>
</body>
</html>
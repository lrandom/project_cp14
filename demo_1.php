<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*setcookie('class', 'cp14', time() + 60 * 60 * 24 * 30 * 12);


    if (isset($_COOKIE['class'])) {
        echo $_COOKIE['class'];
        setcookie('class', 'cp14', time() - 60 * 60 * 24 * 30 * 12);
        unset($_COOKIE['class']);
    }*/
    /* $_SESSION['class'] = 'CP14';
    if (isset($_SESSION['class'])) {
        echo $_SESSION['class'];
        unset($_SESSION['class']);
        session_unset();
        session_destroy();
    }*/
    ?>

    <p id="wrapper" class="wrapper">
        ABCD
    </p>

    <style>
    p#wrapper {
        background: red;
    }

    p.wrapper {
        background: yellow;
        margin-top: 10px;
        margin-right: 10px;
        margin-bottom: 10px;
        margin-left: 10px;
        position: relative;
        top: 10;
        left: 10px;
        right: 10px;
        bottom: 10px;

    }
    </style>
</body>

</html>
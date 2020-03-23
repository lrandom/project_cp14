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
    $_SESSION['class'] = 'CP14';
    if (isset($_SESSION['class'])) {
        echo $_SESSION['class'];
        unset($_SESSION['class']);
        session_unset();
        session_destroy();
    }
    ?>
</body>

</html>
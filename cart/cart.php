<?php session_start();
if (isset($_GET['delete'])) {
    //xoa sp
    $id = $_GET['id'];
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['id'] == $id) {
                array_splice($cart, $i);
                break;
            }
        }
        $_SESSION['cart'] = $cart;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        foreach ($cart as $r) {
    ?>
    <div>
        <span><?php echo $r['name']; ?></span>
        <span><?php echo $r['price'] ?></span>
        <span><?php echo $r['quantity'] ?></span>
        <span><a href="?delete&id=<?php echo $r['id']; ?>">Xoa</a></span>
    </div>
    <?php
        }
    } ?>
</body>

</html>
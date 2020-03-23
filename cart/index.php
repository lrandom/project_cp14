<?php
session_start();
//unset($_SESSION['cart']);
$products = array(
    array('id' => 1, 'name' => 'Iphone 1', 'price' => 100000),
    array('id' => 2, 'name' => 'Iphone 2', 'price' => 200000),
    array('id' => 3, 'name' => 'Iphone 3', 'price' => 3000000)
);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        //select * from products where id = $id;
        foreach ($products as $r) {
            if ($r['id'] == $id) {
                //tim thay
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    $flag = -1;
                    for ($i = 0; $i < count($cart); $i++) {
                        if ($cart[$i]['id'] == $id) {
                            //tim thay 
                            $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
                            $flag = $i;
                            break;
                        }
                    }
                    //khong tim thay
                    if ($flag == -1) {
                        $product = array(
                            'id' => $r['id'],
                            'name' => $r['name'],
                            'price' => $r['price'],
                            'quantity' => 1
                        );
                        array_push($cart, $product);
                    }

                    $_SESSION['cart'] = $cart;
                } else {
                    $cart = array();
                    $product = array(
                        'id' => $r['id'],
                        'name' => $r['name'],
                        'price' => $r['price'],
                        'quantity' => 1
                    );
                    array_push($cart, $product);
                    $_SESSION['cart'] = $cart;
                }
                break;
            }
        };
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
    <?php
    foreach ($products as $r) {
    ?>
    <div>
        <h5>
            <?php echo $r['name']; ?>
        </h5>

        <div>Giá: <?php echo $r['price'] ?></div>
        <a href="?id=<?php echo $r['id'];  ?>">Thêm vào giỏ hàng</a>
        <div>

            <?php
        }
            ?>
            <a href="cart.php">Đến giỏ hàng</a>
</body>

</html>
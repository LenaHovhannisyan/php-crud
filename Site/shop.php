<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="shop.css">
    <title>Shop</title>
</head>
<body>
<div id="content">
    
    <a href="">
        <img src="images/logo.png" id="logo">
    </a>

    <?php
    $db = mysqli_connect("localhost", "root", "usbw", "shop");
    $sql = "SELECT * FROM `products`";
    $result = mysqli_query($db, $sql);

    while ($r = mysqli_fetch_assoc($result)) {
        ?>

        <div class="product">
            <a href="product.php?id=<?php echo $r["id"]; ?>" class="product_link">
                <?php echo $r["name"]; ?>
            </a>
            <img class="product_img" src="<?php echo $r["img_src"]; ?>" title="<?php echo $r["name"]; ?>">
            <p>
                <?php echo $r["price"] . " $"; ?>
            </p>
        </div>

    <?php } ?>

</div>
</body>
</html>
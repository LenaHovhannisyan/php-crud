<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="shop.css">
    <title>
        <?php
        $id = $_GET["id"];
        $db = mysqli_connect("localhost", "root", "usbw", "shop");
        $sql = "SELECT * FROM `products` WHERE ID = $id";
        $result = mysqli_query($db, $sql);

        while ($r = mysqli_fetch_assoc($result)) {
            echo $r["name"];
        }
        ?>
    </title>
</head>
<body>
<div id="content">

    <?php
    $id = $_GET["id"];
    $db = mysqli_connect("localhost", "root", "usbw", "shop");
    $sql = "SELECT * FROM `products` WHERE ID = $id";
    $result = mysqli_query($db, $sql);

    while ($r = mysqli_fetch_assoc($result)) {
        ?>

        <div class="left_box">
            <h1>
                <?php echo $r["name"]; ?>
            </h1>
            <img class="product_img" src="<?php echo $r["img_src"]; ?>"
                 title="<?php echo $r["name"]; ?>">
            <p>
                <?php echo $r["price"] . " $"; ?>
            </p>
        </div>

        <div class="right_box">
            <h2> Description of <?php echo $r["name"]; ?></h2>
            <p><?php echo $r["description"]; ?></p>
        </div>

    <?php } ?>

    <div class="more_box">
        <h2 class="more">More options</h2>
        <?php
        $db = mysqli_connect("localhost", "root", "usbw", "shop");
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($db, $sql);
        $n = 0;
        while ($n < 4) {
            $r = mysqli_fetch_assoc($result)
            ?>

            <div class="product">
                <a href="product.php?id=<?php echo $r["id"]; ?>" class="product_link">
                    <?php echo $r["name"]; ?>
                </a>
                <img class="product_img" src="<?php echo $r["img_src"]; ?>"
                     title="<?php echo $r["name"]; ?>">
                <p>
                    <?php echo $r["price"] . " $"; ?>
                </p>
            </div>

            <?php
            $n++;
        } ?>

    </div>


</div>
</body>
</html>
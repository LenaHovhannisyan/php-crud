<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
    <div class="header">
        <h1>Update</h1>
    </div>
    <div class="container">
        <?php
        $db = mysqli_connect("localhost", "root", "usbw", "shop");
        if (isset($_GET["up"])) {
            $sql = "update `products`set `name` = '" . $_GET["name"] . "',`description` = '" . $_GET["description"] . "',`price` = " . $_GET["price"] . ",
				`img_src` = '" . $_GET["img_src"] . "'
			where `id` = " . $_GET["id"] . ";";
            $result = mysqli_query($db, $sql);
            if ($result) {
                echo "Updated";
            } else {
                echo "db error";
            }
        } else {
            $sql = "select * from `products` where `id` = " . $_GET['id'];
            $result = mysqli_query($db, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>
            <form action="update.php" method="get">
                <input style="display: none;" type="text" name="up">
                <input style="display: none;" type="text" name="id" value="<?php echo $r["id"] ?>">

                <label for="name">Name</label><br>
                <input type="text" name="name" value="<?php echo $r["name"] ?>"><br><br>

                <label for="description">Description</label><br>
                <textarea name="description" id="description" rows="6" cols="46">
                    <?php echo $r["description"] ?>
                </textarea><br><br>

                <label for="price">Image</label><br>
                <input type="text" name="img_src" value="<?php echo $r["img_src"] ?>"><br><br>

                <label for="price">Price</label><br>
                <input type="text" name="price" value="<?php echo $r["price"] ?>"><br><br>
                <input type="submit">
            </form>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
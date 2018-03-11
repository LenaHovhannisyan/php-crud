<?php
if (isset($_POST["add"])) {

    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $img_src = "";

    if (isset($_FILES["image"])) {

        $img_folder = "images/";
        $image_name = $_FILES["image"]["name"];
        $img_src = $img_folder . $image_name;
        $file_path = "../" . $img_src;

        move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);

    }

    $db = mysqli_connect("localhost", "root", "usbw", "shop");
    $sql = "INSERT INTO `products`(`name`, `description`, `img_src`, `price`)
			VALUES('$name', '$description', '$img_src', '$price')";
    $r = mysqli_query($db, $sql);

    if ($r) {
        echo "Inserted";
    } else {
        echo "db error";
    }
} else {

    $id = $_GET["id"];
    $db = mysqli_connect("localhost", "root", "usbw", "shop");
    $sql = "DELETE FROM `products`  WHERE ID = '$id'";
    $r = mysqli_query($db, $sql);
    if ($r) {
        echo "Deleted";
    } else {
        echo "db error";
    }
}

?>

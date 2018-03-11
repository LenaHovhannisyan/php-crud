<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
    <div class="header">
        <h1>ADMINISTRATION</h1>
    </div>
    <div class="container">
        <div class="left_box">
            <form action="action.php" method="post" enctype="multipart/form-data">

                <label for="name">Name</label><br>
                <input type="text" name="name" id="name"> <br><br>

                <label for="description">Description</label><br>
                <textarea name="description" id="description" rows="6" cols="46"></textarea><br><br>

                <label for="price">Price</label><br>
                <input type="number" name="price" id="price"> <br><br>

                <input type="file" name="image"><br><br>

                <input type="submit" name="add">
            </form>
        </div>

        <div class="right_box">
            <table border="1" width="250">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                $db = mysqli_connect("localhost", "root", "usbw", "shop");
                $sql = "SELECT * FROM `products`";
                $result = mysqli_query($db, $sql);

                while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $r["id"]; ?>
                        </td>
                        <td>
                            <?php echo $r["name"]; ?>
                        </td>
                        <td>
                            <a href="action.php?id=<?php echo $r["id"]; ?>"> Delete </a>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $r["id"]; ?>"> Update </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
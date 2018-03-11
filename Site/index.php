<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
<div id="main">

    <?php
    include("menu.php");
    include("slider.php");
    ?>

    <div id="content">
        <div class="box" id="demo1" onmouseover="text1(this)" onmouseout="normalText(this)">
            <h2> HTML </h2>

        </div>
        <div class="box" id="demo2" onmouseover="text2(this)" onmouseout="normalText(this)">
            <h2> CSS </h2>

        </div>
        <div class="box" id="demo3" onmouseover="text3(this)" onmouseout="normalText(this)">
            <h2> JS</h2>
        </div>
    </div>
    <script>
        function text1(x) {
            document.getElementById("demo1").innerHTML = "<a href='#' style='display: inline-block; color: black'><h2>HTML</h2> <p>HyperText Markup Language</p></a> "
        }
        function text2(x) {
            document.getElementById("demo2").innerHTML = "<a href='#' style='display: inline-block; color: black'><h2>CSS</h2>  <p>Cascading Style Sheets</p></a> "
        }
        function text3(x) {
            document.getElementById("demo3").innerHTML = "<a href='#' style='display: inline-block; color: black'><h2>JS</h2>  <p>Java Script</p></a> "
        }
        function normalText(x) {
            document.getElementById("demo1").innerHTML = "<h2> HTML </h2> "
            document.getElementById("demo2").innerHTML = "<h2> CSS </h2> "
            document.getElementById("demo3").innerHTML = "<h2> JS </h2> "
        }
    </script>

    <?php include("footer.php"); ?>
</div>
</body>
</html>
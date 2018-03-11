<section>
    <img class="mySlides" src="images/apple_macbook_airbook_computer_mouse_106498_1920x1080.jpg" style="width:100%;">
    <img class="mySlides" src="images/macbook_apple_laptop_camera_cup_99153_1920x1080.jpg" style="width:100%">
    <img class="mySlides" src="images/macbook_pro_apple_laptop_headphones_table_98893_1920x1080.jpg"
         style="width:100%">
    <img class="mySlides" src="images/parallax_pic1.jpg" style="width:100%;">
    <img class="mySlides" src="images/sony_apple_laptop_camera_109512_1920x1080.jpg" style="width:100%">
</section>

<script>

    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }
</script>
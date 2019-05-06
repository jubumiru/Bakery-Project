<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Mrs. Taew Bakery</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Itim", sans-serif
        }

        body {
            font-size: 16px;
        }
    </style>
</head>


<body>
    <!-- Navbar  -->
    <?php
        include('selectnav.php');
    ?>

    <!-- Slide -->
    <div class="w3-content w3-display-container" style="margin-top:30px;">
        <div class="w3-display-container mySlides">
            <img src="img/cake1.JPG" style="display:block;width:100%;height:600px;" class="img-resize">
        </div>

        <div class="w3-display-container mySlides">
            <img src="img/cake2.JPG" style="display:block;width:100%;height:600px;" class="img-resize">
        </div>

        <div class="w3-display-container mySlides">
            <img src="img/brownie.jpg" style="display:block;width:100%;height:600px;" class="img-resize">
        </div>

        <button class="w3-button w3-display-left  w3-theme-l3" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right  w3-theme-l3" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <hr>
    <div class="footer">
        <p></p>
    </div>


<!-- Slide show script -->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>

</body>

</html>
<?php 

session_start();

	include("config.php");
    include("nav-bar.php");
    

?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>PaperTown</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>

    <div class="slideshow-container">


            <div class="mySlides fade">
                <img src="img/download (1).jpeg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/download.jpeg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/PaperTown.png" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>
        <script src="slide.js"></script>
    </body>
    </html>
    <?php
    include("footer12.php");
    ?>
<?php 

session_start();

	include("config.php");
    // include("nav-bar.php");
    

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>

    <!--nav bar dupa login-->
    <div id="header-wrap">
	
	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="right-element">
						<span>Welcome!</span></a>
                        <!--trebuie adaugat fisierul de cart-->
						<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0 $)</span></a>

                        <header id="header">
		<div class="container">
			<div class="row">

				<div class="col-md-2">
					<div class="main-logo">
						<a href="index.html"><img src="img/PaperTown.png" alt="logo" width="70px" height="70 px"></a>
					</div>

				</div>

				<div class="col-md-10">
					
					<nav id="navbar">
						<div class="main-menu stellarnav">
							<ul class="menu-list">
								<li class="menu-item active"><a href="index.php" data-effect="Home">Home</a></li>
								<li class="menu-item"><a href="about.php" class="nav-link" data-effect="About">About</a></li>
                                <li class="menu-item"><a href="books.php" class="nav-link" >Books</a></li>
                                <li class="menu-item"><a href="movies.php" class="nav-link" >Movies</a></li>
                                <li class="menu-item"><a href="albums.php" class="nav-link" >Albums</a></li>
								<li class="menu-item"><a href="contact.php" class="nav-link" data-effect="Contact">Contact</a></li>
							</ul>
						</div>
					</nav>

				</div>

			</div>
		</div>
	</header>
		
</div>


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
    include("footer1.php");
    ?>
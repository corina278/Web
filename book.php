<?php 

session_start();

	include("config.php");
    include("nav-bar.php");
    include("functions.php");

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
    <div class="main-wrapper">
        <div class="book-container">
            <?php   
    $index = 1;
            while ($index <= $count) {
                ?>
            <?php
            if (!isset($_SESSION['user_id'])) {

                ?>

            <!-- cand user nu e logat -->
            <div class="books">
                <div class="img-carte">
                    <img src=<?php echo get_img($conn, $index); ?>>
                </div>
                <div class="about">
                    <h1 class="title"><?php echo get_title($conn, $index); ?></h1>
                    <h1 class="subtitle">Autor : <?php echo get_auth_name($conn, $index); ?></h1>
                    <h1 class="subtitle">Gen: <?php echo get_genre($conn, $index); ?> </h1>
                    <h1 class="subtitle"> In stoc: <?php echo get_stock($conn, $index); ?></h1>
                </div>

                <div class="prices">
                    <div class="price">Pret :<?php echo get_price($conn, $index); ?> lei</div>


                </div>
            </div>
            <hr />
            <?php
            }
            }
            ?>
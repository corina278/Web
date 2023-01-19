<?php 
include ("config.php");
include("nav-bar.php");
                $sql = "SELECT book_title, author_name, book_price, image FROM book";
                $result = $conn->query($sql);
                
                $count=0;
                
                // if ($result->num_rows > 0) {
                // output data of each row 
                    echo '<table>';   
                    echo '<tr>';
                    echo '<div class="container">';
                    echo '<div class="row">';
                    while($row = $result->fetch_assoc()) {
                        //echo '<tr class="product-item">';
                        
                        echo '<div class="col-4">';
                        echo '<div class="wrapper-product">';
                        echo '<img src="data:image/png;base64,' . base64_encode($row["image"]) . '"/>';
                        echo '<div class="product-info">';
                        echo '<span>' .  $row["book_title"] .  '</span>';
                        echo '<span>' .  $row["author_name"] . '</span>';
                        echo '<span>' .  $row["book_price"] . '</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }   
                    echo '</div>';   
                    echo '</div>';   
                    echo'</tr>';
                    echo'</table>';

                $conn->close();

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


    <?php
    include("footer1.php");
    ?>

<?php 
include ("config.php");
include("nav-bar.php");
                $sql = "SELECT album_title, artist_name, album_price, image FROM music";
                $result = $conn->query($sql);
                
                $count=0;
                
                // if ($result->num_rows > 0) {
                // output data of each row 
                    echo '<table>';   
                    echo '<tr>'; 
                    while($row = $result->fetch_assoc()) {
                        //echo '<tr class="product-item">';
                            echo '<td><img class="product-image" src="data:image/png;base64,'.base64_encode($row["image"]).'"/></td>';
                            echo '<td class="product-title">'.$row["album_title"].'</td>';
                            echo '<td class="product-price">'.$row["artist_name"].'</td>';
                            echo '<td class="product-price">'.$row["album_price"].'</td>';
                            $count++;
                            if($count%3==0)
                            {
                                echo'</tr>';
                                echo'<tr>';
                            }
                       // echo '</tr>';
                    }   
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

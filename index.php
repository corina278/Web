<?php 

session_start();

	include("config.php");
    include("nav-bar.php");
    

?>
<div class="container-fluid">
    <div class="slideshow-container">


    <div class="mySlides">
    <div class="numbertext">1 / 3</div>
        <img class="slide" src="img/download (1).jpeg" style="width:100%" />
    </div>
    <div class="mySlides">
    <div class="numbertext">2 / 3</div>
        <img class="slide" src="img/download.jpeg" style="width:100%" />
    </div>
    <div class="mySlides">
    <div class="numbertext">3 / 3</div>
        <img class="slide" src="img/PaperTown.png" style="width:100%" />
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
<!--books-->
        <?php
        $sql = "SELECT book_title, author_name, book_price, image FROM book LIMIT 3";
        $result = $conn->query($sql);
        echo '<div class="row">';
        echo '<div class="col">';
        echo '<table class="index>';
        echo '<tr class="index">';
        while ($row = $result->fetch_assoc()) {
            //echo '<tr class="product-item">';
            echo '<div>';
            echo '<img src="data:image/png;base64,' . base64_encode($row["image"]) . '"/>';
            echo '<div>' .  $row["book_title"] . '</div>';
            echo '<div>' .  $row["author_name"] . '</div>';
            echo '<div>' .  $row["book_price"] . '</div>';
            echo '</div>';
        }
        echo '</tr>';
        echo '</table>';
        echo '</div>';
        /*movies*/

        $sql = "SELECT film_title, producer_name, film_price, image FROM film LIMIT 3";
        $result = $conn->query($sql);
        echo '<div class="col">';
        echo '<table class="index>';
        echo '<tr class="index">';
        while ($row = $result->fetch_assoc()) {
            //echo '<tr class="product-item">';
            echo '<div>';
            echo '<img src="data:image/png;base64,' . base64_encode($row["image"]) . '"/>';
            echo '<div>' .  $row["film_title"] . '</div>';
            echo '<div>' .  $row["producer_name"] . '</div>';
            echo '<div>' .  $row["film_price"] . '</div>';
            echo '</div>';
        }
        echo '</tr>';
        echo '</table>';
        echo '</div>';

        /*albums*/
        $sql = "SELECT album_title, artist_name, album_price, image FROM music LIMIT 3";
        $result = $conn->query($sql);
        echo '<div class="col">';
        echo '<table class="index>';
        echo '<tr class="index">';
        while ($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<img src="data:image/png;base64,' . base64_encode($row["image"]) . '"/>';
            echo '<div>' .  $row["album_title"] . '</div>';
            echo '<div>' .  $row["artist_name"] . '</div>';
            echo '<div>' .  $row["album_price"] . '</div>';
            echo '</td>';
        }
        echo '</div>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
        ?>
        </div>
        </body>
    <?php
    include("footer1.php");
    ?>
<?php
include("nav-bar.php");
?>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include("config.php");
    // Retrieve products from the database
    $sql = "SELECT * FROM music";
    $result = $conn->query($sql);

    // Display products in a table
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["album_title"]. "</td>";
            echo "<td>" . $row["artist_name"]. "</td>";
            echo "<td>" . $row["album_quantity"]. "</td>";
            echo "<td>" . $row["album_price"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "No products found";
    }

    // Close connection
    $conn->close();
    ?>
    </tbody>
</table>

<?php
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

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Connect to the database
    //   $db = new PDO('mysql:host=localhost;dbname=librarie_online', 'username', 'password');
      // Prepare and execute the SQL query
      $stmt = $db->query('SELECT id, title, author FROM books');
      // Fetch the results
      $results = $stmt->fetchAll();
      // Iterate through the results and display them in a table
      foreach ($results as $row) {
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['title'].'</td>';
        echo '<td>'.$row['author'].'</td>';
        echo '</tr>';
      }
    ?>
  </tbody>
</table>

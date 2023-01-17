<?php

session_start();
include("config.php");
include("nav-bar.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    $number = $_POST["ph_number"];

    // Insert the new user into the database
    $sql = "INSERT INTO client (first_name, last_name, email, password, city, ph_number)
    VALUES ('$firstname', '$lastname', '$email', '$password', '$city', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<div class = "form">
<form action="signup.php" method="post">
  <label for="lastname">Last name:</label>
  <input type="text" id="lastname" name="lastname"><br>
  <label for="firstname">First name:</label>
  <input type="text" id="firstname" name="firstname"><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br>
  <label for="city">city:</label>
  <input type="text" id="city" name="city"><br>
  <input type="submit" value="Sign Up">
</form>

<?php

session_start();
include("config.php");
include("nav-bar.php");

?>


    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["firstname"] ?? "";
    $last_name = $_POST["lastname"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $city = $_POST["city"] ?? "";
    $number = $_POST["ph_number"] ?? "";
        $id_client = rand(10, 100);


    // Insert the new user into the database
    $sql = "INSERT INTO client (id_client, first_name, last_name, email, password, city, ph_number)
    VALUES ('$id_client', '$first_name', '$last_name', '$email', '$password', '$city', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully. If you want to create another user, you can start here:";
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Something went wrong, please review the information added and try again";
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
  <label for="city">City:</label>
  <input type="text" id="city" name="city"><br>
  <label for="number">Phone number:</label>
  <input type="text" id="ph_number" name="ph_number"><br>
  <input type="submit" value="Sign Up">
</form>

<?php
include("footer1.php");
?>
<?php 

session_start();

	include("config.php");
    include("nav-bar.php");
    

    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            echo "Nu lasa campuri goale";
        }else{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "librarie_online";
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT * FROM client WHERE email = ? LIMIT 1";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                $user_data = $result->fetch_assoc();
                if(password_verify($password, $user_data['password'])){
                    $_SESSION['email'] = $user_data['email'];
                    header("Location:index.php");
                }else{
                    echo "Email/parola incorecta";
                }
            }else{
            header("Location:signup.php");
                echo "Utilizatorul nu exista, creeaza-ti cont acum";
            }
            $stmt->close();
            $conn->close();
        }
    }
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

    

    <div class="login">
        <h1 class="login-title1">Bine ati venit</h1>
        <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Log in">
        <p>Nu ai un cont?</p>
            <a href="signup.php">Creeaza-ti unul acum!</a>
        </form>

    </div>

</body>

<?php
include("footer1.php");
?>

</html>
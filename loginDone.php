<?php 

session_start();

	include("config.php");
    include("nav-bar.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "select * from client where email = '$email' limit 1";
		$qres = mysqli_query($conn, $query);

		if(!empty($qres))
		{
				$user_data = mysqli_fetch_assoc($qres);
				if($user_data['password'] === $password && $user_data['email']===$email)
				{
					$_SESSION['email'] = $user_data['email'];
					header("Location:../view/index.php");
				}
                 else
                {
                    echo "Email/parola incorecta";
                }
		}
        else
        {
            echo "Nu lasa campuri goale";
        }
            
	}
    else
    {
       // echo "Eroare generala";
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
        <h1 class="login-title">Bine ati venit</h1>
        <form class="login-form" method="POST" action="index.php">
            <input type="text" id="email" placeholder="Email" name="email" />
            <input type="password" id="password" placeholder="Password" name="password" />
            <button type="submit">Log in</button>
            <p>Nu ai un cont?</p>
            <a href="signup.php">Creeaza-ti unul acum!</a>
        </form>
    </div>

</body>

</html>
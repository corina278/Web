<?php 

session_start();

	include("../config.php");
	
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
        echo "Eroare generala";
    }

?>

    
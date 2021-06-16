<?php
	
	include '../config/sessionN.php';

    
	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$address=$_POST['address'];
		//$phone=$_POST['phone'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;


		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: Inscription.php');
		}
		else{
			
			$stmt = $access->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: Inscription.php');
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);

					$stmt = $access->prepare("INSERT INTO users ( email, password, type, firstname, lastname, address ,contact_info ,photo) VALUES (:email, :password,0 , :firstname, :lastname,:address,'','')");
					$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname,'address'=>$address]);
					$userid = $access->lastInsertId();
				$stmt->closeCursor();
				header('Location:config/deconnexion.php');

			}

		}
		
	}

?>

<?php
	include '../config/accesbdd.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location:../Administration/index.php');
	}

	if(isset($_SESSION['user'])){
		
		try{
			$stmt = $access->prepare("SELECT * FROM users WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
			$stmt->closeCursor();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		
	}
?>

<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("INSERT INTO axie (name, class, breed_count) VALUES (:name, :class, :breed_count)");

			//bind
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':class', $_POST['axieclass']);
			$sql->bindParam(':breed_count', $_POST['breedcount']);
			

			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Axie added successfully' : 'Something went wrong. Cannot add axie.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: ../index.php');
	
?>
<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("UPDATE axie SET name = :name, class = :class, breed_count = :breed_count WHERE id = :axieid ");

			//bind
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':class', $_POST['axieclass']);
			$sql->bindParam(':breed_count', $_POST['breedcount']);
			$sql->bindParam(':axieid', $_GET['id'], PDO::PARAM_INT);


			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Axie edited successfully' : 'Something went wrong. Cannot edit axie.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: ../index.php');
	
?>
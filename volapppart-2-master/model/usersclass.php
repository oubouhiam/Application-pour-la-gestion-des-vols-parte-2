<?php
session_start();


 class User{

		function __construct() {
			$this->conn = new mysqli("localhost","root","","gestion_reservations");
		}

		function user_insert($nom, $prenom,$mail, $password,$statut) {	

			$query= "SELECT * FROM users WHERE email=?";
			$stmt = $this->conn->prepare($query);
						//This means that the first argument to this function, $types, gives mysqli the information what 
						//types your parameters are/what it should treat them as. Following that are the individual parameters.
			$stmt->bind_param("s",$mail);
			$stmt->execute();
			$result= $stmt->get_result();
			$row1 = mysqli_num_rows($result);
						//can't be more than 1 row for each user
			if ($row1 == 1) {		
				echo "user already taken";
			
			} 
			else 
			{
				
				$stmt =$this->conn->prepare("INSERT Into users (nom, prenom, email,password, statut) values(?,?,?,?,?)");
				$stmt->bind_param("sssss", $nom, $prenom, $mail, $password, $statut);
				$stmt->execute();
				
				header("Location: ../view/identification.php");
			}

		

			
		}
		function user_check($mail, $password) {

			$query= "SELECT * FROM users WHERE email=? && password =? ";
			$stmt =$this->conn->prepare($query);
			$stmt->bind_param("ss",$mail,$password);
			$stmt->execute();
			$result= $stmt->get_result();
			$row1 = mysqli_num_rows($result);
			//return data as a table with key & value
			$row2 = $result->fetch_assoc();
			$_SESSION["nom"] = $row2["nom"];
			$_SESSION["prenom"] = $row2["prenom"];
			$_SESSION["statut"] =  $row2["statut"];
			$_SESSION["id_user"] =  $row2["id_user"];

			// The mysqli_num_rows() function returns the number of rows in a result set.

//if we found a user/Admin the row1 should equal to 1
			if ($row1 == 1 ) {
				if ($row2["statut"] == "Admin") {
					header("Location: ../view/admin.php");
					# code...
				} else {  
					# code...
					header("Location: ../view/home.php");
					

				}
				
				
				
			}
			// if row1 = 0 so that mean there is no user with that email & password
			 else {
				header("Location: ../view/identification.php");
				
			}
		}
		function user_update($id,$nom, $prenom,$mail, $password) {
			mysqli_query($this->conn, "UPDATE `users` SET `nom` = '$nom', `prenom` = '$prenom', `email` = '$mail' , `password` = '$password' WHERE `id_user` = '$id'") or die(mysqli_error());
			header("location: ../view//identification.php");
		}
		function user_show($id) {

				$query = "SELECT * from users where id_user='$id'";
				$stmt = $this->conn->prepare($query);
				$stmt->execute();

				// $result = $stmt->get_result();
				// $row = $result->fetch_assoc();
				

				$result = $stmt->get_result();
				// $row = $result->fetch_assoc();
				return  $result;
				
		}
		 function log_out()
		{
			session_destroy();
			unset($_SESSION['nom']);
			unset($_SESSION['prenom']);
			unset($_SESSION["statut"] );
			unset($_SESSION['prenom']);
			unset($_SESSION['prenom']);

			return true;
		}


		

}










?>
<?php

include('../model/usersclass.php');


if(isset($_POST['regestration'])){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
    $password = $_POST['password'];
	$statut = "User";


	$user = new User();
	$user->user_insert($nom, $prenom, $mail, $password,$statut);


}
if(isset($_POST['identification'])){

	$mail = $_POST['mail'];
	$password = $_POST['password'];
	
	$user = new User();
	$user->user_check($mail, $password);
	


}







?>
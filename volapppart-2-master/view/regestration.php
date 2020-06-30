<?php
// include('../model/usersclass.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../public/css/main.css" rel="stylesheet" media="all">

</head>


<body>
	<div id="booking" class="section">

		
	<!-- this is the new regestration form ^_^ -->
	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">

            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form form action="../controller/login-back.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Votre nom" name="nom" required>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Votre prenom" name="prenom" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="mail" placeholder="Votre Email" name="mail" required>
						</div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
						</div>
						<p class="input--style-3">Si vous avez déjà un compte, merci de vous identifiez <span><a href="identification.php">ici</a></span></p>
                        <div class="p-t-10">
                            <button class="btn btn--pill " style="background-color : white; color : black;" name="regestration" type="submit">Créer mon compte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
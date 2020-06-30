<?php
session_start();
include('../model/volsclass.php');
?>

<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../public/css/style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
include('heder.php');
?>

<body>

	<?php
include('navbar.php');
?>
	<!-- <div class="flex">
		<section class="t">
			<div class="container py-3">
				<div class="card">
					<div class="row ">
						<div class="col-md-8 px-3">
							<div class="card-block px-3">

								<?php
								$id = $_GET['id'];
								$vol = new Vol();
								$res = $vol -> vol_show_id($id);
								$row = $res->fetch_assoc();
								?>

								<h4 class="card-title">Depart :<span style="color:blue"><?= $row['depart']; ?></span>
								</h4>
								<h4 class="card-title">Destination : <span
										style="color:blue"><?= $row['destination']; ?></span></h4>
								<h4 class="card-title">Date depart :<span style="color:blue"><?= $row['date_depart']; ?>
									</span> </h4>
								<h4 class="card-title">Nomber de places : <span
										style="color:blue"><?= $row['num_place'];; ?></span></h4>
								<h4 class="card-title">Prix : <span style="color:blue"><?= $row['prix']; ?> DH</span>
								</h4>

								<a href="index.php" class="btn btn-primary">Annuler le vol</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div> -->
	
<div style= " display: flex; justify-content: center;">
				<div class="card" >
						<?php
											$id = $_GET['id'];
											$vol = new Vol();
											$res = $vol -> vol_show_id($id);
											$row = $res->fetch_assoc();
											?>
					<!-- first div -->
						<div class="image">
								<img class="volImage" src="../public/img/air.jpg" alt="Avatar" style="width:100%">
								<div class="container">
								<div class="form-btn">
														<button name="add" class="submit-btn" style="color: white;pointer-events: none;width:100%; background-color : #7024ad;">
														À propos de votre Vol
														</button>
													</div>
										<h4><b>Date départ</b></h4>
										<p><?= $row['date_depart']; ?></p>
										<h4><b>Ville du départ</b></h4>
										<p><?= $row['depart'];?></p>
										<h4><b>Ville d'arrivée</b></h4>
										<p><?= $row['destination']; ?></p>
										<h4><b>Nombre de Places</b></h4>
										<p><?= $row['num_place']; ?></p>
								</div>
						</div>
					<!-- second div -->
										<div class="middle">
											<a class="btn btn-success" href="home.php"
																type="button" style="background-color: red;">Annuler le voyage</i></a>
										</div>
			</div>
				<!-- end new card  -->

			<div id="booking">
							<div class="section-center">
								<div class="container">
									<div class="row" style="width: 500px;">
										<div class="col-md-7 col-md-offset-1" style="width: 500px;">
											<div class="booking-form" style="width: 500px;">
											<H3>Veuillez saisir ces données pour terminer le processus<br></H3>
												<form action="../controller/reservation-back.php" method="POST">
													<div class="row">
													
														<div class="col-md-6" >
															<div class="form-group">
																<span class="form-label" style="color : black;">Nom</span>
																<input class="form-control" name="nom" type="text">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Prenom</span>
																<input class="form-control" name="prenom" type="text">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Age</span>
																<input class="form-control" name="age" type="text" required>
															</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Pays </span>
																<input class="form-control" name="pays" type="text">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Adresse </span>
																<input class="form-control" name="adresse" type="text">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Numéro de telephone </span>
																<input class="form-control" name="tele" type="text">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Email </span>
																<input class="form-control" name="email" type="text">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<span class="form-label" style="color : black;">Numéro de passeport </span>
																<input class="form-control" name="passeport" type="text">
															</div>
														</div>
														<input type="hidden" id="custId" name="id" value="<?= $id ;?>">
													</div>
													<div class="form-btn" >
														<button type="submit" name="add" class="submit-btn" style="background-color : #a832a6">
															Réservation complète
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
			</div>

</div>
	<?php
	include('script.php');
	?>
</body>

</html>
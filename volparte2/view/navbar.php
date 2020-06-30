


<nav class="navbar navbar-expand-lg  " style="background-color: black;">
		<a class="navbar-brand" style="color : #7024ad;" href="#">Fly Emirates</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto " >
				<li class="nav-item ">
					<a class="nav-link" style="color : white;"   href="home.php">Accueil</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" style="color : white;" href="userinfo.php">Informations personnels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="color : white;" href="user_reservation.php">Mes réservations</a>
				</li>

			</ul>

				<?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['statut'])) {?>
					<ul class="navbar-nav ">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" style="color : white;" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	
							<?= $_SESSION["nom"]; ?> <?= $_SESSION["prenom"]; ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Statut : <samp><?= $_SESSION["statut"]; ?></samp></a>
							<a class="dropdown-item" href="logout.php">Je me déconnecte</a>
							<div class="dropdown-divider"></div>
						</div>
					</li>
				</ul>
				<?php } else { ?>
					<a href="identification.php">Login</a>


				<?php }; ?>
				
				
	
			


		</div>
	</nav>
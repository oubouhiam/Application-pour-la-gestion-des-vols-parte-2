<?php
include('../model/volsclass.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<?php
include('heder.php');
?>

<body>
	<?php
	include('navbar.php');
	?>

	<!-- <div class="container text-center">
		<form method="post" action="recherche">
			<h1>Resultats des recherches</h1>

	</div>
	<div id="bo" class="container">
		<div class="row">
			<div class="col-12">
				<?php
				$villedepart = $_POST['villedepart'];
				$villearrivee = $_POST['villearrivee'];

				$vol = new Vol();
   				$res = $vol -> vol_show($villedepart,$villearrivee);
   				
				?>

				<tr>
					<?php
							$row_cnt = $res->num_rows; 
							if($row_cnt <= 0)
							echo " Aucun résultat trouvé";							
							else{
								echo"<table class='table table-bordered'>
					<thead>
						<tr>
							<th scope='col'>Date départ</th>
							<th scope='col'>Ville du départ</th>
							<th scope='col'>Ville d'arrivée</th>
							<th scope='col'>Nombre de Places</th>
							<th scope='col'>Reservation</th>
						</tr>
					</thead>
					<tbody>";
							while ($row = $res->fetch_assoc()) { ?>
					<td><?= $row['date_depart']; ?></td>
					<td><?= $row['depart'];?></td>
					<td><?= $row['destination']; ?></td>
					<td><?= $row['num_place']; ?></td>
					<td>
						<a class="btn btn-success" href="reservation.php?id=<?= $row['id']; ?>"
							type="button">Reserver</i></a>
					</td>
				</tr>
				<?php }} ?>

				</tbody>
				</table>
			</div>
		</div>
	</div> -->
	<div class="container text-center">
		<form method="post" action="recherche">
			<h1>Resultats des recherches</h1>

	</div>
<div class="cards_container">
<?php
				$villedepart = $_POST['villedepart'];
				$villearrivee = $_POST['villearrivee'];

				$vol = new Vol();
   				$res = $vol -> vol_show($villedepart,$villearrivee);
   				
				?>
				<?php
							$row_cnt = $res->num_rows; 
							if($row_cnt <= 0)
							echo "
							<div class=\"container text-center\" style=\"margin-top: 10%;\">
		<form>
			<p class=\"input--style-3\">Aucun résultat trouvé pour Réessayer <span><a href=\"home.php\">Click ici</a></span></p>
	</div>
							
							";	
							else{
								
							while ($row = $res->fetch_assoc()) { ?>
<div class="card">
		<!-- first div -->
	<div class="image">
		<img class="volImage" src="../public/img/air.jpg" alt="Avatar" style="width:100%">
        <div class="container">
		
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
	<a class="btn btn-success" href="reservation.php?id=<?= $row['id']; ?>"
							type="button">Reserver</i></a>
    </div>
</div>
				<?php }} ?>
	</div>

	<?php
	include('script.php');
	?>

</body>

</html>
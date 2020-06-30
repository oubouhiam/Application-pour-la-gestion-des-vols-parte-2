<?php
include('../model/dbconnection.php');
session_start();
				

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('heder.php');
?>



<body>
	<!-- The video -->
<video autoplay muted loop id="myVideo" style="
position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;">
  <source src="rain.mp4" type="video/mp4">
</video>
<div style="   
position: fixed;
  color: #f1f1f1;
  width: 100%;
">
<?php
	include('navbar.php');
	?>
	<!-- Default form subscription -->
	<center>
	<div style="margin-top: 10%; width: 50%; background: rgba(0, 0, 0, 0.5);">
<form class="text-center border border-light p-5" method="post" action="recherche.php">
		<!-- Name -->
		<label for="exampleInputEmail1">Ville de départ</label>
		<input type="text" name="villedepart" class="form-control mb-4">

		<!-- Email -->
		<label for="exampleInputPassword1">Ville d arrivée</label>
		<input type="text" name="villearrivee" class="form-control mb-4">

		<!-- Sign in button -->
		<center>
		<button class="btn btn-info btn-block" style="width : 50%;background-color: #8b1ee3;" type="submit" name="submit-search">Chercher les vols</button>
		</center>
		


	</form>
</div>
	</center>

	
	

</div>


	 



	</section>
	</div>
	<?php
	include('script.php');
	?>


</body>

</html>
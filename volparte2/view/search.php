<?php
include('../model/volsclass.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<link href="../public/css/cards.css" rel="stylesheet" media="all">
<body>
<?php
include('navbar.php');
?>
    <div class="contain">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img id="image" src="telescope.png" ` height="150px">
                    <h3>Explore</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis reprehenderit, nulla ut
                        aspernatur nobis earum maxime sunt accusantium. Fugit expedita nostrum, id ea vero consequuntur
                        magni quis doloremque beatae maiores.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
</body>

</html>
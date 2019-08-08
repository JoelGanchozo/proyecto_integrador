<section class="fondo">
<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="es">
  <head>
    <meta charset="utf-8">
	<title>Alquiler</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
	</head>
	<style>
.fondo{
 height: 99vh;
 width: 101%;
 background-image: url(images/fondo.jpg);
 background-color: #9e0e0e;
 background-repeat: no-repeat;
 background-size: cover;  
}
.e1{
background-color:white;
}
  </style>
	<link rel="stylesheet" href="./style.css">
  <?php

include("include/menu.php");
	?>

<body>
<center>
<h3>Alquilar una bicicleta</h3>
</center>

<center>
<table class="e1" CELLPADDING="30"  border="10">
<tr >
	<td>
		<a href=""><img src="images/images.jfif" ></a>
		<center><form action="./alquiler.html" method="post">
		<h1 class="titulos">ALFA</h1>
		<button type="submit">Adquirir</button></form></center>
		
	</td>
	
	<th>
	
	<td>
		<a class="imagen1" href=""><img src="images/images1.jfif" ></a>
		<center><form action="./alquiler.html" method="post">
		<h1 class="titulos">TURBO</h1>
		<button type="submit">Adquirir</button></form></center>
	</td>

<th>

	<td>
		<a class="imagen1" href=""><img src="images/images2.jfif" ></a>
		<center><form action="./alquiler.html" method="post">
		<h1 class="titulos">TORNADO</h1>
		<button type="submit">Adquirir</button></form></center>
	</td>
</tr>	
</table>
</center>

<footer>
<center>
		<div class="carousel-caption">
		<p>&copy; Joel Ganchozo<br>&copy; Stefany Samaniego</p>
	</center>
</footer>


</body>
</html>
</section>

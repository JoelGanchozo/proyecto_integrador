<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos</title> 
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

 </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">BORRAR DATOS: PERMISO ADMINISTRADOR</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		
			<li><a href=""><i class="fa fa-user fa-lg fa-fw"></i>Bienvenido Administrador
	<strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
			
  <footer class="footer">
	<center>
		<p>&copy; Joel Ganchozo<br>&copy; Stefany Samaniego</p>
	</center>
</footer>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


    
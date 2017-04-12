<?php session_start(); ?>
<?php $con = mysqli_connect("localhost", "root", "", "inmobi") or die("Error al conectar a la base de datos!"); ?>

<?php 

	
	$anuncio_id = $_GET["id"];

	$sql16 = "DELETE FROM anuncios WHERE id='$anuncio_id'";
	$query16 = mysqli_query($con, $sql16);

	if($query16){
		header("Location:admin.php");
	}


?>
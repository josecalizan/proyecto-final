<?php session_start(); ?>
<?php $con = mysqli_connect("localhost", "root", "", "inmobi") or die("Error al conectar a la base de datos!"); ?>

<?php 

	
	$accion_id = $_GET["id"];

	$sql14 = "DELETE FROM accion WHERE id='$accion_id'";
	$query14 = mysqli_query($con, $sql14);

	if($query14){
		header("Location:admin.php");
	}


?>
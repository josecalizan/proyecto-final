<?php session_start(); ?>
<?php include 'includes/insert_anuncio.php'; ?>
<?php 
	
	if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
		header("Location:admin.php");
	}

?>

<?php
	$registroExitoso = 0;

	if(isset($_POST["submitLogin"])){

		$emailLogin = $_POST["emailLogin"];
		$passwordLogin = $_POST["passwordLogin"];

		$sql20 = "SELECT * FROM users WHERE correo='$emailLogin'";
		$query20 = mysqli_query($con, $sql20);

		while($row20 = mysqli_fetch_assoc($query20)){
			$dbId = $row20["id"];
			$dbEmailLogin = $row20["correo"];
			$dbPasswordLogin = $row20["password"];
			$dbNameLogin = $row20["nombre"];

			$dbAdminBoolean = $row20["admin"];

			if($emailLogin==$dbEmailLogin && $passwordLogin==$dbPasswordLogin){
				$_SESSION["id"] = $dbId;				

				if($dbAdminBoolean=="si"){
					header("Location:admin.php");
					$_SESSION["admin"] = true;
				}
				header("Location:./");

			}
		}
	}else if(isset($_POST["submitRegistro"])){

		$cedulaRegistro = $_POST["cedulaRegistro"];
		$nombreRegistro = $_POST["nombreRegistro"];
		$apellidoRegistro = $_POST["apellidoRegistro"];
		$emailRegistro = $_POST["emailRegistro"];
		$passwordRegistro = $_POST["passwordRegistro"];
		$telefonoRegistro = $_POST["telefonoRegistro"];
		$celularRegistro = $_POST["celularRegistro"];
		$faxRegistro = $_POST["faxRegistro"];
		$masInfoRegistro = $_POST["masInfoRegistro"];
		$esAdmin = $_POST["esAdmin"];

		$sql25 = "INSERT INTO users(nombre, apellido, password, correo, cedula, telefono, celular, fax, mas, admin) VALUES('$nombreRegistro', '$apellidoRegistro', '$passwordRegistro', '$emailRegistro', '$cedulaRegistro', '$telefonoRegistro', '$celularRegistro', '$faxRegistro', '$masInfoRegistro', '$esAdmin')";
		$query25 = mysqli_query($con, $sql25);

		if($query25){					
			echo "<script>window.location.href = './?query=Login&RegistroExitoso=1'</script>";			

		}else{
			echo "<script>alert('Error al agregar el usuario!')</script>";
		}

	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'includes/head_meta.php'; ?>
</head>
<body>
	<span class="h_id_usuario" id="h_id_usuario" hidden="true"></span>
	<?php 
		if(isset($_SESSION["id"])){
			require 'includes/header_user.php';
		}else{
			require 'includes/header_no_user.php';
		}
	?>	

	<br>
	<div class="container">	
		<div class="row">
		    
		
			
			<div class="col-xs-9">
				<h1>contactanos<h1>
			<!-- Do not change the code! -->
<a id="foxyform_embed_link_306431" href="http://es.foxyform.com/">foxyform</a>
<script type="text/javascript">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://es.foxyform.com/js.php?id=306431&sec_hash=fb4a0394144&width=350px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
			</div>
			
			
			
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=152918521902715";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://bisicle-shop.000webhostapp.com/view.php?id=56" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
							</div>
			
		
			
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=152918521902715";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
							</div>

		</div>

		
		<br>
	</div>
	

	
	<br>
	<?php require 'includes/footer.php'; ?>

	<script src="includes/js/script.js"></script>
	<script>
		<?php if(isset($_SESSION["id"])){echo '$(".h_id_usuario").text('.$_SESSION["id"].');';} ?>
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH7BUCoBIt3AFY6_ertXOw-Hh60bVeFHw&libraries=places&callback=initMap"
        async defer></script>

</body>
</html>
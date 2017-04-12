<?php session_start(); ?>
<?php 	
	$id_anuncio = $_GET["id"];
	$con = mysqli_connect("localhost", "root", "12345678", "inmobi") or die("Error al conectar a la base de datos!");
	$sql = "SELECT * FROM anuncios WHERE id='$id_anuncio'";
	$query = mysqli_query($con, $sql);

	//DB DATA
	$dbTitulo = "";
	$dbCategoria = "";
	$dbDireccion = "";
	$dbAccion = "";
	$dbPrecio = 0;
	$dbDescripcion = "";
	$dbIdUsuario = 0;
	$dbLat = "";
	$dbLng = "";
	$dbUbicacion = "";

	//IMAGENES
	$dbImg1 = "";
	$dbImg2 = "";
	$dbImg3 = "";
	$dbImg4 = "";
	$dbImg5 = "";
	

	while($row = mysqli_fetch_assoc($query)){
		$dbTitulo = $row["titulo"];
		$dbCategoria = $row["categoria"];
		$dbDireccion = $row["direccion"];
		$dbAccion = $row["accion"];
		$dbPrecio = $row["precio"];
		$dbDescripcion = $row["descripcion"];
		$dbIdUsuario = $row["id_usuario"];

		$dbImg1 = $row["img1"];
		$dbImg2 = $row["img2"];
		$dbImg3 = $row["img3"];
		$dbImg4 = $row["img4"];
		$dbImg5 = $row["img5"];



	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

	<?php require 'includes/head_meta.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.min.js"></script>
	<style>
		.swiper-container {
			width: 100%;
			height: 500px;
			margin-left: auto;
			margin-right: auto;
		}
		.swiper-slide img{
			width: 100%;
		}
		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;
			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}
	</style>
</head>
<body>
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
			<div class="col-xs-3">
				<?php require 'includes/categories.php'; ?>
			</div>
			<div class="col-xs-9">
				<div class="row">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<div class="container">
								<a class="breadcrumb-item" href="./">Bicycle-Shop</a>
								<span class="breadcrumb-item active">Ver anuncio</span>
							</div>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- Slider main container -->
						<div class="swiper-container">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<?php 
									if(!empty($dbImg1) && $dbImg1!="includes/uploads/"){
										?>
										<div class="swiper-slide"><img src="<?php echo $dbImg1; ?>" alt=""></div>
										<?php
									}
									if(!empty($dbImg2) && $dbImg2!="includes/uploads/"){
										?>
										<div class="swiper-slide"><img src="<?php echo $dbImg2; ?>" alt=""></div>
										<?php
									}
									if(!empty($dbImg3) && $dbImg3!="includes/uploads/"){
										?>
										<div class="swiper-slide"><img src="<?php echo $dbImg3; ?>" alt=""></div>
										<?php
									}
									if(!empty($dbImg4) && $dbImg4!="includes/uploads/"){
										?>
										<div class="swiper-slide"><img src="<?php echo $dbImg4; ?>" alt=""></div>
										<?php
									}
									if(!empty($dbImg5) && $dbImg5!="includes/uploads/"){
										?>
										<div class="swiper-slide"><img src="<?php echo $dbImg5; ?>" alt=""></div>
										<?php
									}

								?>
							</div>
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>

							<!-- If we need navigation buttons -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>

							<!-- If we need scrollbar -->
							<div class="swiper-scrollbar"></div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12">
						<div class="verAnuncioDetalles">
							<div class="row" style="display: flex;align-items: center;">
								<div class="col-xs-6">
									<div class="float-xs-left">
										<h5><a href="#" style="color: #555;"><?php echo $dbTitulo; ?></a></h5>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="float-xs-right">
										<h5 class="verAnuncioPrecio">$RD <?php echo number_format($dbPrecio); ?>.00</h5>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									<h6><i class="fa fa-info-circle"></i> Detalles</h6>
									<hr>
									<table class="table table-bordered verAnuncioTabla">
										<thead>
											<tr class="thead-default">
												<th>Categoría</th>
												<th>Dirección</th>
												<th>Acción</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $dbCategoria; ?></td>
												<td><?php echo $dbDireccion; ?></td>
												<td><?php echo $dbAccion; ?></td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									<h6><i class="fa fa-file-text"></i> Descripción</h6>
									<hr>
									<p><?php echo $dbDescripcion; ?></p>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									<?php 

										$sql2 = "SELECT * FROM users WHERE id='$dbIdUsuario'";
										$query2 = mysqli_query($con, $sql2);

										$dbNombre = "";
										$dbApellido = "";
										$dbEmail = "";
										$dbTelefono = 0;
										$dbCelular = 0;

										while($row2 = mysqli_fetch_assoc($query2)){
											$dbNombre = $row2["nombre"];
											$dbApellido = $row2["apellido"];
											$dbEmail = $row2["correo"];
											$dbTelefono = $row2["telefono"];
											$dbCelular = $row2["celular"];
										}

									?>
									<h6><i class="fa fa-user"></i> Datos del vendedor</h6>
									<hr>
									<label><b>Nombre: </b></label> <label><u><?php echo $dbNombre; ?></u></label>
									<br>
									<label><b>Apellido: </b></label> <label><u><?php echo $dbApellido; ?></u></label>
									<br>
									<label><b>Correo electrónico: </b></label> <label><u><?php echo $dbEmail; ?></u></label>
									<br>
									<label><b>Teléfono: </b></label> <label><u><?php echo $dbTelefono; ?></u></label>
									<br>
									<label><b>Celular: </b></label> <label><u><?php echo $dbCelular; ?></u></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<?php require 'includes/footer.php'; ?>

	<script>
		var swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			slidesPerView: 1,
			paginationClickable: true,
			spaceBetween: 30,
			loop: true
		});
	</script>
</body>
</html>			
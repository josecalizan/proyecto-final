<script language="JavaScript">
function Borra(idcliente)
{
var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
if (agree) { document.location="eliminar.php?id="+idcliente; }
else return false ;
}
</script>
<style type="text/css">
body p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
<form name="form1" method="post" action="buscador.php" id="cdr" >
  <h3>Buscar Cliente  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
      </p>
</form>
 <p>
  <style type="text/css">
input{outline:none;border:0px;}
#busqueda{}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}
</style>
   
  <?php
$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("inmobi");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM anuncios WHERE titulo LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>

<?php

while($f=mysql_fetch_array($busqueda)){
?>
<div class="col-xs-4">
				<div class="product">
					<a href="view.php?id=<?php echo $row["id"]; ?>"><img src="<?php echo $row['img1']; ?>" alt="img"></a>
					<div class="product-block">
						<div class="product-name"><a href="view.php?id=<?php echo $row["id"]; ?>"><?php echo $row["titulo"]; ?></a></div>
						<div class="product-price">$RD<?php echo number_format($row["precio"]); ?>.00</div>
					</div>
				</div>
			</div>
<?php
}
}
?>



 
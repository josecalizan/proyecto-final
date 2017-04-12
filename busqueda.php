<form name="form1" method="post" action="busquedador.php">
<input name="busqueda" type="text" id="busqueda" size="35" maxlength="30">
<input type="submit" name="Submit" value="busquedar">
</form>

<?php
mysql_connect("localhost","root",""); 
mysql_select_db("inmobi");
?>

<?php
$busqueda="";
$busqueda=$_POST['busqueda'];

if($busqueda!="")
{
$busqueda=mysql_query("SELECT * FROM inmobi WHERE usuario LIKE '%".$busqueda."%'");

while($f=@mysql_fetch_array($busqueda))
{
echo $f['id'].'&nbsp;&nbsp;'.$f['descripcion'].'&nbsp;&nbsp;'.$f['categoria']."<br>";
}
}
?>
<?php
include('conectar.php');    
$linkt=conectar();

extract($_GET);

/*$sql="SELECT * FROM tbl_noticias_blog WHERE fecha='$busqueda' OR titulo='$busqueda' OR dcorta='$busqueda' OR dlarga='$busqueda'"*/
$sql="SELECT * FROM tblusuario WHERE 
rut LIKE '%$busqueda%'"
mysqli_query($linkt,$sql);


mysqli_close($linkt);
?>
<br />  





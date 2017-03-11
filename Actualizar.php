<?php
include "conexion.php";

$Id=$_POST["id"];
$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];

$sql="UPDATE mfyar_tabla SET NOMBRE_SERVICIO='$nom', DIRECCION='$dir', RFC='$rfc', TELEFONO='$tel', CLASIFICACION='$clasif', FOTO='$foto', LATITUD='$lat', LONGITUD='$longit' where ID_SERVICIOS='$Id'";

$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Tel:".$tel." Clasificación:".$clasif." Foto:".$foto." Latitud:".$lat." Longitud:".$longit;
}else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>
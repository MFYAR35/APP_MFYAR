<?php

include "conexion.php";
$Id=$_POST["ID"];
$sql="DELETE FROM mfyar_tabla where ID_SERVICIOS=$Id";
$result=mysqli_query($conn,$sql);
if($result){
	echo "ID Eliminado";
}else{
	echo "Error no se encontro el ID".mysqli_error();
}
mysqli_close($conn);
?>
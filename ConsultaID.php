<?php

include "conexion.php";
$Id=$_POST["ID"];

$sql="SELECT * FROM mfyar_tabla where ID_SERVICIOS=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$datos[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "Error no se encontro el ID".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);
?>
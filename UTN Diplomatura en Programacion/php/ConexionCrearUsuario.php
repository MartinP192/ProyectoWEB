<?php

include("conexion.php"); 
$usuario  		=$_POST['usuario'];
$nombre  		=$_POST['nombre'];
$apellido	  	=$_POST['apellido'];
$password  		=$_POST['password'];
$email  		=$_POST['email'];
$edad  			=$_POST['edad'];
$descripcion	=$_POST['descripcion'];

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$consulta = "SELECT usuario
              FROM usuarios
			  WHERE usuario = '$usuario' "; 
$consulta = mysqli_query($conexion, $consulta); 
$consulta = mysqli_fetch_array($consulta); 


if (!$consulta) {
	
	$sql = " INSERT INTO usuarios VALUES ( '$usuario', '$nombre', '$apellido', '$passwordHash', '$email', '$edad', '$descripcion')";
	

	
	if (mysqli_query($conexion, $sql)) {
	

		header('Location: /UTN Diplomatura en Programacion/html/Login UTN Diplomatura/LoginDiplomatura.html'); 
		
	}
	else {
		
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
}
else {
	
    header('Location: /UTN Diplomatura en Programacion/html/Login UTN Diplomatura/Registro/Registro.html'); 
	
	}
	

mysqli_close($conexion);
?>
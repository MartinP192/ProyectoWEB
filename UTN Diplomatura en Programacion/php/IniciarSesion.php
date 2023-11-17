<?php

include("conexion.php"); 

session_start(); 


$_SESSION['login'] = false;



$usuario  = $_POST['usuario'];
$password = $_POST['password'];


$consulta = "SELECT usuario, password
              FROM usuarios
			  WHERE usuario = '$usuario' "; 
$consulta = mysqli_query($conexion, $consulta); 
$consulta = mysqli_fetch_array($consulta); 


if($consulta) {
	
	if (password_verify($password, $consulta['password'])) {
		
		$_SESSION['login']       = true;
		$_SESSION['usuario']     = $consulta['usuario']; 
		$_SESSION['nombre']      = $consulta['nombre'];
		$_SESSION['apellido']    = $consulta['apellido'];
		$_SESSION['password']    = $consulta['password'];
		$_SESSION['email']       = $consulta['email'];		
		$_SESSION['descripcion'] = $consulta['descripcion'];
		
		
		
		echo ("usuario registrado <br>");
		
		header('Location: /UTN Diplomatura en Programacion/html/Paginaweb UTN Diplomatura/Index-2.html'); 
	
	
	
	}
	else
	{
		echo "<br><br>Contraseña incorrecta";
		header('Location: /UTN Diplomatura en Programacion/Index.html'); 
	}
}
else  
{
		
}


mysqli_close($conexion);
?>
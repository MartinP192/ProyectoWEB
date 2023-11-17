<?php

include("conexion.php"); 

session_start(); 


$_SESSION['login'] = false;



$usuario = $_POST['usuario'];
$password = $_POST['password'];


$consulta = "SELECT usuario, nombre, apellido, password, email, edad, descripcion
             FROM usuarios
			 WHERE usuario = '$usuario' "; 
$consulta = mysqli_query($conexion, $consulta); 
$consulta = mysqli_fetch_array($consulta); 


if($consulta) {
	
	if (password_verify($password, $consulta['password'])) {
		
		$_SESSION['login'] = true;
		$_SESSION['nickname'] = $consulta['usuario']; 
		$_SESSION['nombre'] = $consulta['nombre'];
		$_SESSION['apellido'] = $consulta['apellido'];
		$_SESSION['password'] = $consulta['password'];
		$_SESSION['email'] = $consulta['email'];
		$_SESSION['edad'] = $consulta['edad'];
	    $_SESSION['descripcion'] = $consulta['descripcion'];
		
		
		
		header('Location: ../UTN Diplomatura en Programacion/Paginaweb UTN Diplomatura/PaginaWeb UTN Diplomatura.html'); 
		
		
	}
	else
	{
		echo "<br><br>Contraseña incorrecta";
		echo "<br><a href='../UTN Diplomatura en Programacion/Login UTN Diplomatura/Registro/Registro.html' >Intentalo de nuevo.</a></div>";
	}
}
else  
{
		echo "El usuario no existe";
		echo "<br><a href='../UTN Diplomatura en Programacion\Login UTN Diplomatura\Registro\Registro.html' >Intentalo de nuevo.</a></div>";
}


mysqli_close($conexion);
?>
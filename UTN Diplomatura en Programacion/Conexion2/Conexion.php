<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$BD = "ahoy_bd";


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $BD);

if (!$conexion) {
	echo "fallo la conexion <br>";
	die("connection failed: " . mysqli_connect_error());
	
}

else{ 
    echo "conexion exitosa";
}

?>
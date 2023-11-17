<?php


$servidor    = "localhost"; 
$usuario     = "root";      
$contrasenha = "";          
$BD          = "ahoy_bd";        


$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);


if (!$conexion) {
    echo ("Falló la conexion <br>");
	die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Conexion exitosa";
}
?>

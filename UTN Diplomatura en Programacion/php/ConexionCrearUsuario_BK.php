<?php

include("Conexion.php");

$nickname  =$_POST["nickname"];
$nombre  =$_POST["nombre"];
$apellidos  =$_POST["apellidos"];
$edad  =$_POST["edad"];
$descripcion  =$_POST["descripcion"];
$email  =$_POST["correo"];
$password  =$_POST["contraseña"];

$password = password_hash($password_1, PASSWORD_DEFAULT);
$fotoperfil = "img/$nickname/perfil.jpg";
$consultaId = "SELECT Nickname
               FROM persona
			   WHERE Nickname= '$nickname' ";
$consultaId = mysqli_query($conexion, $consultaId);
$consultaId = mysqli_fetch_array($consultaId);

if(!$consultaId)
	
	   $sql = "INSERT INTO persona VALUES ( '$nombre', 'apellidos', '$edad', '$descripcion', '$fotoperfil', '$email', '$passwordHash')";

if (mysqli_query($conexion, $sql)){

   mkdir("../img/$nickname");
   copy("../img/default.jpg", "../img/$nickname/perfil.jpg");

   echo "Tu cuenta ha sido creada.";
   echo "<br> <a href='../Paginaweb UTN Diplomatura/PaginaWeb UTN Diplomatura.html' >Iniciar Sesion</a></div>";
}

else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
{
   echo "El Nickname ya existe.";
   echo "<a href='../Paginaweb UTN Diplomatura/PaginaWeb UTN Diplomatura.html' > Intentalo de nuevo.</a></div>";
}

mysqli_close($conexion);{

}
 ?>
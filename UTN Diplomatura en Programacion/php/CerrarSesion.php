<?php

session_start(); 
$_SESSION = array();

	
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_param();
	setcookie(session_name(),'', time() - 42000,
	$params["patch"], $params["domain"],
	$params["secure"], $params["httponly"]
	);
}
		



session_destroy();
header('Location: /html/Login UTN Diplomatura/LoginDiplomatura.html');


?>
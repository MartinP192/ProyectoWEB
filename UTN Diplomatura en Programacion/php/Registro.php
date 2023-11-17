<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Registro de Usuario</h1>
    </header>

    <main>
        <form action="register.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" name="username" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br>

            <input type="submit" value="Registrar">
        </form>
    </main>
</body>
</html>

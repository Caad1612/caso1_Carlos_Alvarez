<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    // Si no está logueado, redirigir al login
    header('Location: Inicio.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
</head>
<body>

<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
<p>Has iniciado sesión exitosamente.</p>
<a href="logout.php">Cerrar sesión</a>

</body>
</html>

<?php
session_start(); // Iniciar la sesión

// Destruir la sesión para cerrar sesión
session_destroy();

// Redirigir al login
header('Location: index.html');
exit();
?>

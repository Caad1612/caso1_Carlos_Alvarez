<?php
session_start(); // Iniciar la sesión

// Definir las credenciales fijas
$usuario_valido = 'usuario';
$contraseña_valida = '1234';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $usuario = $_POST['user'];
    $contraseña = $_POST['pass'];

    // Verificar las credenciales
    if ($usuario == $usuario_valido && $contraseña == $contraseña_valida) {
        // Si las credenciales son correctas, redirigir a la página de inicio
        $_SESSION['usuario'] = $usuario; // Guardar el usuario en la sesión
        echo "<script>alert('Inicio de sesión exitoso'); window.location.href = 'Inicio.html';</script>";
    } else {
        // Si las credenciales no son correctas, mostrar un mensaje de error
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }
}
?>

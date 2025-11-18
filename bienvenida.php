<?php
// 1. Iniciar la sesión para poder LEERLA.
session_start();

// 2. 
if ( !isset($_SESSION['usuario']) ) {
    
    // 3. Redirigir esta pagina si no hay sesión iniciada
    header('Location: nopermisos.php');
    exit();
}

// 4. Si, efectivamente, hay sesión iniciada entonces mostramos la página
// Preparamos las variables que usaremos en el HTML de abajo.
$nombre_usuario = $_SESSION['usuario']; // Rescatamos el nombre guardado en la sesión
$hora_actual = date("H:i:s"); // Obtenemos la hora actual del servidor
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Página de bienvenida para usuarios autenticados">
	<title>Bienvenido a nuestra página</title>
</head>
<body>
	<h1 class="display-4 mb-4">¡Bienvenido, <?php echo $nombre_usuario; ?>!</h1>
	<p class="lead">La hora actual del servidor es: <?php echo $hora_actual; ?></p><br>
    <a href="cerrarsesion.php" class="btn btn-danger btn-lg">Cerrar Sesión</a>
</body>
</html>

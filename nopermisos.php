<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de acceso denegado para usuarios no autenticados">
    <title>Acceso Denegado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-danger shadow" style="max-width: 500px;">
            <div class="card-body text-center text-danger p-5">
                <h1 class="card-title mb-3">Acceso Denegado</h1>
                <p class="card-text text-dark">No tienes permisos para ver esta página. Por favor, inicia sesión para continuar.</p><br>
                <div class="mt-4">
                    <a href="Formulario.php" class="btn btn-primary w-100">Volver a la página de login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
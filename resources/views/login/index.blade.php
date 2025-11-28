<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patomed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 380px; border-radius: 20px;">

        <!-- ICONO -->
        <div class="text-center mb-3">
            <div class="bg-primary text-white rounded-3 mx-auto d-flex justify-content-center align-items-center"
                 style="width: 60px; height: 60px; font-size: 32px; font-weight: bold;">
                P
            </div>
        </div>

        <!-- TITULO -->
        <h4 class="text-center fw-bold mb-1">Patomed</h4>
        <p class="text-center text-muted mb-4" style="font-size: 14px;">
            Sistema de Análisis Patológico
        </p>

        <!-- FORMULARIO -->
        <form action="{{ route('login.auth') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="correo@ejemplo.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">
                Iniciar Sesión
            </button>
        </form>

    </div>
</div>

</body>
</html>

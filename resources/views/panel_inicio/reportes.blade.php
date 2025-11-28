<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patomed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }
        .navbar-brand-icon {
            width: 38px;
            height: 38px;
            background: #0d47a1;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border-radius: 8px;
            margin-right: 10px;
        }
        .nav-link.active {
            background-color: #0d47a1 !important;
            color: white !important;
            border-radius: 6px;
        }
        .form-section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<!-- NAVBAR SUPERIOR -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d47a1;">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <div class="navbar-brand-icon">P</div>
            <span class="fw-bold">Patomed</span>
        </a>

        <div>
            <a href="{{ route('login.index') }}" class="btn btn-light fw-semibold px-3">
                Cerrar Sesión
            </a>
        </div>
    </div>
</nav>

<!-- MENÚ -->
<div class="bg-primary bg-opacity-25 py-2">
    <div class="container d-flex gap-3">
        <a class="nav-link px-3 py-2" href="{{ route('panel_inicio.ingreso') }}">Ingreso de Pacientes</a>
        <a class="nav-link px-3 py-2" href="{{ route('panel_inicio.busqueda') }}">Búsqueda y Listado</a>
        <a class="nav-link active px-3 py-2">Reportes</a>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">

    <div class="row g-4">
        

    <!-- BOTONES -->
    <div class="form-section mt-4 d-flex gap-5 justify-content-center">
        <button class="btn btn-primary btn-sm fw-bold">Guardar</button>
        <button class="btn btn-outline-secondary btn-sm">Validar</button>
        <button class="btn btn-outline-secondary btn-sm">Limpiar</button>
    </div>

</div>


</body>
</html>

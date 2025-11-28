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
        <a class="nav-link active px-3 py-2">Ingreso de Pacientes</a>
        <a class="nav-link px-3 py-2" href="{{ route('panel_inicio.busqueda') }}">Búsqueda y Listado</a>
        <a class="nav-link px-3 py-2" href="{{ route('panel_inicio.reportes') }}">Reportes</a>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">

    <div class="row g-4">
        <!-- INFORMACIÓN DEL PACIENTE -->
        <div class="col-md-6">
            <div class="form-section">
                <h5 class="fw-bold mb-3">Información del Paciente</h5>
                <form action="{{ route('panel_inicio.ingreso.store') }}" method="POST">
                  @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Código</label>
                        <input type="text" class="form-control" placeholder="P-001">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="Juan">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" value="Pérez García">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Cédula</label>
                        <input type="text" class="form-control" placeholder="1234567890">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">F. Nacimiento</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">EPS</label>
                        <input type="text" class="form-control" placeholder="EPS Sanitas">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Edad</label>
                        <input type="number" class="form-control" value="45">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Sexo</label>
                        <select class="form-select">
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>

                </div>

            </div>
        </div>

        <!-- ANÁLISIS PATOLÓGICO -->
        <div class="col-md-6">
            <div class="form-section">
                <h5 class="fw-bold mb-3">Análisis Patológico</h5>

                <label class="form-label">Descripción Macroscópica</label>
                <textarea class="form-control mb-3" rows="3" placeholder="Describa las características visibles macroscópicas..."></textarea>

                <label class="form-label">Descripción Microscópica</label>
                <textarea class="form-control mb-3" rows="3" placeholder="Describa las características microscópicas..."></textarea>

                <label class="form-label">Diagnóstico</label>
                <textarea class="form-control mb-3" rows="2" placeholder="Diagnóstico clínico..."></textarea>

                <label class="form-label">Resultado</label>
                <select class="form-select">
                    <option>Negativo</option>
                    <option>Positivo</option>
                </select>

            </div>
        </div>
    </div>

    <!-- BOTONES -->
    <div class="form-section mt-4 d-flex gap-5 justify-content-center">
        <button type="submit"class="btn btn-primary btn-sm fw-bold">Guardar</button>
        <button class="btn btn-outline-secondary btn-sm">Validar</button>
        <button class="btn btn-outline-secondary btn-sm">Limpiar</button>
    </div>

</div>
</form>

</body>
</html>

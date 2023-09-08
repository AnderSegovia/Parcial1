<?php
session_start();

if($_SESSION['ok'] === null ) {
    header("Location: ../index.php");
}

include '../conf.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Insert</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../salir.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3>Insertar Data</h3>
                <form action="../proceso.php" method="POST">
                    <div class="mb-1">
                        <input type="text" value="1" id="" name="opcion" hidden>

                    </div>
                    <div class="mb-1">
                        <label for="campo2" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="" name="nombre" value="" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="" name="apellido" value="" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="" name="correo" value="" require >
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="" name="usuario" value="" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Rol</label>
                        <input type="text" class="form-control" id="" name="rol" value="" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="" name="pwd" value="" require>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Guardar">           
                </form>
            </div>
        </div>
    </div>
</body>
</html>
 <!-- Incluye Bootstrap JS (jQuery y Popper.js son necesarios) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js"></script>
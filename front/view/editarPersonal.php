<?php
session_start();

if($_SESSION['ok'] === null ) {
    header("Location: ../index.php");
}else if($_SESSION["rol"]==="basico"){
    header("Location: personal.php");

}

include '../conf.php';
$id=$_GET['id'];
$query = "SELECT * FROM tbl_personal where id_personal='$id'";
$ejecutar= mysqli_query($conexion,$query);
$fila =mysqli_fetch_assoc($ejecutar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update</title>
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
                <h3>Actualizar</h3>
                <form action="../proceso.php" method="POST">
                    <div class="mb-1">
                        <input type="text" value="4" id="" name="opcion" hidden>

                        <input type="text"  id="" name="id" value="<?= $fila['id_personal']; ?>" require hidden>
                    </div>
                    <div class="mb-1">
                        <label for="campo2" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="" name="nombre" value="<?= $fila['nombre']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="" name="apellido" value="<?= $fila['apellido']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="" name="telefono" value="<?= $fila['telefono']; ?>" require >
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="" name="edad" value="<?= $fila['edad']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="" name="correo" value="<?= $fila['correo']; ?>" require>
                    </div>
                    
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="" name="direccion" value="<?= $fila['direccion']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="" name="estado" value="<?= $fila['estado']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Fecha Nacimiento</label>
                        <input type="text" class="form-control" id="" name="fechaNacimiento" value="<?= $fila['fechaNacimiento']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Dui</label>
                        <input type="text" class="form-control" id="" name="dui" value="<?= $fila['dui']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Distancia</label>
                        <input type="text" class="form-control" id="" name="distancia" value="<?= $fila['distancia']; ?>" require>
                    </div>
                    <div class="mb-1">
                        <label for="campo3" class="form-label">Tiempo</label>
                        <input type="text" class="form-control" id="" name="tiempo" value="<?= $fila['tiempo']; ?>" require>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary value="Guardar">           
                </form>
                <div class="mt-3 alert alert-success d-none">
                    ¡Formulario enviado con éxito!
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 <!-- Incluye Bootstrap JS (jQuery y Popper.js son necesarios) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js"></script>
 <script>
    function mostrarMensaje() {
        // Muestra el mensaje de éxito después de hacer clic en el botón "Enviar"
       // document.querySelector('.alert-success').classList.remove('d-none');
       alert("Guardado con exito")
    }
</script>
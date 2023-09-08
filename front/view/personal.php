<?php
session_start();

if($_SESSION['ok'] === null) {
    header("Location: ../index.php");
}
include '../conf.php';
$query = "SELECT * FROM tbl_personal";
$ejecutar = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Personal</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $_SESSION['nombre'] ?></a>
            <a class="navbar-brand" href="#"><?= $_SESSION['rol'] ?></a>

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


    <div class="container mt-5">
    <?php
    if($_SESSION["rol"]==="administrador" or $_SESSION["rol"]==="rustico" ){
        echo "<a href='agregarPersonal.php' class='btn btn-success' >Agregar</a>";
    }
    ?>
        <h2 class="text-center">Tabla de Personal</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Fecha Nacimiento</th>
                        <th>Dui</th>
                        <th>Distancia</th>
                        <th>Tiempo</th>
                        <?php
                        if($_SESSION["rol"]==="administrador" or $_SESSION["rol"]==="rustico"){
                            echo" <th></th>";
                            if($_SESSION["rol"]==="administrador"){
                                echo" <th></th>";
                            }
                        }
                        ?>

                    </tr>
                </thead>
                <tbody>
                        <?php
                        while($datos= mysqli_fetch_array($ejecutar)){
                            echo "<tr>";
                            echo"<td>".$datos[0]."</td>";
                            echo"<td>".$datos[1]."</td>";
                            echo"<td>".$datos[2]."</td>";
                            echo"<td>".$datos[3]."</td>";
                            echo"<td>".$datos[4]."</td>";
                            echo"<td>".$datos[5]."</td>";
                            echo"<td>".$datos[6]."</td>";
                            echo"<td>".$datos[7]."</td>";
                            echo"<td>".$datos[8]."</td>";
                            echo"<td>".$datos[9]."</td>";
                            echo"<td>".$datos[10]."</td>";
                            echo"<td>".$datos[11]."</td>";
                            if($_SESSION["rol"]==="administrador" or $_SESSION["rol"]==="rustico"){
                                echo"<td> <a class='btn btn-warning btn-sm' href = 'editarPersonal.php?id=".$datos[0]."'>Modificar</a></td>";
                                if($_SESSION["rol"]==="administrador"){
                                        echo"<td> <a class='btn btn-danger btn-sm' href = '../delete.php?id=".$datos[0]."'>Eliminar</a></td>";
                                    
                                    
                                }
                            }
                            echo"</tr>";
                        }
                        ?>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>
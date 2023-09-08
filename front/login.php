<?php
//incluir la coneccion a la db
include 'conf.php';
//verificar si se enviaron datos por post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pwd'];

    // Consulta filtrar el usuario y la contra
    $query = "SELECT * FROM usuarios WHERE usuario = '$user' AND contra = '$pass'";
    $result = mysqli_query($conexion, $query);
        //validar que la consulta tenga datos
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Guardar informacion de la sesion
        session_start();
        $_SESSION['ok']="ok";
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['num']=$row['id_usuario'];
        $_SESSION['nombre']=$row['nombre'];
        header("Location: view/personal.php");

        // Redireccionar según el rol
        /*
        if ($_SESSION['rol'] == 'administrador') {
            header("Location: admin.html");
        } elseif ($_SESSION['rol'] == 'rustico') {
            header("Location: rustico.html");
        } else {
            // Rol no reconocido
            echo "Rol no reconocido";
        }
        */
    } 
    else {
        // Usuario o contraseña incorrectos
        echo "Usuario o contraseña incorrectos";
    }
}

// Resto del código HTML para mostrar el formulario de inicio de sesión
?>

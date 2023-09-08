<?php
include 'conf.php';
$opcion = $_POST['opcion'];
$nombre =$_POST ['nombre'];
$apellido =$_POST['apellido'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];

$correo=$_POST['correo'];

$direccion=$_POST['direccion'];

$estado=$_POST['estado'];
$fecha=$_POST['fechaNacimiento'];

$dui=$_POST['dui'];
$distancia=$_POST['distancia'];
$tiempo=$_POST['tiempo'];
$usuario = $_POST['usuario'];
$rol =$_POST['rol'];
$pwd=$_POST['pwd'];

if($opcion == 1){
    //insert
    $query = "INSERT INTO usuarios(id_usuario,nombre,apellido,correo,usuario,rol,contra)
    VALUES(NULL, '$nombre','$apellido','$correo','$usuario','$rol','$pwd')";
    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
        header("Location: view/home.php");
    }else
    {
        header("Location: view/agregar.php");
    }

}else if ($opcion==2){
    //update
    $id=$_POST['id'];
    $query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido' , correo='$correo' , usuario='$usuario' , rol='$rol' , contra='$pwd' where id_usuario='$id'";
    $ejecutar= mysqli_query($conexion, $query);
    if($ejecutar){
        header("Location: view/home.php");
    }else
    {
        header("Location: view/update.php");
    }
}else if ($opcion==4){
    //update
    $id=$_POST['id'];
    $query = "UPDATE tbl_personal SET nombre='$nombre', apellido='$apellido' , telefono='$telefono' , edad='$edad', correo='$correo' , direccion='$direccion' , estado='$estado' , fechaNacimiento='$fecha' , dui='$dui' , distancia='$distancia', tiempo='$tiempo' where id_personal='$id'";
    $ejecutar= mysqli_query($conexion, $query);
    if($ejecutar){
        header("Location: view/personal.php");
    }else
    {
        header("Location: view/editarPersonal.php");
    }
}else if($opcion == 5){
    //insert
    $query = "INSERT INTO tbl_personal(id_personal,nombre,apellido,telefono,edad,correo,direccion,estado,fechaNacimiento,dui,distancia,tiempo)
    VALUES(NULL, '$nombre','$apellido','$telefono','$edad','$correo','$direccion','$estado','$fecha','$dui','$distancia','$tiempo')";
    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
        header("Location: view/personal.php");
    }else
    {
        header("Location: view/agregarPersonal.php");
    }

}else{
    //delate

}
?>
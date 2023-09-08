<?php

session_start();
if($_SESSION['ok'] === null) {
    header("Location: index.php");
}
include "conf.php";

    $id=$_GET['id'];
    $query = "DELETE FROM tbl_personal WHERE id_personal='$id'";
    $ejecutar= mysqli_query($conexion,$query);
    if($ejecutar){
        header("Location: view/personal.php");
    }else
    {
        header("Location: view/personal.php");
    }
?>
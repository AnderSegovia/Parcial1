<?php
session_start();
if($_SESSION['ok'] === null) {
    header("Location: index.php");
}

session_destroy();
header("Location: index.php");


?>
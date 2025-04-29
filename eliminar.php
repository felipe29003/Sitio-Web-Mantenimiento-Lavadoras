<?php
session_start();
include("conexion.php");

if (isset($_GET['id'])) {
    $servicio_id = $_GET['id'];

    $sql = "DELETE FROM servicios WHERE servicio_id = '$servicio_id'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script> alert('El servicio se eliminó correctamente'); location.assign('mis_servicios.php');</script>";
    } else {
        echo "<script> alert('Ocurrió un error'); location.assign('mis_servicios.php');</script>";
    }
} else 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mis Servicios</title>
    <link rel="stylesheet" href="mis_servicios.css">    
    <script type="text/javascript">
        function confirmacion(){
            return confirm('¿Está seguro que desea eliminar el servicio?');
        }
    </script>
</head>
<body>
<?php
session_start(); // Iniciar la sesión
if (!isset($_SESSION['usuario'])) {
    echo "<script language='JavaScript'> alert('Inicie sesion para poder acceder a mis servicios'); location.assign('login.php'); </script>";
    exit();
}

include("conexion.php");


$usuario_id = $_SESSION['usuario'];

$sql_usuario = "SELECT nombre, apellido FROM usuario WHERE id = '$usuario_id'";
$resultado_usuario = mysqli_query($conexion, $sql_usuario);


?>

<section id="HeaderTarjetasS">
    <a href="Home.php">Volver</a>
    <?php
    if ($fila_usuario = mysqli_fetch_assoc($resultado_usuario)) {
        $nombre = htmlspecialchars($fila_usuario['nombre']);
        $apellido = htmlspecialchars($fila_usuario['apellido']);
        echo "<h1>Servicios de $nombre $apellido</h1>";
    } else {
        echo "<h1>Mis Servicios</h1>";
    }
    ?>
</section>

<section id="TarjetasS">
    <div class="ContainerT">
<?php
$sql = "SELECT * FROM servicios WHERE usuario_id = '$usuario_id'";
$resultado = mysqli_query($conexion, $sql);

$contador = 1; 
if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "
        <div class='TarjetaMiServicio'>
            <div class='ServicioHead'>
                <h2>" . $contador . "</h2>
            </div>
            <div class='ServicioBody'>
                <p><b>Dirección:</b> " . htmlspecialchars($row['direccion']) . "</p>
                <p><b>Teléfono:</b> " . htmlspecialchars($row['telefono']) . "</p>
                <p><b>Tipo Servicio:</b> " . htmlspecialchars($row['tipo_servicio']) . "</p>
                <p><b>Hora Servicio:</b> " . htmlspecialchars($row['hora_atencion']) . "</p>
                <p><b>Correo:</b> " . htmlspecialchars($row['correo']) . "</p>
                <p><b>Localidad:</b> " . htmlspecialchars($row['localidad']) . "</p>
            </div>
            <div class='ServicioEliminar'>
                <a href='eliminar.php?id=".$row['servicio_id']."'onclick='return confirmacion()'><img src='Imagenes/Papelera.png' alt='papelera'></a>
            </div>
        </div>";
        $contador++;
    }
} else {
    echo "<p class='Noservice'>¡¡No cuenta con servicios agendados</p>";
}
mysqli_close($conexion);
?>
</section>

</body>
</html>


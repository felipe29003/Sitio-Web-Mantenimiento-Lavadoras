<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Clientes satisfechos</title>
    <!--link a la hoja de estilos correspondiente a este html-->
    <link rel="stylesheet" href="PortalStyle.css">    
</head>
<body>
<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['usuario'])) {
        $idSesion = $_SESSION['usuario'];
        $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
        $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
        $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
        $localidad = mysqli_real_escape_string($conexion, $_POST['localidad']);
        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
        $hora_atencion = mysqli_real_escape_string($conexion, $_POST['hora_atencion']);
        $tipo_servicio = mysqli_real_escape_string($conexion, $_POST['tipo_servicio']);

        $sql = "INSERT INTO servicios (usuario_id, nombre_completo, telefono, direccion, localidad, correo, hora_atencion, tipo_servicio) 
                VALUES ('$idSesion', '$nombre_completo', '$telefono', '$direccion', '$localidad', '$correo', '$hora_atencion', '$tipo_servicio')";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language='JavaScript'> alert('Servicio agendado con extio'); location.assign('Home.php'); </script>";
        } else {
            echo "<script language='JavaScript'> alert('Ocurrio un error al agendar el servicio intentelo denuevo'); location.assign('agendar_servicio.php'); </script>";
        }
        mysqli_close($conexion);
    } else {
        echo "<script language='JavaScript'> alert('Debe iniciar sesion para poder agendar un servicio'); location.assign('login.php'); </script>";
    }
} else {
?>
    <section id = "FormHeader">
        <h1>Bienvenido al portal de agendamiento de servicios</h1>
        <h2>WashTech - Solutions S.A</h2>
    </section>
    <section id ="PortalF">
        <a href="Home.php" class="back-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path d="M10 20A10 10 0 1 0 0 10a10 10 0 0 0 10 10zm1.289-15.7 1.422 1.4-4.3 4.344 4.289 4.245-1.4 1.422-5.714-5.648z"/></svg>
        </a>
        <div class = "PortalContainer">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <div class="formulario-grupo">
                    <label for="PortalN">Nombre Completo</label>
                    <input type="text" id="PortalN" name="nombre_completo" required>
                </div>
                <div class="formulario-grupo">
                    <label for="PortalT">Numero de contacto</label>
                    <input type="tel" id="PortalT" name="telefono" required>
                </div>
                <div class="formulario-grupo">
                    <label for="PortalD">Direccion de residencia</label>
                    <input type="text" id="PortalD" name="direccion" required>
                </div>
                <div class="formulario-grupo">
                    <!--Etiqueta para la opcion tipo consulta-->
                    <label for="localidad">Localidad</label>
                    <!--Etiqueta de tipo select-->
                    <select id="localidad" name="localidad" required>
                        <option value="Tunjuelito">Tunjuelito</option>
                        <option value="Soacha">Soacha</option>
                        <option value="Puente-Aranda">Puente Aranda</option>
                        <option value="Ciudad-Bolivar">Ciudad bolivar</option>
                        <option value="San-Cristobal">San cristobal</option>
                        <option value="Barrios-Unidos">Barrios Unidos</option>
                    </select>
                </div>

                <div class="formulario-grupo">
                    <label for="PortalC">Correo electronico</label>
                    <input type="email" id="PortalC" name="correo" required>
                </div>

                <div class="formulario-grupo">
                    <!--Etiqueta para la opcion tipo consulta-->
                    <label for="hora-atencion">Hora preferida atencion</label>
                    <!--Etiqueta de tipo select-->
                    <select id="hora-atencion" name="hora_atencion" required>
                        <option value="mañana">Mañana</option>
                        <option value="tarde">Tarde</option>
                        <option value="tarde-noche">Tarde-Noche</option>
                    </select>
                </div>

                <div class="formulario-grupo">
                    <!--Etiqueta para la opcion tipo consulta-->
                    <label for="tipo-servicio">Tipo servicio</label>
                    <!--Etiqueta de tipo select-->
                    <select id="tipo-servicio" name="tipo_servicio" required>
                        <option value="diagnostico">Diagnostico</option>
                        <option value="reparacion-de-fallas">Reparacion de fallas</option>
                        <option value="instalacion-lavadora">Instalacion lavadora</option>
                        <option value="cambio-componentes">Cambio componentes</option>
                        <option value="mantenimiento-preventivo">Mantenimiento preventivo</option>
                    </select>
                </div>
                <button type="submit" name="Enviar" class="enviar">Agendar</button>
            </form>
        </div>
    </section>
<?php
}
?>
</body>
</html>
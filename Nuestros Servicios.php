<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link a la hoja de estilos correspondiente a este html-->
    <link rel="stylesheet" href="ServiciosStyle.css">
</head>
<!--Body para la 3 pagina del sitio web "Nuestros servicios" -->
<body>
    <!--Etiqueta nav la cual contiene el menu de navegacion principal del sitio web  -->
    <nav class="menu">
         <!--imagen logo de la empresa-->
        <img class="logo" src="Imagenes/Logo-Empresa.png" alt="logo empresa">
        <!--Lista desordenada la cual representa los enlaces del menu -->
        <ul>
            <!--Items de la lista desornenada, se utiliza la etiqueta <a href=""></a> para referenciar otras secciones de la pagina web-->
            <a href=""></a>
            <li><a class="Item" href="Home.php">Inicio</a></li>
            <li><a class="Item" href="#SobreNosotros">¿Quiénes somos?</a></li>
            <li><a class="Item" href="Nuestros Servicios.php">Nuestros servicios</a></li>
            <li><a class="Item" href="Clientes Satisfechos.php">Clientes satisfechos</a></li>
            <li><a class="Item" href="Contactanos.php">Contactanos</a></li>
        </ul>
        <!--Contenedor generico div el cual agrupa los elementos del menu desplegable de inicio de sesion -->
        
        <div class="user-menu">
        <!--Icono de inicio de sesión-->
        <img class="Usuario" src="Imagenes/Imagen-Usuario.png" alt="Inicio Sesion">
        <div class="dropdown-menu">
          <ul>
            <?php
            session_start(); //inicia la sesion
            if (isset($_SESSION['usuario'])) {
                echo '
                    <li><a class="UserItem" href="mis_servicios.php">Mis servicios</a></li>
                    <li><a class="UserItem" href="actualizar.html">Actualizar datos</a></li>
                    <li><a class="UserItem" href="cerrar_sesion.php">
                        <img src="Imagenes/Cerrar-Sesion.png" alt="Cerrar sesión">
                    </a></li>
                ';
            } else {
                echo '
                    <li><a class="UserItem" href="login.php">Iniciar sesión</a></li>
                    <li><a class="UserItem" href="registro.php">Registrarse</a></li>
                ';
            }
            ?>
          </ul>
        </div>
    </nav>
    <!--Enlace al archivo JavaScript el cual maneja el evento del menu desplegable-->
    <script src="script.js"></script>


    <!--Header de la primera seccion de Nuestros servicios-->
    <section id="HeaderTecnicos">
        <h1>Nuestros tecnicos</h1>  
    </section>

    <!--Contenido de la primera seccion-->
    <section id="Tecnicos">
        <!--Container generico el cual agrupa a los tecnicos-->
        <div class="TecnicosContainer">
            <!--Tarjeta individual de tecnico la cual se divide en dos contenedores hijos-->
            <div class="TarjetaTecnico">
                <!--Primer contenedor hijo el cual tiene la imagen correspondiente al tecnico-->
                <div class="TecnicoImagen">
                    <img src="Imagenes/Sebas.png" alt="Técnico">
                </div>
                <!--Segundo contenedor hijo el cual tiene el nombre y el texto correspondiente a la imagen del tecnico-->
                <div class="TecnicoTexto">
                    <h2>SEBASTIAN MATEUS</h2>
                    <p>Hola mi nombre es Sebastian Mateus, Soy técnico reparador egresado del Politécnico Grancolombiano. Cuento con 10 años de experiencia en el campo y mi objetivo es brindarte la mejor atención posible.</p>
                    <img src="Imagenes/Estrellas.png" alt="Estrellas">
                </div>  
            </div>

            <!--Mas tarjetas de tecnicos los cuales cumplen las mismas propiedades que el primero-->
            <div class="TarjetaTecnico Num2">
                <div class="TecnicoImagen">
                    <img src="Imagenes/Tecnico2.png" alt="Técnico">
                </div>
                <div class="TecnicoTexto">
                    <h2>MATHIAS TORRES</h2>
                    <p>Hola mi nombre es Mathias, Soy técnico reparador graduado del SENA. Actualmente, Cuento con 5 años de experiencia en mantenimiento de lavadoras, espero poder atender todas tus necesidades de la mejor manera.</p>
                    <img src="Imagenes/Estrellas.png" alt="Estrellas">
                </div>  
            </div>

            <div class="TarjetaTecnico Num3">
                <div class="TecnicoImagen">
                    <img src="Imagenes/Tecnico3.png" alt="Técnico">
                </div>
                <div class="TecnicoTexto">
                    <h2>GIOVANNY LOPEZ</h2>
                    <p>Hola mi nombre es Giovanny, Soy técnico reparador de la escuela de ingenieros Julio Garavito. Cuento con 15 años de experiencia en mantenimiento de diversos electrodomésticos, tengo el conocimiento necesario para ofrecerte un servicio optimo.</p>
                    <img src="Imagenes/Estrellas.png" alt="Estrellas">
                </div>  
            </div>
        </div>
    </section>

    <!--Header de la segunda seccion(nuestros servicios)-->
    <section id="HeaderServices">
        <h1>Nuestros servicios</h1>
    </section>

    <!--Contenido de la segunda seccion-->
    <section id="OurServices">
        <!--Contenedor generico que agrupa todos los servicios-->
        <div class="ContainerServicios">
            <!--Contenedor hijo el cual se divide en dos partes y agrupa los elementos de las tarjetas de servicios-->
            <div class="TarjetaServicio">
                <!--Primera parte del contenedor hijo la cual comprende la imagen asociada al servicio-->
                <div class="Simagen">
                    <img src="Imagenes/Servicio 1.png" alt="Servicio1">
                </div>
                <!--Segunda parte del contenedor hijo la cual contiene su descripcion, titulo y mas informacion-->
                <div class="Sbody">
                    <h3>Diagnostico y reparacion de fallas</h3>
                    <p>Diagnosticamos a domicilio y en nuestros puntos físicos tu lavadora, a sí mismo, dependiendo de la gravedad del daño la reparamos y la dejamos como nueva. No te preocupes, obtienes garantía durante 2 años con asesoramiento por parte de nuestros asesores para que te dure el mayor tiempo posible.</p>
                    <p>Duracion estimada : 2-3 horas &emsp; Precio estimado : 100.000-150.000</p>
                </div>
            </div>
            <!--Mas tarjetas de servicios las cuales cumplen con las propiedades de las anteriores-->
            <div class="TarjetaServicio dos">
                <div class="Simagen">
                    <img src="Imagenes/Servicio 2.png" alt="Servicio2">
                </div>
                <div class="Sbody">
                    <h3>Compra de lavadoras</h3>
                    <p>Compra tu lavadora totalmente nueva únicamente en nuestros puntos autorizados, garantizamos calidad y durabilidad, además tenemos asociación con las mejores marcas en el mercado. Por tu primera compra de lavadora, tanto el domicilio como la instalación son totalmente gratis.</p>
                </div>
            </div>
            <div class="TarjetaServicio tres">
                <div class="Simagen">
                    <img src="Imagenes/Servicio 3.png" alt="Servicio3">
                </div>
                <div class="Sbody">
                    <h3>Cambio e instalacion de componentes internos</h3>
                    <p>Vendemos en nuestros puntos autorizados toda clase de componentes originales para que tu lavadora funcione correctamente, por la compra de 5 componentes lleva un obsequio gratis. Ademas recuerda la instalacion de estos mismos es gratuita y corre por nuestra cuenta.</p>
                    <p>Duracion estimada : 1 hora &emsp; Precio estimado : depende componente</p>
                </div>
            </div>
            <div class="TarjetaServicio cuatro">
                <div class="Simagen">
                    <img src="Imagenes/Servicio 4.png" alt="Servicio4">
                </div>
                <div class="Sbody">
                    <h3>Mantenimiento preventivo</h3>
                    <p>Eliminamos polvo, suciedad, detergente u otros residuos que pueden afectar el rendimiento de tu equipo, calibramos mangueras, filtros y correas para asegurar la operabilidad continua de la lavadora y también aplicamos lubricante en los componentes mecánicos de la lavadora. Si compraste una lavadora nueva con nosotros los 3 primeros meses el mantenimiento preventivo es gratuito.</p>
                    <p>Duracion Estimada: 1 hora y media  &emsp; Precio estimado: 50000</p>
                </div>
            </div>
            <div class="TarjetaServicio cinco">
                <div class="Simagen">
                    <img src="Imagenes/Servicio 5.png" alt="Servicio5">
                </div>
                <div class="Sbody">
                    <h3>Instalacion de lavadoras</h3>
                    <p>Instalamos todo tipo de lavadoras, ajustamos el desague y las tomas de agua segun donde desees instalar el dispositivo. Si compraste una lavadora con nosotros recuerda la instalacion es totalmente gratis.</p>
                    <p>Duracion estimada : 3 horas  &emsp; Precio estimado : 250.000</p>
                </div>
            </div>
        </div>
        <!--Elemento ancla-->
        <a class="Agenda" href="PortalServicios.html">¡AGENDA TU SERVICIO YA MISMO!</a>
    </section>


    <!--Etiqueta footer para representar el pie de pagina-->
    <footer class = "Foot">
         <!--El footer se compone de 2 contenedores div los cuales a su vez tienen mas elementos hijos-->
        <div class ="FootHeader">
            <!--Contenedor el cual contiene el logo de la empresa-->
            <div class = "LogoFoot">
                <img src="Imagenes/Logo-Empresa.png" alt="LogoFooter">
            </div>
            <!--Contenedor el cual contiene el nombre de la empresa-->
            <div class="Nombreempresa">
                <p> &#169; 2005 - 2025 WashTech Solutions S.A</p>
            </div>
            <!--Contenedor el cual contiene las imagenes de las redes sociales de la empresa-->
            <div class="RedesSociales">
                <img src="Imagenes/Instagram.png" alt="Instagram">
                <img src="Imagenes/Facebook.png" alt="Facebook">
                <img src="Imagenes/Twitter.png" alt="Twitter">
                <img src="Imagenes/Telegram.png" alt="Telegram">
            </div>
        </div>
        <!--Linea horizontal la cual separa la primera seccion del footer de la segunda-->
        <hr>
        <!--Segundo contenedor padre el cual agrupa los enlaces rapidos del footer-->
        <div class="FootSection">
            <div>
                <h2>Nuestros servicios</h2>
                <a href="Nuestros Servicios.html">Revision lavadoras</a>
                <a href="Nuestros Servicios.html">Cambio de componentes</a>
                <a href="Nuestros Servicios.html">Domicilios</a>
                <a href="Nuestros Servicios.html">Instalacion lavadoras</a>
                <a href="Nuestros Servicios.html">Mantenimiento preventivo</a>
                <a href="Nuestros Servicios.html">Reparacion lavadoras</a>
            </div>
            <div>
                <h2>Acerca de nosotros</h2>
                <a href="#SobreNosotros">¿Quienes Somos?</a>
            </div>
            <div>
                <h2>Contactanos</h2>
                <a href="Contactanos.html">Deja tus comentarios</a>
                <a href="Contactanos.html">Waste.Solver@Hotmail.com</a>
                <a href="Contactanos.html">Telefono: (802) 919-3925 </a>
                <a href="Contactanos.html">WhatsApp: 1-355-993-3407</a>
                <a href="Contactanos.html">Agenda tu servicio</a>
            </div>
        </div>
    </footer>
</body>
</html>
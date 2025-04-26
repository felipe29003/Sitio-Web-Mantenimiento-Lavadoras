<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <!--links a las hoja de estilos correspondiente a este HTML-->
    <link rel="stylesheet" href="contactanos.css">
    <link rel="stylesheet" href="ServiciosStyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<!--Body para la 5 pagina del sitio web "Contactanos" -->
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

    <!--Header para la unica seccion de contactanos-->
    <div class="header">
        <h1>Contáctanos</h1>
        <p>¿Tienes alguna sugerencia, queja, reclamo o pregunta acerca de nuestros servicios? Háznoslo saber  completando el formulario que se encuentra en la parte posterior y te contactaremos en el menor tiempo posible</p>
    </div>

    <!--Contenido de la seccion contactanos-->
    <div class="container">
        <!--Contenedor el cual agrupa todos los elementos del formulario de contacto-->
        <div class="form-container">
             <!--Formulario de contacto, cada item del formulario tiene un contenedor generico propio-->
            <form id="contactForm">
                 <!--Contenedor generico el cual agrupa un campo del formulario y su etiqueta correspondiente-->
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                 <!--Mas campos del formulario los cuales cumplen las mismas propiedades que los anteriores-->
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>
                
                <div class="form-group">
                    <label for="telefono-fijo">Teléfono fijo</label>
                    <input type="tel" id="telefono-fijo" name="telefono-fijo">
                </div>

                <!--Contenedor el cual agrupa los elementos de una opcion desplegable dentro del formulario(Tipo de consulta)-->
                <div class="form-group">
                    <!--Etiqueta para la opcion tipo consulta-->
                    <label for="tipo-consulta">Tipo de consulta</label>
                    <!--Etiqueta de tipo select-->
                    <select id="tipo-consulta" name="tipo-consulta" required>
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="consulta">Consulta</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                </div>
                <!--Etiqueta boton de tipo enviar-->
                <button type="submit" class="submit-btn">ENVIAR</button>
            </form>
        </div>
        
        <!--Segunda parte del contenedor formulario la cual agrupa la informacion de contacto-->
        <div class="contact-info">
            <!--Contenedor el cual agrupa la informacion de contacto y su imagen referente al EMAIL-->
            <div class="contact-item">
                <!--Etiqueta span la cual permite alinear la informacion de contacto con su imagen asociada-->
                <span class="contact-text">Waste.Solver@Hotmail.com</span>
                <div class="icon">
                    <!--Permite traer un icono vectorial escalable junto con un atributo de tipo path para definir su forma-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>
                </div>
            </div>
            
            <!--Mas contenedores que agrupan informacion de contacto con las mismas propiedades que los anteriores-->
            <div class="contact-item">
                <span class="contact-text">(802) 919-3925</span>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                </div>
                
            </div>
            
            <div class="contact-item">
                <span class="contact-text">1-355-993-3407</span>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                </div>
                
            </div>
            
            <div class="contact-item">
                <span class="contact-text">Cl. 38A Sur #34d-51, Bogotá</span>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                      </svg>
                </div>
            </div>
        </div>
    </div>
    <!--Enlace al archivo JavaScript el cual maneja el evento del menu desplegable-->
    <script src="script.js"></script>
    
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
    <script>
        // JavaScript para manejar el envío del formulario
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('¡Formulario enviado! Te contactaremos pronto.');
            this.reset();
        });
    </script>
</body>
</html>
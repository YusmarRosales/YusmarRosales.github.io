<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="grid-container">
    <header class="header contenido-header">
        <div class="contenedor">
            <div class="barra">
                <a href="">
                    <img src="img/logo.jpeg" alt="logo de GYL tienda de arreglos">
                </a>
            </div>
        </div>
        <font size="7">
            <h1>
                <strong> GYL Gift Your Love </strong>
            </h1>
        </font>
    </header>


    <nav class="nav">
        <section class="nav_container">
            <ul class="nav_links">
                <li class="nav_item">
                    <a href="index.php" class="nav_link">Inicio</a>
                </li>
                <li class="nav_item">
                    <a href="nosotros.php" class="nav_link">Nosotros</a>
                </li>

                <li class="nav_item nav_item--show">
                    <a href="portafolio.php" class="nav_link">
                        Portafolio
                        <img src="assets/flecha.svg" class="list_arrow">
                    </a>


                    <ul class=" nav_nesting">
                         <li class="nav_inside">
                            <a href="ideas.php" class="nav_link nav_link--inside">
                                caja de sorpresas
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="idea1.php" class="nav_link nav_link--inside">
                                Caja de chucherias
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas2.php" class="nav_link nav_link--inside">
                                Rosa de la bella
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas3.php" class="nav_link nav_link--inside">
                                Cesta de chocolate
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas4.php" class="nav_link nav_link--inside">
                                Caja sorpresas
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas5.php" class="nav_link nav_link--inside">
                                Cesta de chocolate
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav_item">
                    <a href="blog.php" class="nav_link">Blog</a>
                </li>
            </ul>

            <div class="nav_celular">
                <img src="assets/menu.svg" class="nav_img">
            </div>
        </section>
    </nav>


    <aside class="aside">
        <img src="img/informacion.jpeg" alt="imagen de contacto">
    </aside>


    <section class="infor">
        <!--inicio de contatos-->
        <h1 class="fw-300 centrar-texto">

            Contacto

        </h1>
        <main class="contenedor seccion contenido-header">
            <article class="prim">
                <div class="texto-entrada">
                        <h4>
                            yusmarandrearr@gmail.com
                        </h4>
                    <a href="https://instagram.com/by.gylsc?igshid=YmMyMTA2M2Y=" target="_blank">
                        <h4>
                            link de instagram
                        </h4>
                    </a>
                    <!--enlase externo-->
                </div>
            </article>
            <article class="segund">
                <div>

                    <h2 class="fw-300 centrar-texto">

                        llena el formulario de contacto

                    </h2>

                    <form method="post">
                             <legend> Enviar su consulta </legend>

                            <label for="nombre">Ingrese su nombre</label>

                            <input type="text" name="nombre" id="nombre" placeholder="ingrese su nombre">

                            <label for="apellido">Ingrese su apellido</label>

                            <input type="text" name="apellido" id="apellido" placeholder="ingrese su apellido">

                            <label for="correo">Ingrese su correo</label>

                            <input type="text" name="correo" id="correo" placeholder="ingrese su correo">

                            <label for="telefono">Ingrese su telefono</label>

                            <input type="text" name="telefono" id="telefono" placeholder="ingrese su numero de telefono">

                            <label for="inquietud">Ingrese su inquietud</label>

                            <input type="text" name="inquietud" id="inquietud" placeholder="ingrese su inquietud">

                        <input type="submit" class="boton boton-morado" name="ENVIAR">

                    </form>
                    <?php
                         include("formularios.php"); 
                    ?>
                </div>
               
            </article>
            <a class="boton boton-morado d-block" href="mostrar.php">Ver mi inquietud</a>
            
        </main>
        <!--fin de contactos-->
    </section>

    <footer class="footer site-footer">
        <div class="contenedor contenedor-footer">
            <ul class="nav_links">
                <li class="nav_item">
                    <a href="nosotros.html" class="nav_link">Nosotros</a>
                </li>

                <li class="nav_item">
                    <a href="portafolio.html" class="nav_link">Portadolio</a>
                </li>
                <li class="nav_item">
                    <a href="blog.html" class="nav_link">Blog</a>
                </li>

                <li class="nav_item">
                    <a href="contacto.html" class="nav_link">Contacto</a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>
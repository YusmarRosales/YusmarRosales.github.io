<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
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
                            <a href="ideas.html" class="nav_link nav_link--inside">
                                caja de sorpresas
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="idea1.html" class="nav_link nav_link--inside">
                                Caja de chucherias
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas2.htm" class="nav_link nav_link--inside">
                                Rosa de la bella
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas3.html" class="nav_link nav_link--inside">
                                Cesta de chocolate
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas4.html" class="nav_link nav_link--inside">
                                Caja sorpresas
                            </a>
                        </li>

                        <li class="nav_inside">
                            <a href="ideas5.html" class="nav_link nav_link--inside">
                                Cesta de chocolate
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav_item">
                    <a href="blog.php" class="nav_link">Blog</a>
                </li>

                <li class="nav_item">
                    <a href="contacto.php" class="nav_link">Contacto</a>
                </li>
            </ul>
            <div class="nav_celular">
                <img src="assets/menu.svg" class="nav_img">
            </div>
        </section>
    </nav>

    <aside class="aside">
        Clientes
        <img src="img/cliente1.jpeg" alt="imagen cliente">
        <div class="texto-entrada">
            <h3 class="subtitulo">
                San Valentin
            </h3>
        </div>
        <h4 class="ideas">
            excelente trabajo, me encanto el arreglo que
            nos hicieron para nuestra fiesta de San Valentin
        </h4>
        <p class="ideas">
            Entregado: <span>15/04/2021</span> a:<span> C. Ropero</span>
        </p>

        <img src="img/cliente2.jpeg" alt="imagen cliente">
        <div class="texto-entrada">
            <h3 class="subtitulo">
                Epoca decembrina
            </h3>
        </div>
        <h4 class="ideas">
            Me encanto como decoraron el arbol, para estas fechas tan
            especiales para todos nosotros
        </h4>
        <p class="ideas">
            Entregado: <span>03/11/2020</span> a:<span> P. Colmenares</span>
        </p>

        <img src="img/cliente3.jpeg" alt="imagen cliente">
        <div class="texto-entrada">
            <h3 class="subtitulo">
                Cuadro
            </h3>
        </div>
        <h4 class="ideas">
            El mejor regalo para mi mamá, lo ame muchas gracias
        </h4>
        <p class="ideas">
            Entregado: <span>25/04/2022</span> a:<span> E. Ramirez</span>
        </p>
    </aside>


    <section class="infor">
       
        <main class="contenedor seccion contenido-header">
           
            <article class="segund">
                <div>

                    <h2 class="fw-300 centrar-texto">

                        llena el formulario de tus datos

                    </h2>

                    <form method="post">
                             <label for="cedula">Ingrese su cedula</label>

                             <input type="text" name="cedula" id="cedula" placeholder="ingrese el numero de cedula de identidad">

                             <label for="Nombre">Ingrese su nombre</label>

                             <input type="text" name="Nombre" id="Nombre" placeholder="ingrese su nombre">

                             <label for="Apellido">Ingrese su apellido</label>

                             <input type="text" name="Apellido" id="Apellido" placeholder="ingrese su apellido">

                             <label for="Correo">Ingrese su correo</label>

                             <input type="text" name="Correo" id="Correo" placeholder="ingrese su correo">

                             <label for="telefono">Ingrese su celular</label>

                            <input type="text" name="telefono" id="telefono" placeholder="ingrese su numero de celular">


                             <input type="submit" class="boton boton-morado" name="ENVIAR">

                    </form>
                    <?php
                         include("dato.php"); 
                    ?>
                </div>
            </article>
            <a class="boton boton-morado d-block" href="direccion.php">Ingresa tu direccion</a>
        </main>

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
<?php

$page = "sobre mi";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--MENU NAV-->


    <link href="css/font_awesome/css/all.css" rel="stylesheet">
    <link href="css/font_awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>Sobre mi</title>
</head>

<body id="sobremi">
    <?php
    include_once("menu.php");
    ?>
    <section id="resumen">
        <div class="container resumen mt-4">
            <div class="row">
            <div class="col-sm-3 col-9 mx-5">
                    <img src="images/alejandra-garcia-romagoza-01.jpg" alt="Alejandra Garcia Romagoza" title="Alejandra Garcia Romagoza" class="img-fluid img-circle" alt="responsive image">
                </div><!--Considero queda mejor a la derecha, asi en la vista en pantallas mas pequeñas queda arriba. -->
                <div class="col-sm-7 col-12">
                    <h1>Sobre mi</h1>
                    <h3>Soy una entusiasta del diseño y la progamación , siempre lista para aprender nuevos
                        conocimientos y habilidades.</h3>
                    <a href="https://drive.google.com/open?id=10YxEKD4Uiy_xMNMtjqGTEtgZgm7cndDb" class="btn mt-4" target="_blank">Descargar CV</a>
                </div>
               
            </div>
    </section>
    <section id="grupoHabilidades" class="grupoHabilidades">
        <div class="container mt-4">
            <div class="row my-sm-4 my-3">
                <div class="col-sm-6 col-12 px-2 mt-4">
                    <div class="bg-white">
                        <div class="p-3"><i class="material-icons"><span class="habilidadesIconos">code</span></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>LENGUAJE DE PROGRAMACIÓN</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>PHP, Laravel, HTML, CSS, Bootstrap, Javascript, jQuery, React.js, MySQL/MariaDB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 mt-4">
                    <div class="bg-white">
                        <div class="p-3"><i class="material-icons"><span class="habilidadesIconos">laptop</span></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>SOFTWARE</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Git, Heidi SQL, Sublime Text, XAMPP, Word, Excel, Photoshop, Illustrator, Indesign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-sm-4 my-3">
                <div class="col-sm-6 col-12 px-2 my-1">
                    <div class="bg-white">
                        <div class="p-3"><i class="material-icons"><span class="habilidadesIconos">message</span></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>LENGUAJES</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>INGLES-Intermedio<br>ESPAÑOL-Nativo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-1">
                    <div class="bg-white">
                        <div class="p-3"><i class="material-icons"><span class="habilidadesIconos">extension</span></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>HOBBIES</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Leer<br>Escuchar musica</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experiencia">
        <div class="container-fluid">
            <div class="container" id="experiencia">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-3 col-12">
                        <h3>2019 – PRESENTE
                            Buenos aires-Argentina</h3>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Encargada</h3>
                        <div class="row">
                            <p>Arandanos Almacen Natural</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Tareas</h3>
                        <div class="row">
                            <p>Atender a los clientes<br>
                                Manejo de inventario<br>
                                Mantenimiento del local</p>
                                

                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="experiencia">
                <!--seguna experiencia laboral-->
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-3 col-12">
                        <h3>12/2017 –03/2018
                            Valencia-Venezuela</h3>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Televentas</h3>
                        <div class="row">
                            <p>Siterrenos</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Tareas</h3>
                        <div class="row">
                            <p>Contactar a los clientes<br>
                            Contactar a los clientess<br>
                            Llevar un registro de actividades y resultados semanal y mensual<br>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="experiencia">
                <!--tercera experiencia laboral-->
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-3 col-12">
                        <h3>2017-2018
                        Valencia-Venezuela</h3>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Diseñadora Gráfica</h3>
                        <div class="row">
                            <p>Freelance</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <h3>Tareas</h3>
                        <div class="row">
                            <p> Diseño de imagen corporativa<br>
                                Diseño de contenido para redes sociales<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once("footer.php");
    ?>

</body>

</html>
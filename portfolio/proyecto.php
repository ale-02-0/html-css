<?php

$page= "proyecto"; 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--MENU NAV-->
    <link href="css/font_awesome/css/all.css" rel="stylesheet">
    <link href="css/font_awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>proyecto</title>
</head>

<body>
    <?php
    include_once("menu.php");
    ?>
    <section id="proyectos" class="mt-4">
        <!--MT-4 SIRVE PARA BAJAR EL SECTION DEL HEADER-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Estos son algunos de los trabajos que he realizado:</h2>
                </div>
            </div>
            <div class="row my-sm-5 my-3">
                <!--REVISAR-->
                <div class="col-sm-6 col-12 ">
                    <div class="bg-white">
                        <img src="images/abmventas.png" alt="ABM ventas" class="img-fluid">
                        <div class="row p-3">
                            <div class="col-12">
                                <h3>ABM ventas</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-sm-6 col-12">
                                <p>Sistema de gestión de clientes, productos y ventas.
                                    Realizado en HTML, CSS, PHP, MVC, Bootrap, Js, Ajax, jQuery y MySQL de base de datos.
                                </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="#" class="btn" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6" text-right>
                                <a href="https://github.com/ale-02-0/sistema-abm/tree/master/abmclientes" target="_blank" class="link">Codigo fuente</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-12">
                    <div class="bg-white">
                        <img src="images/sistema-admin.png" alt="Sistema de gestión" class="img-fluid">
                        <div class="row p-3">
                            <div class="col-12">
                                <h3>Sistema de gestión</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-sm-6 col-12">
                                <p>Sistema de gestión de clientes, productos y ventas.
                                    Realizado en HTML, CSS, PHP, MVC, Bootrap, Js, Ajax, jQuery y MySQL de base de
                                    datos.</p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="#" class="btn" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6" text-right>
                                <a href="https://github.com/ale-02-0/sistema-abm/tree/master/abmventas" target="_blank" class="link">Codigo fuente</a>
                            </div>
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
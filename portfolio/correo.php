<?php

use PHPMailer\PHPMailer\PHPMailer;

$pg = "contacto";

?>
<!DOCTYPE html>
<html lang="es">

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
    <title>Correo</title>
</head>

<body id="correo">
    <?php
    include_once("menu.php");
    ?>
    <section class="correoBody">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h1>¡Gracias por enviarnos tu consulta!</h1>
                    <h2>Te responderemos a la brevedad.</h2>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>
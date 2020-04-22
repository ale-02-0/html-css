<?php 

$page = "home"; 

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
    <link rel="stylesheet" href="css/estilos.css"type="text/css">
    <title>Home</title>
</head>

<body id="index">
    <?php
    include_once("menu.php");
    ?>
    <section class="indexBody mt-4">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <span>Hola!</span>
                    <h1>Soy Alejandra García</h1>
                    <h2>diseñadora gráfica<br>
                    & desarrolladora fullstack</h2>
                    <a href="proyecto.php" class="btn mt-4">¡Mirá mi trabajo!</a>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>
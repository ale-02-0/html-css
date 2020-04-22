<?php

$page = "contacto";

include_once "PHPMailer/src/PHPMailer.php";
include_once "PHPMailer/src/SMTP.php";

$msg= "";

function guardarCorreo($correo){
    $archivo=fopen("mails.txt","w+");
    fwrite($archivo,$correo."\n");
    fclose($archivo);
}


if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtEmail"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];
    guardarCorreo ($correo);
        
    
   // if ($nombre != "" && $correo != "")COLOCAR COMO ALERTA QUIZAS {
     //   echo "$nombre quiere contactarse."; }

    /*CUANDO TENGA HOSTING SUPLANTAR LOS DATOS */
    $mail = new //PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.nelsontarche.com.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
    $mail->Username = "info@nelsontarche.com.ar"; // Correo completo a utilizar
    $mail->Password = "aqui va la clave de tu correo";
    $mail->Port = 25;
    $mail->From = "info@nelsontarche.com.ar"; // Desde donde enviamos (Para mostrar)
    $mail->FromName = "Alejandra García Romagoza";
    $mail->IsHTML(true);

    //Destinatario
    $mail->addAddress($correo);
    $mail->addBCC("agarciaromagoza@gmail.com");
    $mail->Subject = "Contacto página web";
    $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
    if ($mail->send()) {
        $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    }
    //$exito = $mail->Send();
    $mail->ClearAllRecipients(); //Borra los destinatarios

    //Nosotros
    $mail->addAddress("agarciaromagoza@gmail.com");
    $mail->Subject = "Recibiste un mensaje desde tu página web";
    $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
    //$exito = $mail->Send();

    if ($mail->Send()) {
        header("Location:correo.php");
    } else {
        $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    }
}

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
    <title>Contacto</title>
</head>

<body>
    <?php
    include_once("menu.php");
    ?>
    <section id="contacto" class="mt-4">
        
        <div class="container">
            <div class="col-12">
                <h1>¡Trabajemos juntos!</h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <p>Para más detalles sobre mi
                        trabajo podés ver mi Linkedin,
                        descargar mi CV o mandarme
                        un <a link href="#formulario" class="link">mensaje.</a>
                        <p>
                </div>
            </div>
            <?php if(isset($msg) && $msg !=""): ?>
            <div class="row p-2">
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <?php echo $msg;?>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <form action="" method="POST" id="form" class="mt-4">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="NOMBRE" class="form-control"
                             value="<?php echo isset ($_POST["txtNombre"])? $_POST["txtNombre"]: "";?>" required>
                              <!--ISSET FUNCIONA COMO UNA CONDICION TERCIARIA RESUMIDA-->
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="EMAIL" class="form-control"
                           value="<?php echo isset ($_POST["txtEmail"])? $_POST["txtEmail"]: "";?>"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="txtAsunto" id="txtAsunto" placeholder="ASUNTO" class="form-control"
                           value="<?php echo isset ($_POST["txtAsunto"])? $_POST["txtAsunto"]: "";?>"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea  placeholder="MENSAJE" name="txtMensaje" id="txtMensaje" rows="7" class="form-control" required
                        value="<?php echo isset ($_POST["txtMensaje"])? $_POST["txtMensaje"]: "";?>"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <div class="btnEnviar">
                            <input type="submit" value="ENVIAR" name="btnEnviar" class="btn">

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>
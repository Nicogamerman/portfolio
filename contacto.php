<?php
  
$pg = "contacto";
?>

<?php
    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMensaje"];

        // Varios destinatarios
        $destinatario = "gamermanico@gmail.com";
        $titulo = 'Recibiste un mensaje desde tu Web';

        // mensaje
        $cuerpo = "
        Nombre: $nombre <br>
        Correo: $correo <br>
        Telefono: $telefono <br>
        Mensaje: $mensaje
        ";

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: gamermanico@gmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@gamermanico.com.ar' . "\r\n";

        // Enviarlo

        mail($destinatario,$cuerpo, $cabeceras);

        header("Location: confirmacion-envio.php");
        
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contacto</title>
</head>
<body id="contacto">
    <?php include_once("header.php");?> <!-- incluyo el header a traves de esta linea, y puedo  modificar directamente de alla. -->
        <main class="container">
            <div class="row">
                <div class="col-12 pt-3 pb-5 ">
                    <h1>Contacto</h1>
                </div>
                <div class="row container-contacto animate__animated animate__slideInDown">
                    <div class="col-12 col-sm-6">
                    <P>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</P>
                    </div>
                    <div class="col-12 col-sm-6">
                        <form action="contacto.php" method="post"></form>
                        <div class="mb-3">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje"  placeholder="Escribe aquí tu mensaje" placeholder="form" class="form-control shadow textarea"></textarea>
                        </div>
                        <div class="mb-3">
                            <a href="confirmacion-envio.php">
                                <button type="submite" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4 btn-enviar">Enviar</button> 
                            </a>
                        </div>
                    </div>
                </div>          
            </div>   
        </main>    
    <footer class="container container-footer">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nicol%C3%A1s-gamerman-8117a2127/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor: <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                Contacto: <a href="">gamermanico@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=3512709882">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
    
</body>
</html>
    
















         
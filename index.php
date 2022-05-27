<?php
$pg = "index";
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
    <title>Inicio</title>
</head>

<body id="contacto">
    <?php include_once("header.php");?> <!-- incluyo el header a traves de esta linea, y puedo  modificar directamente de alla. -->
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete animate__animated animate__backInUp">
                <a href="proyectos.php"> <img src="images/cohete.svg" class="cohete"   ></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="home">
                    <p class="p-1">Bienvenido a mi sitio web.</p>
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="shadow btn btn-blanco">Conoce mis proyectos</a>
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
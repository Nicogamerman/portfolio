<?php
$pg = "proyectos";
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
    <title>Proyectos</title>
</head>
<body id="proyectos">
    <?php include_once("header.php");?> <!-- incluyo el header a traves de esta linea, y puedo  modificar directamente de alla. -->
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>            
            <div class="row">
                <div class="col-12 col-sm-6 ">
                    <P>Estos son algunos de los trabajos que he realizado:</P>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 p-3 col-md-6 col-lg-4">
                    <div class="proyecto  animate__animated animate__pulse">
                        <img src="images/abmclientes.png" alt="AMB Clientes" class="img-fluid">                                                   
                        <h2 class="p-3 d-block gradiente">Clientes</h2>                               
                        <p class="p-3 pb-3 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>  
                            <div class="row my-4">
                                <div class="col-6 ps-5">
                                    <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="" target="_blank" >Codigo fuente</a>
                                </div>                                
                            </div> 
                    </div>                
                </div>
                <div class="col-12 col-sm-6 p-3 col-md-6 col-lg-4 ">
                    <div class="proyecto  animate__animated animate__pulse">
                        <img src="images/abmventas.png" alt="AMB Clientes" class="img-fluid">                        
                        <h2 class="p-3 d-block gradiente">SISTEMA DE GESTION DE VENTAS</h2>     
                        <p class="p-3 pb-3 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>  
                            <div class="row my-4">
                                <div class="col-6 ps-5">
                                    <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="" target="_blank" >Codigo fuente</a>
                                </div>                                
                            </div> 
                    </div>                
                </div>
                <div class="col-12 col-sm-6 p-3 col-md-6 col-lg-4">
                    <div class="proyecto  animate__animated animate__pulse">
                        <img src="images/proyecto-integrador.png" alt="AMB Clientes" class="img-fluid">                        
                        <h2 class="p-3 d-block gradiente">PROYECTO INTEGRADOR</h2>     
                        <p class="p-3 pb-3 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines</p>  
                            <div class="row my-4">
                                <div class="col-6 ps-5">
                                    <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="" target="_blank" >Codigo fuente</a>
                                </div>                                
                            </div> 
                    </div>                
                </div>
            </div>
    </main>
    <footer class="container container-footer footer-proyectos">
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
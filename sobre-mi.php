<?php

$pg ="sobre-mi";

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
    <title>Sobre mi</title>
</head>
<body id="sobre-mi">
    <?php include_once("header.php");?> <!-- incluyo el header a traves de esta linea, y puedo  modificar directamente de alla. -->
        <main class="container">
            <section class="row">
                <div class="col-12 pt-3 pb-5">
                    <h1>Sobre mi</h1>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mt-4">
                        <P>Estudiante en tesis de arquitectura, dinámico, comprometido, con gran capacidad de
                        trabajo en grupos. Habilidad para proyectos de construcciones y remodelaciones en
                        general. Especialización en software de diseño 3D y 2D. Manejo avanzado de Autocad.
                        Nivel avanzado de ingles.</P>                    
                        <a class="py-1 px-3 px-sm-4 btn btn-rojo" href="contacto.php">Enviar mensaje</a>                        
                    </div>
                    <div class="col-12 col-sm-6 container-foto-perfil">
                        <img src="images/fotoperfil.png" alt="Nicolas Gamerman" title="Nicolas Gamerman" class="foto-perfil img-responsive">
                    </div>
                </div>          
            </section>
        </main>
            <section id="tecnologias" class="gradiente pb-5 animate__animated animate__backInLeft">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="my-sm-5 text-white">Habilidades Tecnologicas</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Autocad</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/autocad.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Photoshop</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/photoshop.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Illustrator</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/illustrator.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Revit</h3>
                                <img class="img-fluid d-block mx-auto" width="100"
                                    src="images/revit.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Coreldraw</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/coreldraw.jpg">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Lumion</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/lumion.png">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Aspire</h3>
                                <img class="img-fluid d-block mx-auto" width="200"
                                    src="images/aspire.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>SketchUp</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/sketchup.jpg">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>CSS</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/CSS.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>HTML5</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/html5.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>PHP</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/php.jpg">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>React.js</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="images/REACT.png">
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>  
            <section id="experiencia" class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4 ">
                        <h2><i class="fa-solid fa-briefcase"></i>Experiencia laboral</h2>
                    </div>
                    <div class="gradiente-blanco">
                        <div class="col-12">    
                            <div class="row">
                                <div class="col-2 p-5 my-auto d-none d-sm-block">
                                    <img src="images/cordoba placard.jpg" class="img-fluid baw" title="depcsuite">
                                </div>
                                <div class="col-12- col-sm-10 p-3">
                                    <h3>Diseño imagenes fotorrealistas</h3>
                                    <h4>Cordoba Placard</h4>
                                    <h5>2015-2016</h5>
                                    <p>Dibujo y renderizado de mobiliarios interiores</p>
                                </div>
                                <div class="col-2 p-5 my-auto d-none d-sm-block">
                                    <img src="images/ecoresto.jpg" class="img-fluid baw" title="depcsuite">
                                </div>
                                <div class="col-12- col-sm-10 p-3">
                                    <h3>Diseñador</h3>
                                    <h4>Eco resto</h4>
                                    <h5>2016-2017</h5>
                                    <p>Diseño de espacios de comida al paso con impronta sustentable. Representación foto
                                        realista de proyectos diseñados. Realización de animación arquitectónica.</p>
                                </div>
                                <div class="col-2 p-5 my-auto d-none d-sm-block">
                                    <img src="images/palletcordoba.jpg" class="img-fluid baw" title="depcsuite">
                                </div>
                                <div class="col-12- col-sm-10 p-3">
                                    <h3>Diseñador/Constructor</h3>
                                    <h4>Pallet Cordoba</h4>
                                    <h5>2016-2018</h5>
                                    <p>Diseño y fabricación de muebles y juegos de madera de pallet reciclada
                                        Sobre Pallet Cordoba</p>
                                </div>                               
                                
                                <div class="col-2 p-5 my-auto d-none d-sm-block">
                                    <img src="images/arquitecto.jpg" class="img-fluid baw" title="depcsuite">
                                </div>
                                <div class="col-12- col-sm-10 p-3">
                                    <h3>Dibujante Arquitectonico</h3>
                                    <h4>Estudio de arquitectura JVDB</h4>
                                    <h5>2018-2020</h5>
                                    <p>Representación arquitectónica foto realista. Relevamiento de obras. Participación en procesos de diseño.</p>
                                </div>
                                <div class="col-2 p-5 my-auto d-none d-sm-block">
                                    <img src="images/hankosellos.png" class="img-fluid baw" title="depcsuite">
                                </div>
                                <div class="col-12- col-sm-10 p-3">
                                    <h3>Dueño</h3>
                                    <h4>Hanko Sellos</h4>
                                    <h5>2018-2022</h5>
                                    <p>Diseño y fabricacion de cuños metalicos para marcado de diversos materiales.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
            </section> 
                <section id="estudios" class="container">
                            <div class="row">
                                <div class="col-12 pt-5 pb-4">
                                    <h2><i class="fa-solid fa-user-graduate"></i> Estudios</h2>
                                </div>
                            </div>
                            <div class="row shadow bg-white rounded p-1 gradiente-blanco">
                                <div class="col-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-2 py-3 my-auto d-none d-sm-block ">
                                            <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                        </div>
                                        <div class="col-12- col-sm-10 p-3">
                                            <h3>Arquitecto</h3>
                                            <h4>Facultad de Arquitectura urbanismo y diseño</h4>
                                            <h5>2010 – 2020</h5>
                                            <p>https://faud.unc.edu.ar/</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                                            <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                        </div>
                                        <div class="col-12- col-sm-10 p-3">
                                            <h3>Gestion de Pymes</h3>
                                            <h4>Facultad de ciencias economicas unc</h4>
                                            <h5>2019 – 2020</h5>
                                            <p>https://www.eco.unc.edu.ar/</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                                            <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                        </div>
                                        <div class="col-12- col-sm-10 p-3">
                                            <h3>Licenciado en Tecnología</h3>
                                            <h4>Escuela Argentina</h4>
                                            <h5>XXXX – XXXX</h5>
                                            <p>http://www.xxx.edu.ar/</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                                            <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                        </div>
                                        <div class="col-12- col-sm-10 p-3">
                                            <h3>Licenciado en Tecnología</h3>
                                            <h4>Escuela Argentina</h4>
                                            <h5>XXXX – XXXX</h5>
                                            <p>http://www.xxx.edu.ar/</p>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                </section>     
                <section id="cursos" class="container">
                        <div class="row">
                            <div class="col-12 pt-5 pb-4">
                                <h2><i class="fa-solid fa-user-graduate"></i> Cursos</h2>
                            </div>
                        </div>                       
                        <div id="gradiente-blanco" class="row shadow bg-white rounded p-1">
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                                        <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                    </div>
                                    <div class="col-12- col-sm-10 p-3">
                                        <h3>Licenciado en Tecnología</h3>
                                        <h4>Escuela Argentina</h4>
                                        <h5>XXXX – XXXX</h5>
                                        <p>http://www.xxx.edu.ar/</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                                        <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                    </div>
                                    <div class="col-12- col-sm-10 p-3">
                                        <h3>Licenciado en Tecnología</h3>
                                        <h4>Escuela Argentina</h4>
                                        <h5>XXXX – XXXX</h5>
                                        <p>http://www.xxx.edu.ar/</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                                        <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                    </div>
                                    <div class="col-12- col-sm-10 p-3">
                                        <h3>Licenciado en Tecnología</h3>
                                        <h4>Escuela Argentina</h4>
                                        <h5>XXXX – XXXX</h5>
                                        <p>http://www.xxx.edu.ar/</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-2 py-3 my-auto d-none d-sm-block">
                                        <img src="images/uni.png" class="img-fluid baw" title="xxx">
                                    </div>
                                    <div class="col-12- col-sm-10 p-3">
                                        <h3>Licenciado en Tecnología</h3>
                                        <h4>Escuela Argentina</h4>
                                        <h5>XXXX – XXXX</h5>
                                        <p>http://www.xxx.edu.ar/</p>
                                    </div>
                                </div>
                            </div> 
                        </div>  
                </section>                            
                <section id="idiomas">
                        <div class="container">
                            <div class="row py-5 mx-0">
                                <div class="col-sm-6 col-12 pb-3 pb-sm-2">
                                    <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                                        <div class="col-4 text-center card">
                                            <i class="icn fa-solid fa-language"></i>
                                        </div>
                                        <div class="col-8 p-5">
                                            <h2>IDIOMAS</h2>
                                            <ul>
                                                <li>Español</li>
                                                <li>Ingles</li>
                                                <li>Chino mandarin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 ">
                                    <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                                        <div class="col-4 text-center card">
                                            <i class="icn fa-solid fa-basketball"></i>
                                        </div>
                                        <div class="col-8 p-5">
                                            <h2>HOBBIES</h2>
                                            <ul>
                                                <li>Ciclismo</li>
                                                <li>Futbol</li>
                                                <li>Paddle</li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>               
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
    </html>
    
















         
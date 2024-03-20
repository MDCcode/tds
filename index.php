<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Servicios TDS- Inicio</title>
        <link rel="icon" type="image/png" href="../images/favicon.png">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
        

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-R876TTWDXH"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-R876TTWDXH');
		</script>
		<!-- Google tag fin -->
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

    <?php
        include 'header.php';
    ?>

        <!-- About Start -->

<!-- Carousel Start -->
<div class="container-fluid carousel px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Second slide"></li>                    
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/index_fumigacion2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Fumigación</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Leer más</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/index_limpieza_tanques_agua2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">                                
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Limpieza de Tanques de Agua</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Leer más</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/index_trampa_grasa2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">                                
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Limpieza de Trampa de Grasa</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Leer más</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/index_pozos2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">                                
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Succion de Pozos Sépticos</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Leer más</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/index_gestion_residuos2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">                                
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Gestion de Residuos</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Leer más</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
</div>
        <!-- Carousel End -->
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <div class="rotate-left bg-verde"></div>
                            <div class="rotate-right bg-verde"></div>
                            <img src="img/años_experiencia.jpg" class="img-fluid h-100" alt="img">
                            <div class="bg-white experiences">
                                <h1 class="display-3">14</h1>
                                <h6 class="fw-bold">Años de Experiencia</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <h1 class="display-5 mb-2">Brindando Servicios Integrales desde 2008</h1>
                            <p class="fs-5" style="text-align: justify;"></p>
                            <div class="row">
                                <div class="col-3 wow fadeInLeft" data-wow-delay=".6s">
                                    <div class="text-center">
                                        <div class="p-4 bg-verde rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-city fa-4x text-white"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Fabricas</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 wow fadeInLeft" data-wow-delay=".8s">
                                    <div class="text-center">
                                        <div class="p-4 bg-verde rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-school fa-4x text-white"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Oficinas</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 wow fadeInLeft" data-wow-delay="1s">
                                    <div class="text-center">
                                        <div class="p-4 bg-verde rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-warehouse fa-4x text-white"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Almacenes</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 wow fadeInLeft" data-wow-delay="1.2s">
                                    <div class="text-center">
                                        <div class="p-4 bg-verde rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-hospital fa-4x text-white"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Hospitales</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Nuestros Servicios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Somos especialistas en bridar Soluciones Integrales a Empresas </h1>
            </div>
    <div class="row gy-5 gx-4 justify-content-center">
        <div class="col-lg-5 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="position-relative bg-white rounded pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-bug fa-3x text-white"></i>
                </div>
                    <h4 class="mt-4 mb-3 wow fadeInRight" data-wow-delay="0.5s">SANEAMIENTO AMBIENTAL</h4>
                    <h5 class="text-black mb-0 wow fadeInRight" data-wow-delay="0.7s">-Fumigación</h5>
                    <h5 class="text-black mb-0 wow fadeInRight" data-wow-delay="0.8s">-Desratización</h5>
                    <h5 class="text-black mb-0 wow fadeInRight" data-wow-delay="0.8s">-Desinfección</h5>
            </div>
        </div>
    <div class="col-lg-5 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <div class="position-relative bg-white rounded pt-5 pb-4 px-4">
            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-recycle fa-3x text-white"></i>
                </div>
                    <h4 class="mt-4 mb-3 fadeInLeft" data-wow-delay="0.5s">GESTIÓN DE RESIDUOS SÓLIDOS</h4>
                    <h5 class="text-black mb-0 wow fadeInLeft" data-wow-delay="0.7s">-Residuos peligrosos y no peligrosos </h5>
                    <h5 class="text-black mb-0 wow fadeInLeft" data-wow-delay="0.8s">-Limpieza y Succión de Pozos Sépticos</h5>
                    <h5 class="text-black mb-0 wow fadeInLeft" data-wow-delay="0.9s">-Limpieza y Succión de Trampas de Grasa</h5>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <!--<div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Por qué Elegir CabCity:</div>-->
                    <h1 class="text-white mb-4">Por qué Elegir a Servicios TDS</h1>                   
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">300+</h2>
                                    <p class="text-white mb-0">Servicios Mensuales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">30+</h2>
                                    <p class="text-white mb-0">Operarios Profesionales a su servicio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">14</h2>
                                    <p class="text-white mb-0">Años de Experiencia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">95%</h2>
                                    <p class="text-white mb-0">Clientes Satisfechos con Nuestro Trabajo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <img class="img-fluid" src="img/camion_cisterna.png" alt="">
                </div>
            </div>
        </div>
    </div>

 <!-- Testiminial Start -->
<div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h1 class="display-5 w-50 mx-auto">Nuestros Clientes</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                    <div class="testimonial-item">
                        <div class="rounded mb-4 p-4">
                        <img src="img/clientes/realplaza.png" class="img-fluid py-2" alt="">        
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="rounded mb-4 p-4">
                        <img src="img/clientes/menorca.png" class="img-fluid py-2" alt="">        
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="rounded mb-4 p-4">
                        <img src="img/clientes/wigomotors.png" class="img-fluid py-2" alt="">        
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="rounded mb-4 p-4">
                        <img src="img/clientes/autoland.png" class="img-fluid py-2" alt="">        
                        </div>
                    </div>
                </div>
            </div>
</div>

        <!-- Testiminial End -->

<?php
        include 'footer.php';
?>
        

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>        


    </body>

</html>

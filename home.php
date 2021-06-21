<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mansion Sagrada | Royal Salud</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">
    

</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./logo.jpg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse "  id="navbarNav" >
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active" >
                            <a class="nav-link"  data-target=".navbar-collapse" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link"  data-target=".navbar-collapse"  href="#aboutus">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-target=".navbar-collapse"  href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-target=".navbar-collapse"  href="#planes">Planes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"   data-target=".navbar-collapse" href="#">Lineas de Atencion</a>
                        </li>
                        
                        <li class="nav-item">
                   
        <div class="page-content">Bienvenid@ <?php echo $username;?></div>
                 <div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
                        </li>

                    </ul>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script >
                        $(".navbar-nav li a").click(function(event) {
        $(".navbar-collapse").collapse('hide');
});
                    </script>
                </div>
                
            </nav>
        </div>
    </header>

    <!--  ======================= End Header  ============================== -->

    <!--  ======================= Start Main  ================================ -->
    <main class="site-main">
        <section class="about-area" >
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">A que grupos cubrimos funerales en mansión Sagrada</h1>
                            <p class="para">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                                recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/3819068.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO BASICO FAMILIAR:</h4>
                            <p class="para">Cotizante + cónyuge + hijos hasta los 25 años si son solteros
                                 + padres o suegros del cotizante. Los hijos discapacitados sin límite de edad.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/52917.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO SOLTEROS:  </h4>
                            <p class="para">Cotizante + padres + hermanos 
                                menores de 25 años si son solteros.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/4435926.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO MADRE O PADRE SOLTERO: </h4>
                            <p class="para">Cotizante + hijos menores de 25 años si son solteros
                                + padres del cotizante. Los hijos discapacitados sin límite de edad.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/2497441.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO LGBT: </h4>
                            <p class="para">Cotizante + pareja  
                                + padres o suegros + hijos menores de 25 años si son solteros.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/3865206.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO ADULTO MAYOR:</h4>
                            <p class="para">El cotizante sin límite de edad 
                                + cónyuge o cualquier familiar sin límite de edad. .</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/3754912.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">GRUPO LIBRE:</h4>
                            <p class="para">Cotizante 
                                + 3 personas con o sin parentesco demostrado 
                                (Con un máximo de 2 mayores de 70 años).</p>
                        </div>
                    </div>
                </div>
                <div id="servicios"></div>
            </div>
            
        </section>



        <!--  ======================== Brand Area ==============================  -->

        <section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/colmedica.JPG" alt="Brand-1 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/famisanar.JPG" alt="Brand-2 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/medimas.JPG" alt="Brand-3 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/nueva.JPG" alt="Brand-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/compensar.JPG" alt="Brand-5 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/coomeva.JPG" alt="Brand-6">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/sura.JPG" alt="Brand-7 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/saludtotal.JPG" alt="Brand-8 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/sanitas.JPG" alt="Brand-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                                <h2 class="p-3 years">10</h2>
                                <h2>
                                    <span>Años de</span>
                                    <span>Experiencia</span>
                                    <span>Cuidando de ti</span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">
                                <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                                <div class="call-now">
                                    <a href="#" class="text-uppercase h4 font-roboto">Llama Ahora!</a>
                                    <span class="font-roboto py-2">(+57)3125124361</span>
                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================== End Brand  ==============================  -->


        <!--  ======================== About Me Area ==============================  -->
        
        
        <!--  ======================== End About Me Area ==============================  -->
    </main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4 responsive">
                    <a href="#"><img src="./img/logo.JPG" style="height: auto; width:100%" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Siguenos</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2020 All rights reserved | Creado por:
                        <a href="#"><span style="color: var(--primary-color);">Gio</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>
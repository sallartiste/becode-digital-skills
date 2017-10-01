<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Becode | Digital Skills</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />

  <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!--styles main and frameworks -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
       <link rel="stylesheet" href="assets/css/bootstrap.css"  />

       <link rel="stylesheet" href="assets/css/styles.css"  />
       <link rel="stylesheet" href="assets/css/responsive.css"  />
</head>
<body data-target=".navbar-collapse">
    <main>
      <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
           <div class="container">
             <!-- Logo et menu accordion pour mobile -->
             <div class="menu-container js_nav-item">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="toggle-icon"></span>
               </button>

               <!--Becode Logo -->
               <div class="logo">
                 <a class="logo-wrap" href="#">
                   <img class="logo-img logo-img-main" src="assets/img/logo-header.png" alt="Becode Logo" />
                   <img class="logo-img logo-img-active" src="assets/img/logo-header-2.png" alt="Becode logo" />
                 </a>
               </div>
              </div>
               <!-- fin logo -->

               <!-- Nemu -->
               <div class="collapse navbar-collapse nav-collapse">
                 <div class="menu-container">
                   <ul class="nav navbar-nav navbar-nav-right">
                       <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">Home</a></li>
                       <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">Qui sommes-nous</a></li>
                       <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">Contact</a></li>
                       <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">Connexion</a></li>
                       <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#">S'inscrire</a></li>
                   </ul>
                 </div>
               </div><!-- Fin collapse -->
           </div>
        </nav>
      </header>
      <!-- ====== Fin header ====== -->

        <video id="video-background" autoplay loop muted poster="assets/img/bg-home.jpeg">
            <source src="assets/img/bg-video.mp4" type="video/mp4" />
        </video>

        <section class="main">
            <div class="content">
              <div class="container">
                <div class="content2">
                  <h1>Becode</h1>
                  <h3>Digital Skills</h3>
                  <p class="resume">
                    Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/>
                    enim minim estudiat veniam siad venumus dolore
                  </p>
                  <div class="bouton">
                    <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">
                      <i class="fa fa-angle-right fa-lg" aria-hidden="true"></i> Decouvrez nos formations</a>
                  </div>
                </div>
                <!-- sponsorts -->
                    <div class="content-lg container">
                        <!-- Swiper Clients -->
                        <div class="swiper-slider swiper-clients">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="assets/img/partenaires/telenet-logo.png" alt="Telenet Logo">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="assets/img/partenaires/orange-logo.png" alt="orange Logo">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="assets/img/partenaires/4wings-logo.png" alt="4 wings Logo">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                                </div>
                            </div>
                            <!-- End Swiper Wrapper -->
                        </div>
                        <!-- End Swiper Clients -->
                    </div>
                    <!-- fin sponsorts -->
              </div>
            </div>
        </section>



    </main>
  <!-- Javascript et ses modules -->
  <script src="assets/js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>

  <script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>

  <script src="assets/js/main.js" type="text/javascript"></script>

</body>
</html>

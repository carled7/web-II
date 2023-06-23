<?php require_once("./config.php")?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $nome_empresa?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/imagens/SVG/A - ícone claro.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.8.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a title="E-mail"
        href="mailto:<?php echo $email?>"><?php echo $email?></a>
        <i class="bi bi-phone-fill phone-icon"></i> <?php echo $cel?>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="./redireciona.php" target="_blank"
        class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="<?php echo $facebook_link?>" target="_blank"
        class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $instagram_link?>" target="_blank"
        class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">Green</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="./" class="logo me-auto w-25 h-25"><img src="assets/imagens/SVG/C - horizontal escuro.svg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active " href="./" title="Início">Início</a></li>
          <li><a class="nav-link scrollto" href="./quem-sou.php" title="Quem Sou">Quem Sou</a></li>
          <li><a class="nav-link scrollto" href="./servicos.php" title="Serviços">Serviços</a></li>
          <li><a class="nav-link scrollto " href="./contato.php" title="Contato">Contato</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="getstarted scrollto" href="./redireciona.php" target="_blank"
          title="Contate-nos pelo WhatsApp"><i class="bi bi-whatsapp">
          </i> &nbspWhatsApp</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
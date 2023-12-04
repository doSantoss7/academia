<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fitmas - Gym & Fitness HTML Template</title>
        <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
        <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
        <meta name="robots" content="INDEX,FOLLOW">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicons - Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('/img/favicons/favicon.png') }}">
        <link rel="manifest" href="{{ asset ('/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset ('/img/favicons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!--==============================
          Google Fonts
        ============================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!--==============================
            All CSS File
        ============================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset ('"/css/bootstrap.min.css') }}">
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="{{ asset ('/css/fontawesome.min.css') }}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset ('/css/magnific-popup.min.css') }}">
        <!-- Slick Slider -->
        <link rel="stylesheet" href="{{ asset ('/css/slick.min.css') }}">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">

    </head>
    <body>
        <!--********************************
               Code Start From Here
        ******************************** -->




        <!--==============================
         Preloader
        ==============================-->
        <div class="preloader ">
            <div class="preloader-inner">
                <span class="loader"></span>
            </div>
        </div>
        <div class="popup-search-box">
            <button class="searchClose"><i class="fal fa-times"></i></button>
            <form action="#">
                <input type="text" placeholder="Search Here..">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="sidemenu-wrapper">
            <div class="sidemenu-content">
                <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
                <div class="widget footer-widget">
                    <div class="widget-about">
                        <div class="footer-logo">
                            <a href="index.html"><img src="" alt=""Viva-Bem></a>
                        </div>
                        <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade de</p>
                        <div class="social-btn style2">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget widget_nav_menu footer-widget">
                    <h3 class="widget_title">Links Rápidos</h3>
                    <ul class="menu">
                        <li><a href="about.html">Sobre nós</a></li>
                        <li><a href="project-details.html">Nossa missão</a></li>
                        <li><a href="team.html">Conheça as equipes</a></li>
                        <li><a href="project.html">Nossos projetos</a></li>
                        <li><a href="contact.html">Contate-nos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--==============================
        Mobile Menu
        ============================== -->
        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-area text-center">
                <button class="menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="index.html"><img src="assets/img/logo.svg" alt="Fitmas"></a>
                </div>
                <div class="mobile-menu">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Páginas</a>
                            <ul class="sub-menu">
                                <li><a href="team.html">Página da equipe</a></li>
                                <li><a href="team-2.html">Equipe Página 02</a></li>
                                <li><a href="team-details.html">Detalhes da equipe</a></li>
                                <li><a href="gallery.html">Página da Galeria</a></li>
                                <li><a href="gallery-2.html">Galeria Página 02</a></li>
                                <li><a href="project.html">Página do projeto</a></li>
                                <li><a href="project-details.html">Detalhes do Projeto</a></li>
                                <li><a href="shop.html">Página da loja</a></li>
                                <li><a href="shop-details.html">Detalhes da loja</a></li>
                                <li><a href="pricing.html">Página de preços</a></li>
                                <li><a href="error.html">Página de erro</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Projeto</a>
                            <ul class="sub-menu">
                                <li><a href="project.html">Projetos</a></li>
                                <li><a href="project-details.html">Detalhes do Projeto</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Serviço</a>
                            <ul class="sub-menu">
                                <li><a href="service.html">Serviço</a></li>
                                <li><a href="service-details.html">Detalhes do serviço</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-2.html">Blog 02</a></li>
                                <li><a href="blog-details.html">Detalhes do blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--==============================
        Header Area
        ==============================-->
        <header class="nav-header header-layout1">
            <div class="header-top d-lg-block d-none">
                <div class="container-fluid">
                    <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-links">
                                <ul>
                                    <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a></li>
                                    <li><i class="far fa-clock"></i>Seg - Sábado: 8h00-19h00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <div class="social-links">
                                            <span class="me-3">Visite nossas páginas sociais</span>
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <!-- Main Menu Area -->
                <div class="menu-area">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-start justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html">Home</a>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">Sobre</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Serviço</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">Serviço</a></li>
                                                <li><a href="service-details.html">Detalhes do serviço</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Páginas</a>
                                            <ul class="sub-menu">
                                                <li><a href="team.html">Página da equipe</a></li>
                                                <li><a href="team-2.html">Equipe Página 02</a></li>
                                                <li><a href="team-details.html">Detalhes da equipe</a></li>
                                                <li><a href="gallery.html">Página da Galeria</a></li>
                                                <li><a href="gallery-2.html">Galeria Página 02</a></li>
                                                <li><a href="project.html">Página do projeto</a></li>
                                                <li><a href="project-details.html">Detalhes do Projeto</a></li>
                                                <li><a href="shop.html">Página da loja</a></li>
                                                <li><a href="shop-details.html">Detalhes da loja</a></li>
                                                <li><a href="pricing.html">Página de preços</a></li>
                                                <li><a href="error.html">Página de erro</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-2.html">Blog 02</a></li>
                                                <li><a href="blog-details.html">Detalhes do blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contato</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="navbar-right d-inline-flex d-lg-none">
                                    <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-lg-block d-none">
                                <div class="navbar-right-desc">
                                    <i class="fas fa-phone-volume"></i><a href="tel:+5511913667672">+(55) 11 91366-7672</a>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <div class="header-button">
                                    <a href="contact.html" class="btn d-xl-block d-none">
                                        Obtenha uma cotação
                                    </a>
                                    <button type="button" class="btn btn-border sideMenuToggler">
                                        <i class="far fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--==============================
        Breadcumb
        ============================== -->
        <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
            <!-- bg animated image/ -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Sobre nós</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">HOME</a></li>
                                <li class="active">SOBRE NÓS</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--==============================
        About Area
        ==============================-->
        <div class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-2 text-lg-end">
                        <div class="about-thumb mb-5 mb-lg-0">
                            <img class="about-img-1" src="assets/img/normal/about_1-1.png" alt="img">
                            <img class="about-img-2 jump" src="assets/img/normal/about_1-2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="about-content-wrap">
                            <div class="title-area mb-0">
                                <span class="sub-title">Mais sobre nós</span>
                                <h2 class="sec-title">Desbloqueie todo o seu potencial,
                                    Alcance seu objetivo.</h2>
                                <p class="sec-text">Bem-vindo ao Fitmas. seu destino final para alcançar seus objetivos de condicionamento físico. Compreendemos a importância de levar um estilo de vida saudável e oferecemos instalações de fitness de alto nível para apoiá-lo em sua jornada de fitness.
                                </p>
                                <div class="about-tab-1">
                                    <div class="filter-menu-active">
                                        <button data-filter=".cat1" class="active" type="button">Nossa missão</button>
                                        <button data-filter=".cat2" type="button">Nossa visão</button>
                                        <button data-filter=".cat3" type="button">Nosso objetivo</button>
                                    </div>
                                    <div class="filter-active-cat1">
                                        <div class="filter-item cat1">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                        <div class="filter-item cat2">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                        <div class="filter-item cat3">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap mt-40">
                                <a href="about.html" class="btn">Marque uma consulta</a>
                                <div class="about-info-wrap">
                                    <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                    <div class="details">
                                        <p class="about-info-title">Preciso de ajuda?</p>
                                        <a class="about-info-link" href="tel:+25825692582">(+55) 11 913667672</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Service Area 02
        ==============================-->
        <div class="service-area-2 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Nossos serviços</span>
                    <h2 class="sec-title">Serviço que oferecemos</h2>
                </div>
            </div>
            <div class="container">
                <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Aula de ginástica</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Levantamento de força</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Musculação</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Aula de ginástica</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                                    curtos períodos de recuperação...</p>
                                <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Cta Area
        ==============================-->
        <section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="cta-wrap text-center text-lg-start">
                            <div class="title-area">
                                <span class="sub-title">Marque uma consulta</span>
                                <h2 class="sec-title text-white">Obtenha uma consultoria gratuita
                                    Agora mesmo aqui!</h2>
                            </div>
                            <div class="btn-wrap mt-40">
                                <a href="about.html" class="btn style2">Marque uma consulta</a>
                                <div class="about-info-wrap style3">
                                    <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                    <div class="details">
                                        <p class="about-info-title text-white">Preciso de ajuda?</p>
                                        <a class="about-info-link" href="tel:+25825692582">(+55) 11 913667672</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==============================
        Team Area
        ==============================-->
        <div class="team-area-1 space">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Nosso treinador</span>
                    <h2 class="sec-title">Conheça nossa incrível equipe</h2>
                </div>
                <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
            Footer Area
        ==============================-->
        <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
            <div class="container">
                <div class="contact-card">
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Localização da academia</p>
                            <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Endereço de email</p>
                            <a href="mailto:health@Fitmas.com" class="info-card_link">vivabem@gmail.com</a>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-card_icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Número de telefone</p>
                            <a href="tel:+18925382145" class="info-card_link">(+55) 11 913667672</a>
                        </div>
                    </div>
                </div>
                <div class="widget-area">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-3">
                            <div class="widget footer-widget">
                                <div class="widget-about">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo-white.svg" alt="Fitmas"></a>
                                    </div>
                                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade de</p>
                                    <div class="social-btn">
                                        <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                        <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Links Rápidos</h3>
                                <ul class="menu">
                                    <li><a href="about.html">Sobre nós</a></li>
                                    <li><a href="project-details.html">Nossa missão</a></li>
                                    <li><a href="team.html">Conheça as equipes</a></li>
                                    <li><a href="project.html">Nossos projetos</a></li>
                                    <li><a href="contact.html">Contate-nos</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Galeria</h3>
                                <div class="sidebar-gallery">
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed1.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed2.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed3.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed4.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed5.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed6.png" alt="Gallery Image">
                                        <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Receba boletim informativo</h3>
                                <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>
                                <form class="newsletter-form">
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input class="form-control" type="email" placeholder="Email Address" required="">
                                    </div>
                                    <button type="submit" class="btn style2">SE INSCREVA</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Viva-Bem.</a> Todos os direitos reservados.</p></div>
                    </div>
                </div>
            </div>
        </footer>

        <!--********************************
                Code End  Here
        ******************************** -->

        <!-- Scroll To Top -->
        <div class="scroll-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
            </svg>
        </div>

        <!--==============================
        All Js File
        ============================== -->
        <!-- Jquery -->
        <script src="{{ asset ('/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <!-- Slick Slider -->
        <script src="{{ asset ('/js/slick.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset ('/js/bootstrap.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset ('/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Counter Up -->
        <script src="{{ asset ('/js/jquery.counterup.min.js') }}"></script>
        <!-- Range Slider -->
        <script src="{{ asset ('/js/jquery-ui.min.js') }}"></script>
        <!-- Isotope Filter -->
        <script src="{{ asset ('/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset ('/js/isotope.pkgd.min.js') }}"></script>

        <!-- Main Js File -->
        <script src="{{ asset ('/js/main.js') }}"></script>
    </body>

    </html>

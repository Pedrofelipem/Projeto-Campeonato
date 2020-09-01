<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Campeonato Brasileiro</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico.html" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>

        <!-- preloader begin -->
        <div class="preloader">
            <img src="{{url('assets/img/Campeonato.png')}}" alt="">
            <span>BRASILEIRÃO 2020</span>
        </div>
        <!-- preloader end -->
        
        <!-- header begin -->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                            <div class="right-area">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar" class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                                <div >
                                    <a href="{{route('home')}}">
                                        <img src="assets/img/logo-brasileirao-2048.png" alt="logo" height="80" >
                                    </a>
                                </div>
                                </div>
                                <div class="col-6 d-xl-none d-lg-none d-block">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="mainmenu">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{route('home')}}">Home</a> 
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('listagem.competidor')}}">Listagem</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('ranking.competidor')}}">Ranking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('cadastro.competidor')}}">Criar Competidor</a>
                                            </li>
                                        </ul>
                                    </div>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- breadcrumb begin -->
        <div class="breadcrumb-bettix standing-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="breadcrumb-content">
                            <h2>@yield('titulo')</h2>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <p>@yield('aba-titulo')</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        @yield('conteudo_principal')

        <!-- footer begin -->
        <div class="footer" id="contact">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-10">
                        <div class="about-widget">
                            <a href="{{route('home')}}">
                                <img src="assets/img/logo-brasileirao-2048.png" alt="logo" height="80" >
                            </a>
                            <p>Brasileirão oferece a você todas as melhores previsões online de todos os cantos do planeta com milhares de mercados de previsões online</p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="support">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{url('assets/img/svg/email.svg')}}" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Envie-nos</span>
                                            <span class="descr">home@gmail.com</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{url('assets/img/svg/phone-call.svg')}}" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Entrar em contato</span>
                                            <span class="descr">+88 015 00 00 00</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>LINKS ÚTEIS</h3>
                            <ul>
                                <li>
                                    <a href="#">JOGANDO</a>
                                </li>
                                <li>
                                    <a href="#">PROMOÇÕES</a>
                                </li>
                                <li>
                                    <a href="#">ESTÁTICA</a>
                                </li>
                                <li>
                                    <a href="#">RESULTADOS</a>
                                </li>
                                <li>
                                    <a href="#">PREVEJA AGORA</a>
                                </li>
                                <li>
                                    <a href="#">RESULTADOS DOS JOGOS</a>
                                </li>
                                <li>
                                    <a href="#">POSIÇÕES</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3">
                        <div class="useful-links">
                            <h3>Conecte-se conosco</h3>
                            <ul>
                                <li>
                                    <a href="#">SOBRE NÓS</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">DETALHES DO BLOG</a>
                                </li>
                                <li>
                                    <a href="#">SERVIÇO</a>
                                </li>
                                <li>
                                    <a href="#">CONTATE-NOS</a>
                                </li>
                                <li>
                                    <a href="#">VISÃO GERAL DA EQUIPE</a>
                                </li>
                                <li>
                                    <a href="#">CRONOGRAMA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>ESPORTE</h3>
                            <ul>
                                <li>
                                    <a href="#">FUTEBOL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="payment-method">
                                    <h6 class="payment-method-title">
                                        OS MÉTODOS DE PAGAMENTO SÃO ACEITAMOS 
                                    </h6>
                                    <div class="all-method">
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-1.png')}}" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-2.png')}}" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-3.png')}}" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-4.png')}}" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-5.png')}}" alt="">
                                        </div>
                                        
                                        <div class="single-method">
                                            <img src="{{url('assets/img/brand-5.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- notes begin -->
        <div class="notes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        Brasileiraõ previsão, publicado por autworks throgh envato marketplace. Você pode usar este modelo em qualquer tipo de previsão de esporte. como futebol. todos os direitos reservados por autworks © 2020.
                    </div>
                </div>
            </div>
        </div>
        <!-- notes end -->

        <!-- copyright footer begin -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            <a href="#">Peredion</a> © 2020. POLÍTICA DE PRIVACIDADE
                        </p>
                    </div>
                    <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright footer end -->
        
        <!-- jquery -->
        <!-- <script src="assets/js/jquery.js"></script> -->
        <script src="{{url('assets/js/jquery-3.4.1.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <!-- owl carousel -->
        <script src="{{url('assets/js/owl.carousel.js')}}"></script>
        <!-- magnific popup -->
        <script src="{{url('assets/js/jquery.magnific-popup.js')}}"></script>
        <!-- filterizr js -->
        <script src="{{url('assets/js/jquery.filterizr.min.js')}}"></script>
        <!-- wow js-->
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <!-- clock js -->
        <script src="{{url('assets/js/clock.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{url('assets/js/odometer.min.js')}}"></script>
        <script src="{{url('assets/js/oddometer-active.js')}}"></script>
        <!-- main -->
        <script src="{{url('assets/js/main.js')}}"></script>
    </body>
</html>
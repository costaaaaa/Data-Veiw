<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Data-View</title>
    <meta name="description" content="Home - Costamagna Andrea">
    <link rel="icon" href="./img/logo.ico">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/untitled-1.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
    <link rel="stylesheet" href="./css/index.css">

    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/intro.js@2.9.3/intro.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/intro.js@2.9.3/introjs.css" rel="stylesheet" />

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
    <script type="text/javascript" src="../assets/js/freelancer.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/home.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Data-View</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">
                            Strumenti
                        </a>
                    </li>


                    <?php session_start();
                    if (isset($_SESSION['username']) && $_SESSION['username'] != "") {

                        /* echo '<li class="nav-item mx-0 mx-lg-1" role="presentation" id="linkAccount">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./account.php">
                                    Account
                                </a>
                            </li>'; */
                        echo '<li class="nav-item mx-0 mx-lg-1" role="presentation" id="linkAccount">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg> Account
                                </a>
                            </li>';
                    } else {
                        echo '<li class="nav-item mx-0 mx-lg-1" role="presentation">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./login.html">
                                    Log-in
                                </a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1" role="presentation">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./signup.html">
                                    Sign-up
                                </a>
                            </li>';
                    } ?>


                    <!-- 'tour' della pagina-->
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="introJs().start()">START TOUR</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- section con logo, nome e 'descrizione'-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="./img/logo.ico">
            <h1>Data-View</h1>
            <hr class="star-light mx-auto">
            <h2 class="font-weight-light mb-0">Cerca, visualizza e analizza dati di azioni, ETF e crypo</h2>
        </div>
    </header>

    <!-- section centrale con i vari collegamenti -->
    <section id="portfolio" class="portfolio" data-intro="Strumenti finanziari disponibili su Data-View" data-step="1">
        <div class="container">
            <br />
            <h2 class="text-uppercase text-center text-secondary">Strumenti finanziari</h2>
            <hr class="star-dark mb-5 mx-auto">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="./home_azioni.php" id="linkAzioni">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div><br /><br /><br /><br />
                        <h1>Azioni<br /></h1><br /><br /><br />
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="./home_ETF.php" id="linkETF">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div><br /><br /><br /><br />
                        <h1>ETF<br /></h1><br /><br /><br />
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1" id="linkCrypto" data-toggle="modal" data-target="#myModal">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div><br /><br /><br /><br />
                        <h1>Crypto<br /></h1><br /><br /><br />
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Errore</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Pagina ancora in fase di creazione
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <br /><br /><br />

    <footer class="footer text-center">
        <div class="container">
            <div id="location">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p>Via chiari 48</p>
                <p>
                    Narzole (CN) 12068
                </p>
            </div>
            <div id="social" data-intro="Social networks of dev" data-step="2">
                <h4 class="text-uppercase">Around the Web</h4>
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://github.com/costaaaaa" target="_blank">
                    <i class="fa fa-github"></i>
                </a>
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/costamagna.andrea/" target="_blank">
                    <i class="fa fa-instagram fa-fw"></i>
                </a>
            </div>
            <br /><br />
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;Data-View 2022</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>




    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/freelancer.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bugliano Airport</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </body>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0">
                <a href="{{ route('hompage') }}">Bugliano Airport</a>
            </h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('hompage') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#">I nostri voli</a></li>
                    <li><a class="nav-link scrollto" href="#">I servizi aeroportuali</a></li>
                    <li><a class="nav-link scrollto" href="#">Contattaci</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- navbar -->
            <a href="#" class="book-a-table-btn scrollto d-none d-lg-flex">Accedi a MyAirport</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= I nostri voli ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Le nostre rotte</h2>
                <p>Scegli la tua destinazione, a tutto il resto pensiamo noi!</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>Partenze</span>
                        <div class="row">
                            <div class="col-3">
                                <h5>Città</h5>
                            </div>
                            <div class="col-2">
                                <h5>Orario</h5>
                            </div>
                            <div class="col-3">
                                <h5>Compagnia</h5>
                            </div>
                            <div class="col-2">
                                <h5>Gate</h5>
                            </div>
                            <div class="col-2">
                                <h5>Info</h5>
                            </div>
                        </div>
                        @foreach ($voli['departure'] as $volo)
                            <div class="row">
                                <div class="col-3">
                                    {{ $volo['city'] }}
                                </div>
                                <div class="col-2">
                                    {{ $volo['time'] }}
                                </div>
                                <div class="col-3">
                                    {{ $volo['company'] }}
                                </div>
                                <div class="col-2">
                                    {{ $volo['gate'] }}
                                </div>
                                <div class="col-2">
                                    <a href="{{ route('dettagliovolo', $volo['id']) }}">
                                        <i class="bi bi-info-circle"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>Arrivi</span>
                        <div class="row">
                            <div class="col-3">
                                <h5>Città</h5>
                            </div>
                            <div class="col-2">
                                <h5>Orario</h5>
                            </div>
                            <div class="col-3">
                                <h5>Compagnia</h5>
                            </div>
                            <div class="col-2">
                                <h5>Gate</h5>
                            </div>
                            <div class="col-2">
                                <h5>Info</h5>
                            </div>
                        </div>
                        @foreach ($voli['arrival'] as $volo)
                            <div class="row">
                                <div class="col-3">
                                    {{ $volo['city'] }}
                                </div>
                                <div class="col-2">
                                    {{ $volo['time'] }}
                                </div>
                                <div class="col-3">
                                    {{ $volo['company'] }}
                                </div>
                                <div class="col-2">
                                    {{ $volo['gate'] }}
                                </div>
                                <div class="col-2">
                                    <a href="{{ route('dettagliovolo', $volo['id']) }}">
                                        <i class="bi bi-info-circle"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mattia Cau e Alice Croce </span></strong>- Esercitazione Aulab- Corso
                Laravel
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>

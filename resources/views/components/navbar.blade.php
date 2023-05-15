    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0">
                <a>Bugliano Airport</a>
            </h1>

        
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName()== 'hompage') active @endif"  href="{{ route('hompage') }}">Home</a></li>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName()== 'voli') active @endif" href="{{ route('voli') }}">I nostri voli</a></li>
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


   

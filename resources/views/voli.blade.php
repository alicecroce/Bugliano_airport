<x-main>

<x-navbar/>

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

</x-main>

<section class="align-items-center d-flex flex-column justify-content-center text-center mb-5" id="info-section">
    <div class="align-items-center d-flex flex-column justify-content-center text-center col-10">
        <h1 class="display-5 fw-bold mb-5">Informații despre Conferința din acest an</h1>
        <ul class="d-flex gap-6 list-unstyled">
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#guest-section">
                    <i class="ph ph-users"></i>
                    <h6>INVITAȚI</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#tematic-section">
                    <i class="ph ph-book-open"></i>
                    <h6>TEMATICĂ</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#location-section">
                    <i class="ph ph-map-pin"></i>
                    <h6>LOCAȚIE</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#days-section">
                    <i class="ph ph-calendar-blank"></i>
                    <h6>DATĂ</h6>
                </a>
            </li>
        </ul>
    </div>

    <div class="col-10 info-sub-sections d-flex flex-column justify-content-center" id="guest-section">
        <div class="d-flex row px-0 px-md-5 justify-content-center justify-content-lg-between">
            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <img src="{{ Vite::asset('resources/images/radial-circle.svg') }}" alt="Radial Bg Image"
                class="position-absolute w-75 left-radialBg" />
            <div class="col-10 col-lg-5 mb-5">
                <div class="position-relative container-wrapper">
                    <div class="card position-absolute behind top-left w-100 h-100"></div>
                    <div class="card position-absolute behind bottom-right  w-25 h-75"></div>
                    <div class="card position-relative main-img w-100"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start">
                <div class="mb-3 accent-text">INVITAȚI</div>
                <div>
                    <h1 class="fw-bold mb-4">Invitați Speciali</h1>
                </div>
                <div>
                    <span class="paragraph-regular-20">La Conferința Europeană de Tineret și Familii ediția 2024, vom
                        avea ca invitați speciali pe pastorul Luigi Mițoi, pe care l-am
                        cunoscut deja în alte ediții și pe pastorul Nelu Filip, președintele Cultului Penticostal din
                        România.
                    </span>
                </div>
            </div>
        </div>

        <div class="d-flex row px-0 px-md-5 justify-content-center justify-content-lg-between" id="tematic-section">
            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <div class="col-10 col-lg-5 mb-5 order-1 order-sm-2">
                <div class="position-relative container-wrapper">
                    <div class="card position-absolute behind top-left w-100 h-100"></div>
                    <div class="card position-absolute behind bottom-right  w-25 h-75"></div>
                    <div class="card position-relative main-img theme-img w-100"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start order-2 order-lg-1 text-start text-lg-end mb-5">
                <div class="mb-3 accent-text">TEMATICĂ</div>
                <div>
                    <h1 class="fw-bold mb-4">tematic-section acestui an</h1>
                </div>
                <div><span class="paragraph-regular-20">tematic-section din acest an va fi IMPLICAREA. Vom avea
                        prezentări dedicate acestui subiect atât de actual și important pentru tineri. Ne dorim ca orice
                        tânăr, indiferent de vârstă, să fie implicat activ și pozitiv în lucrarea lui Dumnezeu din
                        biserica locală.<br><br>Vom avea și întâlniri de rugăciune în care tinerii să poată beneficia de
                        umplerea Duhului Sfânt pentru o deplină implicare în lucrarea de slujire a bisericii.
                    </span></div>
            </div>

        </div>

        <div class="d-flex row px-0 px-md-5 justify-content-center justify-content-lg-between" id="location-section">
            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <div class="col-10 col-lg-5 mb-5">
                <div class="position-relative container-wrapper">
                    <div class="card position-absolute behind top-left w-100 h-100"></div>
                    <div class="card position-absolute behind bottom-right w-25 h-75"></div>
                    <div class="card position-relative main-img location-img w-100"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start">
                <div class="mb-3 accent-text">LOCAȚIE</div>
                <div>
                    <h1 class="fw-bold mb-4">Lignano Sabbiadoro</h1>
                </div>
                <div>
                    <span class="paragraph-regular-20">La fel ca și anii trecuți, Conferința Europeană se va ține la
                        "BELLA
                        ITALIA EFA VILLAGE" în Lignano Sabbiadoro (UD), Italia.
                    </span>
                </div>
            </div>
        </div>

        <div class="d-flex row px-0 px-md-5 justify-content-center justify-content-lg-between" id="days-section">

            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <img src="{{ Vite::asset('resources/images/radial-circle.svg') }}" alt="Logo" class="position-absolute w-75 left-radialBg" />
            <div class="col-10 col-lg-5 mb-5 order-1 order-sm-2" >
                <div class="position-relative container-wrapper">
                    <div class="card position-absolute behind top-left w-100 h-100"></div>
                    <div class="card position-absolute behind bottom-right  w-25 h-75"></div>
                    <div
                        class="card position-relative main-img days-img w-100 text-white d-flex justify-content-between">
                        <h1 class="mt-2 mt-lg-4 counter-label">MAI LIPSESC</h1>
                        @php
                            $today = today();
                            $event = new DateTime('2024-11-01');
                            $days = $event->diff($today);
                            $days = $days->days;
                            if ($days < 0) {
                                $days = 0;
                            }
                        @endphp
                        <h1 class="display-1 fw-semibold counter-text">
                            {{ $days }}
                        </h1>
                        <h1 class="mb-2 mb-lg-4 counter-label">{{ strtoupper(__('Days')) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start order-2 order-sm-1 text-start text-lg-end mb-5">
                <div class="mb-3 accent-text">DATA</div>
                <div>
                    <h1 class="fw-bold mb-4">DATA CONFERINȚEI</h1>
                </div>
                <div><span class="paragraph-regular-20">Conferința Europeană se va ține în perioada 1-3 NOIEMBRIE 2024.
                        Vă așteptăm cu drag pentru a petrece momente memorabile
                        impreună!</span></div>
            </div>

        </div>

        <div class="d-flex row px-0 px-md-0 justify-content-center justify-content-lg-between">
            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <div
                class="container-fluid mb-5 order-2 d-flex gap-5 justify-content-center justify-content-lg-between align-items-center min-width">
                <div class="d-flex flex-column gap-5 mb-5 mb-sm-0 me-0 me-sm-4">
                    <a href="https://www.youtube.com/watch?v=ueX32thdfUc">
                        <div class="position-relative container-wrapper video-container">
                            <div
                                class="card position-relative main-img first-program-img text-white d-flex justify-content-between">

                                <div class="h-100 d-flex flex-column justify-content-between p-3">
                                    <span class="text-end text-terciary year-text">2019</span>
                                    <span class="text-start program-text fw-bold">Problematica
                                        dependențelor</span>
                                </div>
                                <div class="card position-absolute behind bottom-right"></div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=xHpVgsa9NVw">
                        <div class="position-relative container-wrapper video-container">
                            <div class="card position-relative main-img second-program-img text-white d-flex justify-content-between"
                                style="left:20px;">
                                <div class="h-100 d-flex flex-column justify-content-between p-3">
                                    <span class="text-end text-terciary year-text">2021</span>
                                    <span class="text-start program-text fw-bold">Biserica și tehnologia</span>
                                </div>
                                <div class="card position-absolute behind bottom-left"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="https://www.youtube.com/watch?v=mLAow7uBkEw">
                    <div class="position-relative container-wrapper video-container">
                        <div
                            class="card position-relative main-img third-program-img text-white d-flex justify-content-between">
                            <div class="h-100 d-flex flex-column justify-content-between p-3">
                                <span class="text-end text-terciary year-text">2023</span>
                                <span class="text-start program-text fw-bold">Crizele Vieții</span>
                            </div>
                            <div class="card position-absolute behind top-left"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 text-start order-1 mb-5">
                <div class="mb-3 accent-text">EDIȚII ANTERIOARE</div>
                <div>
                    <h1 class="fw-bold display-6 mb-4">Află Despre Conferințele anterioare</h1>
                </div>
                <div><span class="paragraph-regular-20">Ești interesat să vezi cum s-au desfășurat edițiile anterioare?
                        Accesează imaginile pentru a viziona <span class="text-decoration-underline">videourile
                            live</span> din ani
                        anteriori.</span></div>
            </div>
        </div>
    </div>
</section>

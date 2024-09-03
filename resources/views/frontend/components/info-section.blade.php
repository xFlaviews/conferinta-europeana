<section class="align-items-center d-flex flex-column justify-content-center text-center mb-5" id="info-section">
    <div class="align-items-center d-flex flex-column justify-content-center text-center col-10">
        <h1 class="display-5 fw-bold mb-5">{{ __('info_about_this_year') }}</h1>
        <ul class="d-flex gap-6 list-unstyled uppercase">
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#guest-section">
                    <i class="ph ph-users"></i>
                    <h6>{{ __('Guests') }}</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#tematic-section">
                    <i class="ph ph-book-open"></i>
                    <h6>{{ __('Topic') }}</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#location-section">
                    <i class="ph ph-map-pin"></i>
                    <h6>{{ __('LocationLandingPage') }}</h6>
                </a>
            </li>
            <li class="mid-menu-item">
                <a class="nav-link link-light d-flex gap-2" href="#days-section">
                    <i class="ph ph-calendar-blank"></i>
                    <h6>{{ __('Date') }}</h6>
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
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators ">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>

                        </div>
                        <div class="carousel-inner rounded-5">
                            <div class="carousel-item active carousel-img">
                                <img src="{{ Vite::asset('resources/images/luigi.png') }}" class="d-block w-100 rounded"
                                    alt="Image 1">
                            </div>
                            <div class="carousel-item carousel-img">
                                <img src="{{ Vite::asset('resources/images/nelu.png') }}" class="d-block w-100 rounded"
                                    alt="Image 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('Previous') }}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('Next') }}</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start">
                <div class="mb-3 accent-text">{{ __('Guests') }}</div>
                <div>
                    <h1 class="fw-bold mb-4">{{ __('Special Guests') }}</h1>
                </div>
                <div>
                    <span class="paragraph-regular-20">{{ __('Special_Guests_Paragraph') }}
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
                <div class="mb-3 accent-text">{{ __('Topic') }}</div>
                <div>
                    <h1 class="fw-bold mb-4">{{ __('This_year_topic') }}</h1>
                </div>
                <div><span class="paragraph-regular-20">{{ __('Theme_paragraph') }}
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
                <div class="mb-3 accent-text">{{ __('LocationLandingPage') }}</div>
                <div>
                    <h1 class="fw-bold mb-4">{{ __('Lignano Sabbiadoro') }}</h1>
                </div>
                <div>
                    <span class="paragraph-regular-20">{{ __('Location_paragraph') }}
                    </span>
                </div>
            </div>
        </div>

        <div class="d-flex row px-0 px-md-5 justify-content-center justify-content-lg-between" id="days-section">

            <div class="col-12 my-4">
                <hr class="mb-5 w-100" />
            </div>
            <img src="{{ Vite::asset('resources/images/radial-circle.svg') }}" alt="Logo"
                class="position-absolute w-75 left-radialBg" />
            <div class="col-10 col-lg-5 mb-5 order-1 order-sm-2">
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
                        <h1 class="mb-2 mb-lg-4 counter-label uppercase">{{ __('Days') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-start order-2 order-sm-1 text-start text-lg-end mb-5">
                <div class="mb-3 accent-text">{{ __('Date') }}</div>
                <div>
                    <h1 class="fw-bold mb-4">{{ __('Conference_Date') }}</h1>
                </div>
                <div><span class="paragraph-regular-20">{{ __('Conference_date_paragraph') }}</span></div>
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
                                    <span class="text-start program-text fw-bold">{{ __('dependencies_issues') }}</span>
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
                                    <span class="text-start program-text fw-bold">{{ __('Church_and_technology') }}</span>
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
                                <span class="text-start program-text fw-bold">{{ __('Life_crisis') }}</span>
                            </div>
                            <div class="card position-absolute behind top-left"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 text-start order-1 mb-5">
                <div class="mb-3 accent-text">{{ __('Previous_editions') }}</div>
                <div>
                    <h1 class="fw-bold display-6 mb-4">{{ __('Discover_previous_editions') }}</h1>
                </div>
                <div><span class="paragraph-regular-20">{!! __('Previous_editions_paragraph') !!}</span></div>
            </div>
        </div>
    </div>
</section>

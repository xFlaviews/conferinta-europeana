<header>
    <nav class="autohide navbar navbar-expand-lg pt-0 navbar-background initial-top menu-opened">
        <div class="container-fluid">
            <div class="d-row d-flex justify-content-between">
                <a class="navbar-brand d-flex active" href="#newsletter-section">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"
                        class="d-inline-block align-text-top logo">
                    <div class="ms-2 my-auto text-white navbar-logo-text">
                        <p class="mb-0">CONFERINȚA</p>
                        <p class="mb-0">EUROPEANĂ</p>
                    </div>
                </a>
                <button class="navbar-toggler nvabar-button-no-shadow" type="button" data-bs-toggle="collapse"
                    data-bs-target="#main_nav" aria-expanded="true">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
            </div>
            <!-- Divider -->
            <div class="divider"></div>

            <div class="navbar-collapse collapse show" id="main_nav">
                <ul class="navbar-nav ms-auto d-flex gap-4">
                    <!-- Navigation items -->
                    <li class="nav-item dropdown" id="informatii">
                        <a class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph ph-book-open"></i>Informatii<i class="ph ph-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-bg">
                            <li><a class="dropdown-item" href="#invitati">INVITAȚI</a></li>
                            <li><a class="dropdown-item" href="#tematica">TEMATICĂ</a></li>
                            <li><a class="dropdown-item" href="#locatie">LOCAȚIE</a></li>
                            <li><a class="dropdown-item" href="#zilele">DATĂ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="contacte">
                        <a class="nav-link link-light d-flex gap-2" href="#contacts-section">
                            <i class="ph ph-phone"></i>Contacte
                        </a>
                    </li>
                    <li class="nav-item" id="faq">
                        <a class="nav-link link-light d-flex gap-2" href="#contacts-section">
                            <i class="ph ph-phone"></i>Faq
                        </a>
                    </li>
                    <li class="nav-item dropdown" id="language">
                        <button class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no "
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph ph-translate"></i>{{ __(app()->getLocale()) }}<i class="ph ph-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-bg">
                            @foreach (getAllLocales() as $item)
                                @if(app()->getLocale() != $item)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('lang',['lang' => $item]) }}">
                                            {{ __($item) }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    <!-- Additional mobile elements -->
                    <div class="mt-5 mb-3 d-row d-flex justify-content-between d-lg-none">
                        <li class="nav-item dropdown px-4 py-2 navbar-element-container-color">
                            <button class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no align-items-center locale"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ph ph-translate"></i>
                                <img
                                    src="{{ Vite::asset('resources/images/backend/flags/'.app()->getLocale().'.jpg') }}"
                                    alt="locale image {{ app()->getLocale() }}"
                                    class="locale image navbar"
                                > {{ __(app()->getLocale()) }}
                                <i class="ph ph-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach (getAllLocales() as $item)
                                    @if(app()->getLocale() != $item)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('lang',['lang' => $item]) }}">
                                                {{ __($item) }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <div class="d-flex align-items-center px-4 py-2 navbar-element-container-color">Contacte</div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

</header>

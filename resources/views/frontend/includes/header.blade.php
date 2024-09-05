<header>
    <nav class="autohide navbar navbar-expand-lg pt-0 navbar-background initial-top">
        <div class="container-fluid">
            <div class="d-row d-flex justify-content-between">
                <a 
                    class="navbar-brand d-flex active" 
                    @if (request()->routeIs('frontend.index'))
                        href="#newsletter-section"
                    @else
                        href="{{ route('frontend.index') }}#newsletter-section"
                    @endif
                    href="#newsletter-section"
                >
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"
                        class="d-inline-block align-text-top logo">
                    <div class="ms-2 my-auto text-white navbar-logo-text uppercase">
                        <p class="mb-0">
                            @if (app()->getLocale() != 'en')
                                {{ __('Conference') }}
                            @else
                                {{ __('European') }}
                            @endif
                        </p>
                        <p class="mb-0">
                            @if (app()->getLocale() == 'en')
                                {{ __('Conference') }}
                            @else
                                {{ __('European') }}
                            @endif
                        </p>
                    </div>
                </a>
                <button class="navbar-toggler nvabar-button-no-shadow collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false"
                    id="navbar-toggler-button">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
            </div>
            <!-- Divider -->
            <div class="divider"></div>

            <div class="navbar-collapse collapse" id="main_nav">
                <ul class="navbar-nav ms-auto d-flex gap-4">
                    <!-- Navigation items -->
                    <li class="nav-item dropdown" id="info">
                        <button 
                            class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no bottom-border "
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        >
                            <i class="ph ph-book-open"></i>
                            {{ __('Info') }}
                            <i class="ph ph-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-bg dropdown-mobile">
                            <li>
                                <a 
                                    class="dropdown-item align-text-top d-flex justify-content-start align-items-start bottom_border"
                                    @if (request()->routeIs('frontend.index'))
                                        href="#guest-section"
                                    @else
                                        href="{{ route('frontend.index') }}#guest-section"
                                    @endif
                                >
                                    <img
                                        src="{{ Vite::asset('resources/images/double-chevron.svg') }}"
                                        alt="Icon double chevron"
                                        class="me-2 align-text-top mobile-only"
                                    >
                                    {{ __('Guests') }}
                                </a>
                            </li>
                            <li>
                                <a 
                                    class="dropdown-item align-text-top d-flex justify-content-start align-items-start bottom_border"
                                    @if (request()->routeIs('frontend.index'))
                                        href="#topic-section"
                                    @else
                                        href="{{ route('frontend.index') }}#topic-section"
                                    @endif
                                    
                                >
                                    <img
                                        src="{{ Vite::asset('resources/images/double-chevron.svg') }}"
                                        alt="Icon double chevron"
                                        class="me-2 align-text-top mobile-only"
                                    >
                                    {{ __('Topic') }}
                                </a>
                            </li>
                            <li>
                                <a 
                                    class="dropdown-item align-text-top d-flex justify-content-start align-items-start bottom_border"
                                    @if (request()->routeIs('frontend.index'))
                                        href="#location-section"
                                    @else
                                        href="{{ route('frontend.index') }}#location-section"
                                    @endif
                                >
                                    <img
                                        src="{{ Vite::asset('resources/images/double-chevron.svg') }}"
                                        alt="Icon double chevron"
                                        class="me-2 align-text-top mobile-only"
                                    >
                                    {{ __('LocationLandingPage') }}
                                </a>
                            </li>
                            <li>
                                <a 
                                    class="dropdown-item"
                                    @if (request()->routeIs('frontend.index'))
                                        href="#days-section"
                                    @else
                                        href="{{ route('frontend.index') }}#days-section"
                                    @endif
                                >
                                    <img 
                                        src="{{ Vite::asset('resources/images/double-chevron.svg') }}"
                                        alt="Icon double chevron"
                                        class="me-2 align-text-top mobile-only"
                                    >
                                    {{ __('Date') }}
                                </a>
                            </li>
                            <li>
                                <a 
                                    class="dropdown-item"
                                    @if (request()->routeIs('frontend.index'))
                                        href="#prices-section"
                                    @else
                                        href="{{ route('frontend.index') }}#prices-section"
                                    @endif
                                    
                                >
                                    <img
                                        src="{{ Vite::asset('resources/images/double-chevron.svg') }}"
                                        alt="Logo"
                                        class="me-2 align-text-top mobile-only"
                                    >
                                    {{ __('Prices') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" id="contacts">
                        <a 
                            class="nav-link link-light d-flex gap-2"
                            @if (request()->routeIs('frontend.index'))
                                href="#contacts-section"
                            @else
                                href="{{ route('frontend.index') }}#contacts-section"
                            @endif
                        >
                            <i class="ph ph-phone"></i>
                            {{ __('Contacts') }}
                        </a>
                    </li>
                    <li class="nav-item" id="faq">
                        <a 
                            class="nav-link link-light d-flex gap-2"
                            @if (request()->routeIs('frontend.index'))
                                href="#faq-section"
                            @else
                                href="{{ route('frontend.index') }}#faq-section"
                            @endif
                        >
                            <i class="ph ph-phone"></i>{{ __('Faq') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown fit-height " id="language">
                        <button
                            class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no rounded-border"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph ph-translate"></i>{{ __(app()->getLocale()) }}<i class="ph ph-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-bg">
                            @foreach (getAllLocales() as $item)
                                @if (app()->getLocale() != $item)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('lang', ['lang' => $item]) }}">
                                            {{ __($item) }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <div class="d-flex justify-content-between mobile-only">
                        <li class="locale-bubble">
                            <button
                                class="nav-link d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no align-items-center locale "
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ph ph-translate"></i>
                                <img src="{{ Vite::asset('resources/images/backend/flags/' . app()->getLocale() . '.jpg') }}"
                                    alt="locale image {{ app()->getLocale() }}" class="locale image navbar">
                                {{ strtoupper(substr(__(app()->getLocale()), 0, 2)) }}
                                <i class="ph ph-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu fit-content">
                                @foreach (getAllLocales() as $item)
                                    @if (app()->getLocale() != $item)
                                        <li class="d-flex align-items-center">
                                            <img src="{{ Vite::asset('resources/images/backend/flags/' . $item . '.jpg') }}"
                                                alt="locale image {{ app()->getLocale() }}"
                                                class="locale image navbar me-2">
                                            <a class="dropdown-item" href="{{ route('lang', ['lang' => $item]) }}">
                                                {{ substr(__($item), 0, 2) }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <a 
                            class="d-flex align-items-center px-4 py-2 navbar-element-container-color fit-height text-white"
                            @if (request()->routeIs('frontend.index'))
                                href="#contacts-section"
                            @else
                                href="{{ route('frontend.index') }}#contacts-section"
                            @endif
                        >
                            {{ __('Contacts') }}
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>

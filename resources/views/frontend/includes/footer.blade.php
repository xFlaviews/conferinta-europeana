<footer class="c-footer py-5 h-auto vh-50 " id="contacts-section">
    <div class="d-flex footer-content justify-content-between row mb-5 gap-3">
        <div class="d-flex h-100 logo-section col-auto mb-4 ">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"
                class="d-inline-block align-text-top logo" />
            <div class="ms-2 navbar-logo-text d-flex justify-content-center flex-column uppercase">
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
        </div>
        <div class="footer-right-section d-flex gap-3 col-auto row" id="contacts-section">
            <div class="col-auto">
                <div class="mb-3">
                    <h5>{{ __('Contacts') }}</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="mailto:support@conferintaeuropeana.it"
                                class="nav-link p-0 text-body-secondary d-flex"><i class="ph ph-envelope me-2"></i>support@conferintaeuropeana.it</a></li>
                        <li class="nav-item mb-2"><a href="tel:+393806397797"
                                class="nav-link p-0 text-body-secondary d-flex"><i class="ph ph-phone me-2"></i>3806397797</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto">
                <div>
                    <h5>{{ __('social') }}</h5>
                    <ul class="nav flex-row gap-2">
                        <li class="nav-item mb-2">
                            <a href="https://www.instagram.com/conferinta.europeana/" class="nav-link p-0 text-body-secondary">
                                <i class="ph ph-instagram-logo"></i>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="https://www.facebook.com/profile.php?id=61557319907849" class="nav-link p-0 text-body-secondary">
                                <i class="ph ph-facebook-logo"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between justify-content-center">
        <div class="col-auto order-2 order-sm-1 d-flex justify-content-sm-between justify-content-center">
            <span class="text-regular-16 gray-text">{{ __('copyright') }}</span>
        </div>
        <div class="col-auto order-1 order-sm-2">
            <div class="d-flex gap-3 justify-content-sm-between justify-content-center">
                <a class="text-regular-16 gray-text" href="{{ route('cookie') }}">{{ __('Terms&Conditions') }}</a>
                <a class="text-regular-16 gray-text" href="{{ route('privacy') }}">{{ __('PrivacyPolicy') }}</a>
            </div>
        </div>
    </div>
</footer>

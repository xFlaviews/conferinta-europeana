<footer class="c-footer py-5 h-auto vh-50 ">
    <div class="d-flex footer-content justify-content-between row mb-5 gap-3">
        <div class="d-flex h-100 logo-section col-auto mb-4 ">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"
                class="d-inline-block align-text-top logo" />
            <div class="ms-2 navbar-logo-text d-flex justify-content-center flex-column">
              <p class="mb-0">
                            @if (app()->getLocale() != 'en')
                                 {{ strtoupper(__('Conference')) }}
                            @else
                                {{ strtoupper(__('European')) }}
                            @endif
                        </p>
                        <p class="mb-0">
                            @if (app()->getLocale() == 'en')
                                {{ strtoupper(__('Conference')) }}
                            @else
                                {{ strtoupper(__('European')) }}
                            @endif
                        </p>
            </div>
        </div>
        <div class="footer-right-section d-flex gap-3 col-auto row">
            <div class="col-auto">
                <div class="mb-3">
                    <h5>{{ __('Contacts') }}</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">support@conferintaeuropeana.it</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto">
                <div>
                    <h5>{{ __('social') }}</h5>
                    <ul class="nav flex-row gap-2">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                                    class="ph ph-instagram-logo"></i></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                                    class="ph ph-facebook-logo"></i></a></li>
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
                <span class="text-regular-16 gray-text">{{ __('Terms&Conditions') }}</span>
                <span class="text-regular-16 gray-text">{{ __('PrivacyPolicy') }}</span>
            </div>
        </div>
    </div>
</footer>

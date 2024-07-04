<header>
    <nav class="autohide navbar navbar-expand-lg pt-0 navbar-background">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#newsletter-section">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"
                    class="d-inline-block align-text-top logo">
                <div class="ms-2 my-auto text-white navbar-logo-text">
                    <p class="mb-0">CONFERINȚA</p>
                    <p class="mb-0">EUROPEANĂ</p>
                </div>
            </a>
            <button class="navbar-toggler nvabar-button-no-shadow" type="button" data-bs-toggle="collapse"
                data-bs-target="#main_nav">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ms-auto d-flex gap-4">
                    <li class="nav-item">
                        <a class="nav-link link-light d-flex gap-2" href="#info-section">
                            <i class="ph ph-book-open"></i>Informatii<i class="ph ph-caret-down"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light d-flex gap-2" href="#contacts-section">
                            <i class="ph ph-phone"></i>Contacte
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  d-flex gap-2 link-light dropdown-toggle dropdown-toggle-no" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ph ph-translate"></i>Română<i class="ph ph-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>
</header>

<section class="min-vh-100 justify-content-center d-flex align-items-center mb-5 bgimg" id="newsletter-section">

    <div class="align-items-center d-flex flex-column justify-content-center text-center col-10">
        <div class="header-title">
            <h1 class="display-1 fw-bold mb-4 ">Conferința Europeană</h1>
            <h2 class="fw-bolder letter-spacing-m">DE TINERET ȘI FAMILII</h2>
        </div>
        <div class="custom-search col-12 col-md-10 col-lg-6 mt-5">
            <h5 class="fw-light mb-3">Fii la curent cu toate noutățile conferinței 2024</h5>
            <div><form method="POST" action="{{ route('register_email_for_newsletter') }}">
                @csrf
                <input type="text" class="form-control custom-search-input @error('email') is-invalid @enderror" name="email" placeholder="nume@mail.com">
                <button class="custom-search-botton px-4 position-relative-sm" type="submit">Ține-mă la curent</button>
            </form>
            </div>
        </div>
        @error('email')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        @if (session('successMessage'))
            <div class="alert alert-success">
                {{ session('successMessage') }}
            </div>
        @endif
    </div>
</section>

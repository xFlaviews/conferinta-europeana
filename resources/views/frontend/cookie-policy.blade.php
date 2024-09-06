@extends('frontend.layouts.app')

@section('title', __('Cookie Policy'))

@section('content')
    <section class="min-vh-100 mb-5 mt-7 p-5 container-fluid policies">
        <div>
            <h1>
                {{ __('Cookie Policy') }}
            </h1>
            <p>

            </p>
            <h2>
                {{ __('cookieDefinition') }}
            </h2>
            <p>
                {{ __('cookiePolicyDefinitionDescription') }}
            </p>
            <h2>
                {{ __('CookiesTypes') }}
            </h2>
            <p class="pre-line">
                {{ __('CookiesTypesDescription') }}
            </p>
            <h2>
                {{ __('Google Analytics') }}
            </h2>
            <p class="pre-line">
                {{ __('GADescription') }}
            </p>
            <h2>
                {{ __('CookieDuration') }}
            </h2>
            <p>
                {{ __('CookieDurationDescription') }}
            </p>
            <h2>
                {{ __('cookieManagement') }}
            </h2>
            <p>
                {{ __('cookieManagementDescription') }}
                <br>
                <br>
                {!! __('chromeCookieSupport') !!}
                <br>
                {!! __('firefoxCookieSupport') !!}
                <br>
                {!! __('internetExplorerCookieSupport') !!} 
                <br>
                {!! __('operaCookieSupport') !!}
                 <br>
                {!! __('safariCookieSupport') !!}
            </p>
        </div>
    </section>
@endsection

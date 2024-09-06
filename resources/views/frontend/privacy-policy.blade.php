@extends('frontend.layouts.app')

@section('title', __('Privacy Policy'))

@section('content')
    <section class="min-vh-100 mb-5 mt-7 p-5 container-fluid policies">

        <div class="container">
            <h1>
                {{ __('Privacy Policy') }}
            </h1>
            <p>{{ __('privacyPolicyDescription') }}</p>
            <p>{{ __('privacyPolicyDescription2') }}</p>
            <p>{!! __('websiteLink') !!} </p>
            <p>{{ __('privacyPolicyDescription3') }}</p>
            <p>{{ __('privacyPolicyDescription4') }}</p>
            <h2>{{ __('dataController') }}</h2>
            <p>{{ __('dataControllerDescription') }}</p>
            <p>{{ __('dataControllerDescription2') }}</p>
            <h2>{{ __('placeDataProcessing') }}</h2>
            <p>{{ __('placeDataProcessingDescription') }}</p>
            <p>{{ __('placeDataProcessingDescription2') }}</p>
            <p>{{ __('placeDataProcessingDescription3') }}</p>
            <h2>{{ __('kindOfDataTreated') }}</h2>
            <p>{{ __('navigationData') }}</p>
            <p>{{ __('navigationDataDescription') }}</p>
            <p>{{ __('navigationDataDescription2') }}</p>
            <p>{{ __('navigationDataDescription3') }}</p>
            <h2>{{ __('dataProvidedByUser') }}</h2>
            <p>{{ __('dataProvidedByUserDescription') }}</p>
            <p>{{ __('dataProvidedByUserDescription2') }}</p>
            <h2>{{ __('optionalityOfProvidedData') }}</h2>
            <p>{{ __('optionalityOfProvidedDataDescription') }}</p>
            <p>{{ __('optionalityOfProvidedDataDescription2') }}</p>
            <p>{{ __('optionalityOfProvidedDataDescription3') }}</p>
            <h2>{{ __('TreatmentModality') }}</h2>
            <p>{{ __('TreatmentModalityDescription') }}</p>
            <p>{{ __('TreatmentModalityDescription2') }}</p>
            <h2>{{ __('InterestedRights') }}</h2>
            <p>{{ __('InterestedRightsDescription') }}</p>
            <p>{{ __('InterestedRightsDescription2') }}</p>
            <p>{{ __('InterestedRightsDescription3') }}</p>
        </div>
    </section>
@endsection

@extends('frontend.layouts.app')

@section('title', __('Home'))

@section('content')
    @include('frontend.components.newsletter-section')
    @include('frontend.components.info-section')
    @include('frontend.components.faq-section')
@endsection

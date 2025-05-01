<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')

@section('content')
@include('frontend.components.home.hero')
    <!-- @include('frontend.components.home.feature') -->
    <!-- @include('frontend.components.home.recent') -->
    @include('frontend.components.home.packages')
    @include('frontend.components.home.pooja')
    @include('frontend.components.home.about')
    @include('frontend.components.home.trust')
    @include('frontend.components.home.why')
@endsection


@extends('index')

@section('content')
    @include('components.home_sections.hero')

    @include('components.home_sections.banner')

    @include('components.home_sections.product')

    @include('components.home_sections.categories')

    @include('components.home_sections.instagram')

    @include('components.home_sections.latest_blog')
@endsection
{{--
  Template Name: About-Us
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.about-us-images')
    @include('partials.about-us-description')
    @include('partials.about-us-images-mercedes')
    @include('partials.about-us-description-mercedes')
    @include('partials.about-us-images-fred')
    @include('partials.about-us-description-fred')
    @include('partials.content-page')
    @include('partials.testimonials')
  @endwhile
@endsection

{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.services-title')
    @include('partials.services-construction')
    @include('partials.services-remodeling')
    @include('partials.content-page')
    @include('partials.testimonials')
  @endwhile
@endsection

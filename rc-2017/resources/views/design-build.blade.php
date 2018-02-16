{{--
  Template Name: Design-build
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.design-build')
    @include('partials.content-page')
    @include('partials.testimonials')
  @endwhile
@endsection

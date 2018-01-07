{{--
  Template Name: Design-build
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.db-title')
    @include('partials.db-description')
    @include('partials.content-page')
  @endwhile
@endsection

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.carousel')
    @include('partials.four-up-grid')
    @include('partials.content-page')
  @endwhile
@endsection

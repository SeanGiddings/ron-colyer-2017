{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.services-title')
    @include('partials.services-section', [
      'name' => 'remodeling',
      'title' => 'Remodeling',
      'body_text' => "Ron Colyer and his team have done over 100 remodels in the last decade alone. They are committed to providing excellent customer service, and to that end, they focus on communication. No project is too big or too small, and as we are also your own dedicated project manager, your project runs in a way that minimizes stress and allows you to enjoy the remodeling process. Ron Colyer coordinates each aspect of your home-improvement project in a logical, scheduled and organized fashion, anticipating complications before they happen and taking the necessary steps to avoid delay and unforeseen costs. Adding to your home can be intimidating, but Colyer Construction takes care of you--every step of the way.",
      'images' => [
        'https://i.imgur.com/d88HueP.jpg',
        'https://i.imgur.com/LoN07PW.jpg',
        'https://i.imgur.com/hJhSuT8.jpg',
        'https://i.imgur.com/G3yJhEQ.jpg',
        'https://i.imgur.com/O3TYa78.jpg',
        'https://i.imgur.com/7HVfgCO.jpg'
      ]
    ])
    @include('partials.services-section', [
      'name' => 'construction',
      'title' => 'New Home Construction',
      'body_text' => "Since 1995, Ron Colyer and his team of experts have designed, built and remodeled numerous beautiful homes in some of the most established neighborhoods in the Louisville Metro area. Ron Colyer’s homes are uniquely designed to meet your specific needs. We are not a “track builder”, and we know your home is special. We treat every job that way, and take great measures to ease the process. And when we’re done, you receive a detailed reference manual that includes many elements that went into building your home, including the Warranty, list of subcontractors and necessary permits. You don’t need to worry about a thing, even after your home is complete.",
      'images' => [
        'https://i.imgur.com/kRn3YEz.jpg',
        'https://i.imgur.com/AD9xVGd.jpg',
        'https://i.imgur.com/6mdYdXq.jpg',
        'https://i.imgur.com/QhvuaFv.jpg',
        'https://i.imgur.com/GE6oiDc.jpg',
        'https://i.imgur.com/OPyUM32.jpg'
      ]
    ])
    @include('partials.content-page')
    @include('partials.services-portfolio')
    @include('partials.testimonials')
  @endwhile
@endsection

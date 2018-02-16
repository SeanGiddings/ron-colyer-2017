<div class="{{$name}}__container">
  <div class="{{$name}}__image">
      <div id="carousel-{{$name}}" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($images as $index => $list)
          <li data-target="#carousel-{{$name}}" data-slide-to="{{$index}}" class="active"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($images as $src)
          <div class="carousel-item @if ($loop->first) active @endif">
            <img class="d-block w-100" src="{{$src}}">
          </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel-{{$name}}" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-{{$name}}" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <div class="{{$name}}__text">
    <div class="{{$name}}__title">
      {{$title}}
    </div>
    <div class="{{$name}}__description">
      {{$body_text}}
    </div>
  </div>
</div>

@if ($name != 'construction')
    <div class="{{$name}}__line">
      <hr>
    </div>
@endif

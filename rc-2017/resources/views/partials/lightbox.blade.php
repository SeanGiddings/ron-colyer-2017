<div class="lightbox__container"
  <ul id="lightgallery-{{$id}}">
    @foreach ($images as $index => $image_url)
      <li class="lightbox__slide lightbox__slide-{{$index}}" data-src="{{$image_url}}"
      data-sub-html="{{$image_descriptions[$index]}}">
        <a href="" class="lightbox__link">
          <img class="lightbox__thumbnail img-responsive" src="{{$thumbnail}}">
          {{--<div class="demo-gallery-poster">
            <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
          </div>--}}
          {{--<h2 class="lightbox__category">Decks</h2>--}}
        </a>
      </li>
    @endforeach
  </ul>
</div>

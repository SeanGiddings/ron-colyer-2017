<div class="portfolio__container">
  <div class="portfolio__title">
    Portfolio Examples<br>
  </div>
</div>
<div class="lightbox__group">
{{--Make sure to add the new gallery id to services.js--}}
@include('partials.lightbox', [
  'id' => '1',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after.jpg',
  'title' => 'decks',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/decks/NewDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/NewDeck_after.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_before.jpeg',
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_after.jpg'
  ],
  'image_descriptions' => [
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
  ]
])

@include('partials.lightbox', [
  'id' => '2',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/remodels/OwlCreek.jpg',
  'title' => 'remodels',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/remodels/HancockBath.jpg',
    '/wp-content/themes/rc-2017/dist/images/remodels/HancockBathtub.jpg',
    '/wp-content/themes/rc-2017/dist/images/remodels/MaloneBath.jpg',
    '/wp-content/themes/rc-2017/dist/images/remodels/SteitzBath2.JPG',
    '/wp-content/themes/rc-2017/dist/images/remodels/SweasyVanity.jpeg',
    '/wp-content/themes/rc-2017/dist/images/remodels/OwlCreek.jpg'
  ],
  /*'image_descriptions' => [
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
  ]*/
])

@include('partials.lightbox', [
  'id' => '3',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks6.JPG',
  'title' => 'custom homes',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks6.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks8.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks9.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks15.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks18.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks30.JPG',
    '/wp-content/themes/rc-2017/dist/images/custom-homes/TwelveOaks22.JPG'
  ],
  /*'image_descriptions' => [
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
  ]*/
])

@include('partials.lightbox', [
  'id' => '4',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/before-after/SweasyThumb.jpg',
  'title' => 'before/after',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/before-after/SweasyVanity_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/SweasyVanity_after.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/xyz_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/xyz_after.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/RayPorch_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/RayPorch_after.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/SweasyBath_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/SweasyBath_after.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/TacketKitchen_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/before-after/TacketKitchen_after.jpg'
  ],
  'image_descriptions' => [
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
    "<h4>Before</h4>",
    '<h4>After</h4>',
  ]
])
</div>

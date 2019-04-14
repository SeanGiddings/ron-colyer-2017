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
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_before.jpeg',
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_after.jpg'
  ],
  'image_descriptions' => [
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
  ]
])

@include('partials.lightbox', [
  'id' => '2',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after.jpg',
  'title' => 'houses',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_before.jpeg',
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_after.jpg'
  ],
  'image_descriptions' => [
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
  ]
])

@include('partials.lightbox', [
  'id' => '3',
  'thumbnail' => '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after.jpg',
  'title' => 'yards',
  'images' => [
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_before.jpeg',
    '/wp-content/themes/rc-2017/dist/images/decks/SweasyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/ShelbyDeck_after2.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_before.jpg',
    '/wp-content/themes/rc-2017/dist/images/decks/SablanDeck_after.jpg'
  ],
  'image_descriptions' => [
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
    "<h4>Before</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>",
    '<h4>After</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>',
  ]
])
</div>

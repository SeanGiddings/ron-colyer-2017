<header class="banner">
  <div class="header__container container-fluid fixed-top">
    <nav class="header__navbar navbar navbar-expand-lg navbar-light">
      <a class="header__brand navbar-brand" href="{{ home_url('/') }}">
        <img class="header__logo d-inline-block align-top" src="https://i.imgur.com/RgML1ax.jpg" alt="">
        <div class="header__title">
          {{ get_bloginfo('name', 'display') }}
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="header__nav-primary navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/design-build">Design-Build</a>
          </li>
          <li class="nav-item {{ (get_the_title() == 'About Us') ? 'active' : '' }}">
            <a class="nav-link" href="/about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact-me">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

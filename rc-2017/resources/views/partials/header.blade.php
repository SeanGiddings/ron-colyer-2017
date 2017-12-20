<header class="banner">
  <div class="header__container container-fluid">
    <nav class="header__navbar navbar navbar-expand-lg navbar-light bg-light">
      <a class="header__brand navbar-brand" href="{{ home_url('/') }}">
        <img class="header__logo d-inline-block align-top" src="https://seeklogo.com/images/D/dog-logo-0C1AEE70F1-seeklogo.com.png" alt="">
        {{ get_bloginfo('name', 'display') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="header__nav-primary navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact-me">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">building examples</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

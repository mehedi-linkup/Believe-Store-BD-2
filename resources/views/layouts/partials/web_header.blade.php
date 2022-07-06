<header>
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
      <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset($content->logo) }}" alt="" style="height: 67px; width: 90px" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ @($pageName == 'product')? 'active' : '' }} px-3 text-uppercase" href="#category-menu">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#our-service">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#gallery">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#video-gallery">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#news-event">News & Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</header>
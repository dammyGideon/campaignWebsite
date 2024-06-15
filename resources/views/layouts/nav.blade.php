<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{asset('/')}}" class="d-flex align-items-center me-auto" style="height: 100px;">
        <img src="{{ asset('assets/img/logo.png') }}" alt="site-logo" class="img-fluid" style="height: 80px;">
    </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{asset('/')}}" class="active">Home<br></a></li>
          <li><a href="{{asset('about')}}">About</a></li>
          <li><a href="{{asset("commitments")}}">Commitments</a></li>
          <li><a href="{{asset("endorsements")}}">Endorsements</a></li>
          <li><a href="{{asset("events")}}">Events</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Donate</a>

    </div>
  </header>

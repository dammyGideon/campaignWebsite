@extends('layouts.app')

@section('content')

<body class="index-page">

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
          <!-- <li><a href="{{asset("events")}}">Events</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{asset('/')}}">Donate</a>

    </div>
  </header>

  <main class="main">

      <!-- Services Section -->
      <section id="services" class="services section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Endorsement</h2>
  <p>
    <h3>Shawn Black</h3>
    <h3>Ginger Tipton</h3>
    <h3>Curtis Plank </h3>
    <h3>Phil Brown</h3>
  </p>
</div><!-- End Section Title -->




    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>john@hobbsformo.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
    <form action="{{ route('contact.submit') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
        @csrf <!-- Add CSRF token for Laravel security -->

        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div><!-- End Contact Form -->
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

<div class="container">
  <div class="copyright text-center ">
    <p>
    PAID FOR BY FRIENDS OF JOHN HOBBS, GINGER TIPTON TREASURER
    </p>
  </div>
  <div class="social-links d-flex justify-content-center">
    <!-- <a href=""><i class="bi bi-twitter-x"></i></a> -->
    <a href="https://www.facebook.com/profile.php?id=61560732997075&mibextid=LQQJ4d"><i class="bi bi-facebook"></i></a>
    <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
    <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
  </div>
  <div class="credits">
  </div>
</div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>


</body>

@endsection
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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">

          
            <h1>Reelect John Hobbs for a prosperous and secure future.</h1>
            <p>
            Dedicated to community, experienced in business and infrastructure, 
            committed to transparency and financial prudence.
            </p>
            <div class="d-flex">
              <a href="{{asset('/')}}" class="btn-get-started">Donate</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{asset("assets/img/header.jpg")}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        
      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">          
            <div class="col-xl-12 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <p>
              John Hobbs, a lifelong resident of Randolph County, Missouri,
                     embodies a deep commitment to his community. 
                     As the son of the late Dr. J.W. and Betty Hobbs of Moberly, John has been steeped in
                      the values of service and community from a young age. A proud alumnus of Moberly High School,
                     his local roots and understanding of the community's needs have shaped his approach to leadership.
              </p>
              <br/>

              <a href="{{ asset('about') }}" class="btn" style="background-color: #3498db; color:aliceblue">
                     <span>Learn More About Us</span>
             </a>
            </div>
            
          </div><!-- End Service Item -->
          </div>

        
        </div>

      </div>

    </section><!-- /About Section -->


    
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
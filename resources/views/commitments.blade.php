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
  <h2>Commitments</h2>
  <p>Commitment to Randolph County's Future: A Strategic Vision for Progress and Prosperity</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <i class="bi bi-activity"></i>
        <h4><a href="" class="stretched-link">Enhancing Public Safety Systems</a></h4>
        <p>
        Emphasize the completion of the 911 call center improvements 
        and the updated 911 radio systems to improve emergency response times and public safety.
        </p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
        <i class="bi bi-bounding-box-circles"></i>
        <h4><a href="" class="stretched-link">Promoting Rural and Urban Development</a></h4>
        <p>
        Discuss the balanced approach to bringing new businesses to smaller towns while 
        supporting growth in larger cities to boost local economies and improve quality of life
        </p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
        <i class="bi bi-calendar4-week"></i>
        <h4><a href="" class="stretched-link">Infrastructure Improvement and Maintenance</a></h4>
        <p>
             Detail the specific projects
             <ul>
                <li>Resurfacing of Highway BB and D within two years.</li>
                <li>Completion of Highway 3 improvements.</li>
                <li>Developing cost-effective methods for road and bridge maintenance.</li>
                <li>Constructing a new bridge on County Rd 55 without additional cost to residents.</li>
             </ul>
        </p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
      <i class="bi bi-bounding-box-circles"></i>
        <h4><a href="" class="stretched-link">
        Combatting Drug Use Among Minors
        </a></h4>
        <p>
        Expand educational programs on drug prevention,
         starting with initiatives like the one at Randolph County Healthcare,
         to provide youth with the knowledge to make safe choices
        </p>
      </div>
    </div><!-- End Service Item -->


    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <i class="bi bi-activity"></i>
        <h4><a href="" class="stretched-link">Continuing Effective Road Maintenance</a></h4>
        <p>
        Continue updating road maintenance equipment following the successful 
        replacement of several road graders to ensure high-quality infrastructure upkeep
        </p>
      </div>
    </div><!-- End Service Item -->


    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
      <i class="bi bi-calendar4-week"></i>
        <h4><a href="" class="stretched-link">Promoting Rural and Urban Development</a></h4>
        <p>
        Discuss the balanced approach to bringing new businesses to smaller towns while 
        supporting growth in larger cities to boost local economies and improve quality of life
        </p>
      </div>
    </div><!-- End Service Item -->



    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
     
    </div><!-- End Service Item -->


    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
      <i class="bi bi-calendar4-week"></i>
        <h4><a href="" class="stretched-link">Fostering Economic Growth</a></h4>
        <p>
        Focus on creating an environment conducive to both existing businesses 
        and new ventures to increase job opportunities and economic stability throughout the county
        </p>
      </div>
    </div><!-- End Service Item -->


    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
   
    </div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Services Section -->


    
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
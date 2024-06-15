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

     <!-- Service Details Section -->
     <section id="service-details" class="service-details section">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/John-hobb2.jpg" alt="" class="img-fluid services-img">
    </div>

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <h3>A Proven Leader Committed to Randolph County's Future</h3>
      <p>
      John Hobbs, a lifelong resident of Randolph County,
       Missouri, embodies a deep commitment to his community.
        As the son of the late Dr. J.W. and Betty Hobbs of Moberly, 
        John has been steeped in the values of service and community from a young age.
         A proud alumnus of Moberly High School, his local roots 
      and understanding of the community's needs have shaped his approach to leadership.
      </p>
    
      <p>
      John's professional journey is marked by a diverse and successful
       career in both local entrepreneurship and national project management.
        He began his career locally, running Treasure Chest in downtown Moberly
         and managing 24&3 Tractor Sales in Huntsville. He also oversaw operations
          at Hobbs Angus Farms, where his hands-on experience in small business provided
       him with a solid foundation in economic management and community engagement.

      </p>
      <p>
        Expanding beyond local business, 
        John played a crucial role in Walmart's Store Planning Division, 
        traveling across the United States to supervise the building and operations of new stores.
       This role honed his skills in project management, comprehensive budget management, 
       and schedule adherence. His work ensured that new and refurbished Walmart 
       stores met high standards,
       aligning with both corporate expectations and local community needs.

       <br/> <br/>
       John's expertise extends to heavy machinery and infrastructure, gained from his work with APAC—a major highway and road contractor. This experience is directly applicable to his responsibilities in maintaining and upgrading the county’s 
       infrastructure, ensuring that Randolph County's roads and bridges are safe and efficient.

      </p>

      <p>
      As the Western District Commissioner of Randolph County,
       John has applied his broad expertise to enhance the county's financial and operational health.
        He has introduced conservative financial practices that have significantly cut costs and improved services. His strategic actions, such as voting to refinance loans at lower interest rates and constructing
       a bulk fueling station to save thousands of taxpayer dollars annually, resonate with taxpayers.

       <br/> <br/>

       Moreover, John is a staunch advocate for transparency and civic engagement. He has worked diligently to ensure that government proceedings are open and accessible, fostering an environment
        where citizen input is not only encouraged but also integral to decision-making processes.

        <br/> <br/>

        As he seeks reelection, John Hobbs is determined to continue leveraging his vast experience and conservative principles to steer Randolph County towards a future that offers prosperity, security, and opportunity for all residents—old and young alike. His leadership is driven by a commitment to practical, effective actions that meet the diverse needs of the community he serves.
        <br/> <br/>
        Vote for John Hobbs, a leader whose roots, responsibility, and readiness make him the ideal choice to keep moving Randolph County forward.
      </p>
    </div>

  </div>

</div>

</section><!-- /Service Details Section -->


    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
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
        <p><span>Paid for by</span> <strong class="px-1 sitename">John Hobbs</strong> <span> for Commissioner</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <!-- <a href=""><i class="bi bi-twitter-x"></i></a> -->
        <a href=""><i class="bi bi-facebook"></i></a>
        <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
        <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
      </div>
      <div class="credits">
    
        Designed by <a href="https://Dekamco.com">Dekamco</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>


</body>

@endsection
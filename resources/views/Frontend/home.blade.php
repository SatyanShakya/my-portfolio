@extends('layout.frontend')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

   {{-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> --}}

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="8000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
                <h2>Hey, I'm</h2>
                <h2>Satyan Ratna Shakya</h2>
              {{-- <h2>Welcome to MyPortfolio</h2> --}}
              <p>A Bachelor in Information Management (BIM) student from Lalitpur with a passion for IT and a knack for turning challenges into opportunities. My journey blends academic rigor with creative flair, from developing sleek web pages to diving deep into software development.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>My Skills</h2>
              <p>I bring strong analytical skills, a keen eye for detail, and proficiency in Web Development. My standout projects include an News Management System, a E-Commerce site, a Cycle Rental System, and a Blood Donation System, each demonstrating my ability to merge technology with user needs.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>My Education</h2>
              <p>I am currently pursuing a Bachelor of Information Technology at Orchid International College, with an expected graduation in November 2024. Before this, I completed my +2 in Management at Prasadi Academy from 2016 to 2019. My foundational education was at Eden Garden Boarding School, where I earned my School Leaving Certificate (SLC) in 2016.</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="fa-solid fa-info"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>About</h3>
              </a>
              <p>Bachelor in Information Management (BIM) student from Lalitpur, driven by a deep enthusiasm for IT and a talent for transforming challenges into innovative solutions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="fa-solid fa-chalkboard-user"></i>

              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Education</h3>
              </a>
              <p>Bachelor In Information Technology</p>
                <p>+2 in Management</p>
                <p>School Leaving Certificate</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="fa-solid fa-brain"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Skill</h3>
              </a>
              <p>I excel in HTML, CSS, Python, Laravel, and PHP showcasing my tech skills and attention to detail.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="fa-solid fa-star-of-david"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Experience</h3>
              </a>
              <p>Hands-on experience from a 3-month backend internship, where I managed real-time projects and honed my skills in HTML, CSS, Laravel, and SQL.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Featured Services Section -->

  </main>

@endsection

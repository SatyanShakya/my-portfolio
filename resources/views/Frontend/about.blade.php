@extends('layout.frontend')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>About</h1>
                {{-- <p></p> --}}
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('frontend/img/my.jpeg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Satyan Ratna Shakya</h3>
                        <p class="fst-italic">
                            Emerging from the bustling streets of Lalitpur, I'm Satyan, a passionate Bachelor in Information
                            Management (BIM) student with eyes set on the pulsating world of IT.</p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>I am a fast learner with a strong work ethic and a
                                    goal-driven mindset. My ability to quickly adapt to new technologies and my dedication
                                    to hard work ensure I consistently achieve excellence. I set ambitious goals and
                                    proactively pursue them, tackling challenges efficiently and contributing effectively to
                                    every project.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>I approach challenges with a creative mindset,
                                    leveraging my technical skills and analytical thinking to devise unique and effective
                                    solutions.</span></li>

                            <li><i class="bi bi-check2-all"></i> <span>I bring exceptional fast typing skills, which enhance
                                    my efficiency and productivity in handling extensive data and documentation tasks. My
                                    proficiency in MS Office tools—such as Word, Excel, and PowerPoint—further supports my
                                    versatility.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>With a strong foundation in analytical thinking,
                                    detail orientation, and proficiency in HTML, CSS, Python, Laravel, and PHP, I've
                                    successfully developed significant projects including an E-Commerce site, a Cycle Rental
                                    System, a Blood Donation System and Content Management System . These projects highlight
                                    my skill in integrating technology with user requirements.</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Education Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">
                    <div class="container about-title" data-aos="fade-up">
                        <h2>Education</h2>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-school"></i>
                            </div>

                            <h3>SEE</h3>
                            <p>2002 - 2016</p>
                            <p>Eden Garden Boarding School</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-award"></i>
                            </div>

                            <h3>+2, Management</h3>
                            <p>2016 - 2019</p>
                            <p>Prasadi Academy</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>

                            <h3>Bachelor in Information Management</h3>
                            <p>2019 - 2024</p>
                            <p>Orchid International College</p>

                        </div>
                    </div>
                </div>

            </div>

        </section>


        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>My Skills</h2>

            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">
                    @foreach ($skills as $skill)
                        @if ($loop->index % 2 == 0)
                            <div class="col-lg-6">


                                <div class="progress">
                                    <span class="skill"><span>{{ $skill->name }}</span> <i class="val" style="font-family: 'Inria Sans', sans-serif; font-size: 12px; ">{{ $skill->rate }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->rate }}" aria-valuemin="0"
                                            aria-valuemax="{{ $skill->rate }}"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                            </div>
                        @else
                            <div class="col-lg-6">
                                <div class="progress">
                                    <span class="skill"><span>{{ $skill->name }}</span> <i class="val" style="font-family: 'Inria Sans', sans-serif; font-size: 12px; ">{{ $skill->rate }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->rate }}" aria-valuemin="0"
                                            aria-valuemax="{{ $skill->rate }}"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container about-title" data-aos="fade-up">
                <h2>Achievements</h2>
            </div>


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 7000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        @foreach ($achievements as $achievement )

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>{{ $achievement->name }}</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{ $achievement->description }}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

    </main>
@endsection

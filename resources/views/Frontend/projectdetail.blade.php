@extends('layout.frontend')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Project Details</h1>

                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Project Details</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">


                        <div class="service-box">

                            <h4>Tools Used</h4>
                            <div class="services-list">
                                @foreach ($projects as $project)
                                    <a href="#"><i
                                            class="bi bi-arrow-right-circle"></i><span>{{ $project->tools }}</span></a>
                                @endforeach
                            </div>
                        </div><!-- End Services List -->

                        <div class="service-box">
                            <h4>GitHub</h4>
                            <div class="download-catalog">
                                @foreach ($projects as $project)
                                    <a href="{{ $project->url }}" target="_blank"><i
                                            class="fa-brands fa-github"></i><span>{{ $project->url }}</span></a>
                                @endforeach
                            </div>
                        </div><!-- End Services List -->

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i>
                                <span>9861566389</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:contact@example.com">satyanshakya@gmail.com</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($projects as $project)
                            <h3>{{ $project->name }}
                            </h3>
                            <p>
                                {!! $project->description !!}
                            </p>

                        @endforeach
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection

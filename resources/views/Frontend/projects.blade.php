@extends('layout.frontend')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>My Projects</h1>
        {{-- <p>The below mentioned are my projects</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Projects</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

            @foreach ($projects as $project)

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="{{ $project->icon_class }}"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>{{ $project->name }}</h3>
              </a>
              <p>{{ $project->description }}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section>


  </main>

@endsection

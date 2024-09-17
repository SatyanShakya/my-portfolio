@extends('layout.frontend')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>My Resume</h1>
        {{-- <p>The below mentioned are my projects</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section id="featured-services" class="featured-services section" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="row gy-4">
                @foreach ($resumes as $resume)
                    <div class="col-md-20" style="margin-bottom: 20px;">
                        <div class="card" style="border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            <div class="card-body" style="padding: 20px;">
                                <h5 class="card-title" style="font-size: 1.5rem; margin-bottom: 10px;">{{ $resume->name }}</h5>
                                <p class="card-text" style="font-size: 1rem; margin-bottom: 15px;">{{ $resume->description }}</p>
                                <iframe src="{{ asset('storage/resumes/' . $resume->file) }}"
                                        style="width: 100%; height: 950px; border: none;"
                                        frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


  </main>



@endsection

@extends('layout.dashboard')

@section('content')

    <body class="g-sidenav-show bg-gray-100">


        <div class="main-content position-relative max-height-vh-100 h-100">

            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Edit Resume</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('resumes.update', $resume->id) }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Upload New Resume (PDF)</label>
                                                <input class="form-control" type="file" name="file" accept=".pdf">
                                                @if ($resume->file)
                                                    <p>Current File: <a href="{{ asset('storage/resumes/' . $resume->file) }}" target="_blank">{{ $resume->file }}</a></p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success w-auto">Update</button>
                                    <a href="{{ route('resumes.index') }}" class="btn btn-danger w-auto">Cancel</a>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection

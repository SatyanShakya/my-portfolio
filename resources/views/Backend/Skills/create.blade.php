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
                                    <p class="mb-0">Add Skills</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('skills.store') }}" method="POST">
                                    @csrf
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
                                                <label class="form-control-label">Skils</label>
                                                <input class="form-control" type="text" name="name" placeholder="Enter your skill name"
                                                    value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Rate(%)</label>
                                                <input class="form-control" type="text" name="rate" placeholder="Enter your skill rate"
                                                    value="{{ old('rate') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success w-auto">Submit</button>
                                    <a href="{{ route('skills.index') }}" class="btn btn-danger w-auto">Cancel</a>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection

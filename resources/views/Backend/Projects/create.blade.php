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
                                    <p class="mb-0">Add Project</p>
                                    {{-- <button type="button" class="btn btn-danger btn-sm ms-auto" onclick="window.location.href='{{ route('projects.index') }}'">Cancel</button> --}}
                                </div>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('projects.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Name</label>
                                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Tools</label>
                                                <input class="form-control" type="text" name="tool">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Summary</label>
                                                <input class="form-control" type="text" name="summary">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <input class="form-control" type="text" name="Description">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Link</label>
                                                <input class="form-control" type="text" name="link">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Status</label>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="status"  data-toggle="toggle" data-on="show" data-off="hide">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary w-auto">Submit</button>
                                    <a href=" {{ route('projects.index') }}"></a>
                                    <button type="submit" class="btn btn-danger w-auto">Cancel</button>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection

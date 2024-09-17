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
                                    <p class="mb-0">Edit Project</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('projects.update', $project->id) }}" method="POST">
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
                                                <label class="form-control-label">Name</label>
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $project->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Tools</label>
                                                <input class="form-control" type="text" name="tools"
                                                    value="{{ $project->tools }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Summary</label>
                                                <input class="form-control" type="text" name="summary"
                                                    value="{{ $project->summary }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <input class="form-control" type="text" name="description"
                                                    value="{{ $project->description }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Url</label>
                                                <input class="form-control" type="text" name="url"
                                                    value="{{ $project->url }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Icon Class</label>
                                                <input class="form-control" type="text" name="icon_class"
                                                    value="{{ $project->icon_class }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Status</label>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="status"
                                                        data-toggle="toggle" data-on="show" data-off="hide">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success w-auto">Update</button>
                                    <a href="{{ route('projects.index') }}" class="btn btn-danger w-auto">Cancel</a>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection

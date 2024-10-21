@extends('layout.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Projects Table</h6>
                        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm">Create</a>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">

                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ session('success') }}',
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                </script>
                            @endif


                            <table class="table align-items-center mb-0" style="table-layout: fixed; width: 100%;">
                                <colgroup>
                                    <col style="width: 15%;">
                                    <col style="width: 10%;">
                                    <col style="width: 15%;">
                                    <col style="width: 30%;">
                                    <col style="width: 20%;">

                                    <col style="width: 10%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tools</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Summary</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Description</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Url</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td
                                                style="max-width: 300px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                                <p class="text-xs font-weight-bold mb-0">{{ $project->name }}</p>
                                            </td>
                                            <td
                                                style="max-width: 300px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                                <p class="text-xs font-weight-bold mb-0">{{ $project->tools }}</p>
                                            </td>
                                            <td
                                                style="max-width: 300px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                                <p class="text-xs font-weight-bold mb-0">{{ $project->summary }}</p>
                                            </td>
                                            <td
                                                style="max-width: 300px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                                <p class="text-xs font-weight-bold mb-0">{{ $project->description }}</p>
                                            </td>

                                            <td
                                                style="max-width: 300px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                                <p class="text-xs font-weight-bold mb-0">{{ $project->url }}</p>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('projects.edit', $project->id) }}"
                                                    class=" btn btn-info">Edit</a>
                                                <form method="POST" action="{{ route('projects.destroy', $project->id) }}"
                                                    id="delete-form-{{ $project->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="ShowAlert({{ $project->id }})">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function ShowAlert(projectId) {
            Swal.fire({
                title: "Delete?",
                text: "Are you sure you want to delete this ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes",
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, submit the form
                    document.getElementById(`delete-form-${projectId}`).submit();
                }
            });
        }
    </script>
@endsection

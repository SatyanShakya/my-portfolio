@extends('layout.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Resume Table</h6>
                        <a href="{{ route('resumes.create') }}" class="btn btn-primary btn-sm">Create</a>
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


                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Name</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resumes as $resume)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $resume->file }}</p>

                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('resumes.edit', $resume->id) }}" class=" btn btn-info">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('resumes.destroy', $resume->id) }}" id="delete-form-{{ $resume->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="ShowAlert({{ $resume->id }})">
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
        function ShowAlert(resumeId){
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
                    document.getElementById(`delete-form-${resumeId}`).submit();
                }
            });
        }
    </script>
@endsection

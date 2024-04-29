{{-- olyan form ahol tema1 tema1 tartalom es lehessen tobbet irni --}}
@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 1)
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card p-4">
                    <div class="card-body ">
                        <h1 class="text-white">Create course data</h1>
                        <p class="card-text text-danger">Inputs marked with * must be filled.</p>

                        @if (Session::has('message'))
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <strong>Holy guacamole!</strong> {{ Session::get('message') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <script>
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-top-full-width",
                                    "preventDuplicates": true,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }
                                toastr["error"]("{{ implode(' AND ', $errors->all()) }}", "Error!")
                            </script>
                        @endif

                        <div class="row">
                            <div class="col">
                                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="temacim" class="form-label">Tema cime*</label>
                                        <input type="text" name="temacim" id="temacim"
                                            class="form-control @if ($errors->has('temacim')) is-invalid @endif"
                                            value="{{ old('temacim') }}">
                                        @error('temacim')
                                            <small class="text-danger">*{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input id="tematart" name="tematart" type="hidden" name="content">
                                        <trix-editor class="text-white" input="x"></trix-editor>
                                        @error('name')
                                            <small class="text-danger">*{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-danger w-75">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    @endif

    <script>
        document.addEventListener("trix-initialize", function(e) {
            const fileTools = document.querySelector(".trix-button-group--file-tools");
            // null check hack: trix-initialize gets called twice for some reason, sometimes it is null :shrug:
            fileTools?.remove();
        });
        document.addEventListener("trix-attachment-add", function(event) {
            if (!event.attachment.file) {
                event.attachment.remove()
            }
        })
        // No files, ever
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });
    </script>
    <style>
        .card{
            background-color: #7d6139;
            color: #c7a26d;
        }
        
    </style>
@endsection

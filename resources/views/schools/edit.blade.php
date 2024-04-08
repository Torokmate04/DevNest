@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-4">
                <div class="card-body">
                    <h1 class="text-light">Edit school</h1>
                    <p class="card-text text-danger">Inputs marked with * must be filled.</p>

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
                            <form action="{{ route('schools.update', $school) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name*</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @if ($errors->has('name')) is-invalid @endif"
                                        value="{{ old('name', $school->name) }}">
                                    @error('name')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address*</label>
                                    <input type="text" name="address" id="address"
                                        class="form-control @if ($errors->has('address')) is-invalid @endif"
                                        value="{{ old('address', $school->address) }}">
                                    @error('address')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="contact_name" class="form-label">Contact name</label>
                                    <input type="text" name="contact_name" id="contact_name"
                                        class="form-control @if ($errors->has('contact_name')) is-invalid @endif"
                                        value="{{ old('contact_name', $school->contact_name) }}">
                                    @error('contact_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="contact_email" class="form-label">Contact email</label>
                                    <input type="text" name="contact_email" id="contact_email"
                                        class="form-control @if ($errors->has('contact_email')) is-invalid @endif"
                                        value="{{ old('contact_email', $school->contact_email) }}">
                                    @error('contact_email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-warning w-75">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection

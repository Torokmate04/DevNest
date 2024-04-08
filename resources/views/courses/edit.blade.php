@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-4">
                <div class="card-body">
                    <h1 class="text-white">Edit course</h1>
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
                            <form action="{{ route('courses.update', $course) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @if ($errors->has('name')) is-invalid @endif"
                                        value="{{ old('name', $course->name) }}">
                                    @error('name')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="level" class="form-label">Level</label>
                                    <input type="text" name="level" id="level"
                                        class="form-control @if ($errors->has('level')) is-invalid @endif"
                                        value="{{ old('level', $course->level) }}">
                                    @error('level')
                                        <small class="text-danger">*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type_id" class="form-label">Type</label>
                                    <select name="type_id" id="type_id" class="form-control">
                                        @foreach ($types as $item)
                                            @if ($item->id == $course->type_id)
                                                <option selected value="{{ $course->type_id }}">{{ $item->type }}
                                                </option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->type }}</option>
                                            @endif
                                        @endforeach
                                    </select>

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

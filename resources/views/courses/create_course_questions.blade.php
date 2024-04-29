{{-- olyan form ahol tema1 tema1 tartalom es lehessen tobbet irni --}}
@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 1)
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card p-4">
                    <div class="card-body">
                        <h1 class="text-white">Create course questions</h1>
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
                                    <div id="input-forms">
                                        <form>
                                            <label for="kerdes">Kérdés:</label><br>
                                            <input class="form-control" type="text" id="kerdes" name="kerdes[]"><br>
                                            <label for="valaszok">Lehetséges válaszok:</label><br>
                                            <input class="form-control" type="text" id="valaszok" name="valaszok[]">
                                        </form>
                                    </div>
                                    
                                    <button  onclick="addInputForm()">+</button>
                                    
                                    <script>
                                        function addInputForm() {
                                            var div = document.getElementById("input-forms");
                                            var form = document.createElement("form");
                                            form.innerHTML = `
                                                <label class="mt-3" for="kerdes">Kérdés:</label><br>
                                                <input class="form-control" type="text" id="kerdes" name="kerdes[]"><br>
                                                <label for="valaszok">Lehetséges válaszok:</label><br>
                                                <input class="form-control" type="text" id="valaszok" name="valaszok[]">
                                            `;
                                            div.appendChild(form);
                                        }
                                    </script>

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
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
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
        <div class="main-body">
            <div class="row d-flex flex-column align-items-center text-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('users.update', $user)}}">
                                @method("PUT")
                                @csrf
                                
                                <div class="row mb-3">

                                    <div class="col-sm-3">
                                        <h6 class="mb-0 fs-5">Full Name</h6>
                                    </div>

                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="fullname" class="form-control fs-5" value="{{ $user->fullname }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 fs-5">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="username" class="form-control fs-5" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 fs-5">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="email" class="form-control fs-5" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input  type="submit"
                                            class="btn btn-danger px-4 fs-5 w-75" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center mb-3 fs-4">Learning Status</h5>
                                    {{-- itt lekerdezni az user dolgait es kiaratni mobil hol tart --}}
                                    @foreach ($adatok as $item)
                                        <p>{{ $item->name }}</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            @switch($item->completed)
                                                @case(0)
                                                    <div class="progress-bar " role="progressbar" style="width: 0%"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                @break

                                                @case(1)
                                                    <div class="progress-bar " role="progressbar" style="width: 33%"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                @break

                                                @case(2)
                                                    <div class="progress-bar " role="progressbar" style="width: 66%"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                @break

                                                @case(3)
                                                    <div class="progress-bar " role="progressbar" style="width: 100%"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                @break

                                                @default
                                            @endswitch

                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {

            margin-top: 20px;
        }

        .card-body {
            background-color: #7d6139;
            /*background-color: #c7a26d;*/
        }

        .progress-bar {
            background-color: #c7a26d;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;

            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .form-control {
            background-color: #c7a26d;
        }

        .me-2 {
            margin-right: .5rem !important;
        }

        .btn-danger {
            background-color: #c7a26d;
            border-color: black;
        }

        .btn-danger:hover {
            background-color: #7d6139;
            border-color: black;
        }
    </style>
@endsection

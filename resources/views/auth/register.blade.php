@extends('layouts.beforelogin')
{{-- School import --}}
@php
    use App\Models\School;
@endphp
@section('before-content')
    <div class="container">
        <div class="row justify-content-center  align-items-center">



            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                    <div class="col-md-6">
                        <input onchange="takenUsernameOrNot(this.value);" id="username" type="text"
                            class="form-control @error('username') is-invalid @enderror" name="username"
                            value="{{ old('username') }}" required autofocus>
                        <strong id="responseText"></strong>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Fullname') }}</label>

                    <div class="col-md-6">
                        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror"
                            name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>

                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="school_id"
                        class="col-md-4 col-form-label text-md-end">{{ __('Melyik suliba jársz?') }}</label>

                    <div class="col-md-6">
                        <select class="form-control @error('school_id') is-invalid @enderror" name="school_id"
                            value="{{ old('school_id') }}" required id="school_id">
                            @foreach (School::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>


                        @error('school_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
    <script>
        function takenUsernameOrNot(inputData) { //Ajax funkció neve, egy bekért paraméterrel,
            $.ajax({ //Ajax jquery funkció meghívása
                type: 'POST', //A kérés metódusa
                url: '/checkInputData', //A kérés URL-je.
                data: { //A tovább küldött paraméterek, :-al elválasztva, {} között.
                    '_token': '<?php echo csrf_token(); ?>', //A CSRF token, ami must have laravelnél
                    'inputValue': inputData //Tovább küldött adat, amit a funkció paramétre ad (inputValue néven küldöm a szervernek a funkció inputData paraméterét (ami az input mező értéke))
                },
                success: function(data) { //Siker esetén a válasz (data néven érkezik, mint paraméter)
                    if (data.takenornot == true) {
                        $('#responseText').addClass("text-danger");
                        $('#responseText').html("This username is taken!")
                    } else if (data.takenornot == false) {
                        $('#responseText').removeClass("text-danger").addClass("text-success");
                        $('#responseText').html("This username is not taken!")
                    } else {
                        $('#responseText').addClass("text-danger");
                        $('#responseText').html(data.takenornot)
                    }


                }
            });
        }
    </script>
    <style>
        /* Adjustments for Bootstrap compatibility */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Crect fill='none' stroke-width='1' id='a' x='-400' y='-300' width='800' height='600'/%3E%3C/defs%3E%3Cg style='transform-origin:center'%3E%3Cg transform='rotate(36 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(-145.6 0 0)' style='transform-origin:center'%3E%3Cg transform='translate(1000 750)'%3E%3Cuse stroke='%23000' href='%23a' transform='rotate(9.1 0 0) scale(1.091)'/%3E%3Cuse stroke='%23030000' href='%23a' transform='rotate(18.2 0 0) scale(1.182)'/%3E%3Cuse stroke='%23070000' href='%23a' transform='rotate(27.3 0 0) scale(1.273)'/%3E%3Cuse stroke='%230a0000' href='%23a' transform='rotate(36.4 0 0) scale(1.364)'/%3E%3Cuse stroke='%230e0000' href='%23a' transform='rotate(45.5 0 0) scale(1.455)'/%3E%3Cuse stroke='%23110000' href='%23a' transform='rotate(54.6 0 0) scale(1.546)'/%3E%3Cuse stroke='%23140000' href='%23a' transform='rotate(63.7 0 0) scale(1.637)'/%3E%3Cuse stroke='%23180000' href='%23a' transform='rotate(72.8 0 0) scale(1.728)'/%3E%3Cuse stroke='%231b0000' href='%23a' transform='rotate(81.9 0 0) scale(1.819)'/%3E%3Cuse stroke='%231f0000' href='%23a' transform='rotate(91 0 0) scale(1.91)'/%3E%3Cuse stroke='%23220000' href='%23a' transform='rotate(100.1 0 0) scale(2.001)'/%3E%3Cuse stroke='%23250000' href='%23a' transform='rotate(109.2 0 0) scale(2.092)'/%3E%3Cuse stroke='%23290000' href='%23a' transform='rotate(118.3 0 0) scale(2.183)'/%3E%3Cuse stroke='%232c0000' href='%23a' transform='rotate(127.4 0 0) scale(2.274)'/%3E%3Cuse stroke='%23300000' href='%23a' transform='rotate(136.5 0 0) scale(2.365)'/%3E%3Cuse stroke='%23330000' href='%23a' transform='rotate(145.6 0 0) scale(2.456)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 400px;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
        }

        .card-header {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .card-body {
            text-align: center;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 5px;
            color: white;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #710000;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #5e0000;
        }

        .btn-link {
            color: #ccc;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }

        .btn-link:hover {
            color: #fff;
        }
    </style>
@endsection

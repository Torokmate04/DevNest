@extends('layouts.beforelogin')
{{-- School import --}}
@php
    use App\Models\School;
@endphp
@section('before-content')
    <div class="container">
        <div class="row justify-content-center  align-items-center kozepre">
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
                        <input onchange="passwordStrenght(this.value);" id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        <div class="progress d-none" id="progresstoshow" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar" id="progresstochange"></div>
                        </div>
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
                        <input onchange="passwordSame(this.value);" id="password-confirm" type="password"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span id="repeatresponsetext"></span>
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

        function passwordStrenght(password) {
            var upperRegex = /[A-Z]/;
            var numberRegex = /\d/;

            var div = document.getElementById("progresstoshow");
            div.classList.remove("d-none");
            var progressbar = document.getElementById("progresstochange");
            progressbar.classList.value = "progressbar";
            if (password.length < 5) {
                progressbar.classList.add("w-25");
                progressbar.classList.add("bg-danger");
            } else if (password.length > 5) {
                if (password.length >= 8 && upperRegex.test(password) && numberRegex.test(password)) {
                    progressbar.classList.value = "progressbar";
                    progressbar.classList.add('w-100');
                    progressbar.classList.add("bg-success");
                    return;
                }
                if (!upperRegex.test(password)) {
                    progressbar.classList.add("w-50");
                    progressbar.classList.add("bg-warning");
                }
                if (!numberRegex.test(password)) {
                    progressbar.classList.add("w-50");
                    progressbar.classList.add("bg-warning");
                }
                progressbar.classList.add("w-50");
                progressbar.classList.add("bg-warning");
            }

            var repeatpassword = document.getElementById("password-confirm").value;
            passwordSame(repeatpassword);
        }

        function passwordSame(repeatpassword) {
            var password = document.getElementById('password').value;
            var text = document.getElementById('repeatresponsetext');
            text.classList.value = "";
            if (password === repeatpassword) {
                text.classList.add("text-success");
                text.textContent = "Passwords are the same.";
            } else {
                text.classList.add("text-danger");
                text.textContent = "Passwords are NOT the same.";
            }
        }
    </script>
    <style>
        /* Adjustments for Bootstrap compatibility */



        .kozepre {
            margin-top: 20%;
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
            background-color: #c7a26d;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #916e3c;
        }

        .btn-link {
            color: #00000051;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }

        .btn-link:hover {
            color: #fff;
            transition: all 400ms ease-in;
            transform: scale(2);
        }
    </style>
@endsection

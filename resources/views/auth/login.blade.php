@extends('layouts.beforelogin')
{{-- egy fasza hatter es legyen kozepen a form legyen szines stb --}}
@section('before-content')
    <div class="container ">
        <div class="row justify-content-center  align-items-center">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3 text-center">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
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
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        {{-- Register gomb normalis formazas elhelyezés --}}
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

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

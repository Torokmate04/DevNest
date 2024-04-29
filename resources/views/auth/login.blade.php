@extends('layouts.beforelogin')
{{-- egy fasza hatter es legyen kozepen a form legyen szines stb --}}
@section('before-content')
    <div class="container kozepre">
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
                    <div class="col-md-6  offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        {{-- Register gomb normalis formazas elhelyezés --}}
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* Adjustments for Bootstrap compatibility */
       

       
        .kozepre{
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

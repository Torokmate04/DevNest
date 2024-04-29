@extends('layouts.beforelogin')

@section('before-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

@extends('layouts.beforelogin')

@section('before-content')
    <div class="headresz bg-warning">
        <div class="text-end pe-5 ">
            <label class="text-white">valasz nyelvet:</label>
            <select name="nyelv" id="nyelv">
                <option value="hu">Magyar</option>
                <option value="en">English</option>
            </select>
        </div>
        <div id="focim" class="row">
            <h1 class="text-center mt-5">Üdvözöllek a Lionsdale Course Notes oldalan ahol kedvedre
                tanulhatsz! :)</h1>
        </div>
    </div>
    <div class="container">
        <div id="pressable kepek" class="row mt-5 text-center">
            <div class="col">Tanuloknak</div>
            <div class="col">Kép</div>
            <div class="col">Képzőknek</div>
        </div>
        <div id="gombok" class="row mt-5">
            <div class="col text-center">
                <p>Bejelentkezes .... részére</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">
                <button
                type="button"
                class="btn btn-outline-primary"
                
            >
                Bejelentkezés
            </button>
            </a>
            @endif
            </div>
            <div class="col text-start"><button
                type="button"
                class="btn btn-outline-warning"
            >
                Google
            </button>
            </div>
        </div>
        <div id="rolunk" class="row">
            <div class="col border-end  text-center">Bövebb info</div>
            <div class="col border-end text-center">Kapcsolat</div>
            <div class="col">Verzio szam</div>
            <div class="col">Rovid leiras</div>
        </div>
    </div>
@endsection

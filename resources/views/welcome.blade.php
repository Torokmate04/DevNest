@extends('layouts.beforelogin')

@section('before-content')
    <header>
        <h1>DevNest: Üdvözöllek a Programozás Varázsában!</h1>
    </header>
    <main>
        <div class="szia">
            <h3>Lépj be Te is a digitális mágusok birodalmába, ahol a sorok nem csupán karakterekből állnak, hanem
                lehetőségek végtelen tárháza rejtőzik bennük.</h3>
        </div>
        <div class="cardcontainer">
            <div class="kartyak">
                <div class="box">
                    <div class="content">
                        <h3>Bejelentkezés tanulóként:</h3>
                        <p>Fedezd fel a programozás varázsát tanulóként az oldalunkon, részt vehetsz interaktív tanulási
                            élményekben, kvízekben és gyakorlati projektekben!</p>
                        @if (Route::has('login'))
                            <a  href="{{ route('login') }}">Bejelentkezés</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="kartyak">
                <div class="box">
                    <div class="content">
                        <h3>Még nem regisztráltál?</h3>
                        <p>Legyél részese az interaktív tanulási élményeknek és lépj be a programozás varázslatos
                            birodalmába!</p>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                </div>
            </div>

            <div class="kartyak">
                <div class="box">
                    <div class="content">
                        <h3>Bejelentkezés képzőként:</h3>
                        <p>Mint tanár az oldalon, vezethetsz interaktív tanórákat, feladatokat adhatsz diákjaidnak és nyomon
                            követheted előrehaladásukat a programozás világában!</p>
                        @if (Route::has('login'))
                            <a  href="{{ route('login') }}">Bejelentkezés</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <nav>
            Készítette: Török Máté, Kuhn Kincső, Lugosi Bálint
        </nav>
    </footer>
    <style>
        body .szia {
            color: #fff;
            text-align: center;
            max-width: 60%;
            margin: 0 auto;
            /* középre igazítás */
        }

        header {
            background-color: #a49166;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            color: #fff;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }



        footer {
            background-color: #605135;
            padding: 10px 0;
            text-align: center;
            color: #eddba5a3;
        }


        body {
            background-color: #fff;
            background-color: #332D1F;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23DDCB8E'/%3E%3Cstop offset='1' stop-color='%23332D1F'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FFF4B4' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FFF4B4' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        body .cardcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 40px 0;

        }

        body .cardcontainer .kartyak {
            position: relative;
            min-width: 320px;
            height: 440px;
            box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                5px 5px 15px rgba(112, 95, 61, 0.3), -5px -5px 15px rgba(136, 117, 79, 0.1);
            border-radius: 15px;
            margin: 30px;
            transition: 0.5s;
        }

        body .cardcontainer .kartyak:nth-child(1) .box .content a {
            background: #c7a26d;
        }

        body .cardcontainer .kartyak:nth-child(2) .box .content a {
            background: #c89752;
        }

        body .cardcontainer .kartyak:nth-child(3) .box .content a {
            background: #916e3c;
        }

        body .cardcontainer .kartyak .box {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: #665a3a;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s;
        }

        body .cardcontainer .kartyak .box:hover {
            transform: translateY(-50px);
        }

        body .cardcontainer .kartyak .box:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: rgba(0, 0, 0, 0.061);
        }

        body .cardcontainer .kartyak .box .content {
            padding: 20px;
            text-align: center;
        }

        body .cardcontainer .kartyak .box .content h2 {
            position: absolute;
            top: -10px;
            right: 30px;
            font-size: 8rem;
            color: rgba(80, 80, 80, 0.1);
        }

        body .cardcontainer .kartyak .box .content h3 {
            font-size: 1.8rem;
            color: #fff;
            z-index: 1;
            transition: 0.5s;
            margin-bottom: 15px;
        }

        body .cardcontainer .kartyak .box .content p {
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 225, 165, 0.9);
            z-index: 1;
            transition: 0.5s;
        }

        body .cardcontainer .kartyak .box .content a {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: rgb(255, 0, 0);
            border-radius: 5px;
            text-decoration: none;
            color: rgb(255, 255, 255);
            margin-top: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
        }

        body .cardcontainer .kartyak .box .content a:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            background: #574428;
            color: #000;
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div class="wrapper tabled mt-5">
        <div class="stage" id="page1">
            <div class="middled">

                <h1>Dokumentációk és linkek</h1>
                <h4>Fedezd fel a programozás varázslatos világát, ahol minden dokumentáció csak egy kattintásnyira van
                    tőled!</h4>
                <div class="link-1">
                    <a class="linkek" href="https://learn.microsoft.com/en-us/dotnet/csharp/" target="_blank">
                        <span class="thick">C#</span>
                    </a>
                    <br>
                    <div class="images">
                        <img class="kepek" src="{{ asset('storage/csharp.png') }}">
                    </div>
                </div>

                <div class="link-1">
                    <a class="linkek" href="https://www.php.net/docs.php" target="_blank">
                        <span class="thick">PHP</span>
                    </a>
                    <br>
                    <div class="images">
                        <img class="kepek" src="{{ asset('storage/php.png') }}">
                    </div>
                </div>


                <div class="link-1">
                    <a class="linkek" href="https://dev.java/learn/" target="_blank">
                        <span class="thick">Java</span>
                    </a>
                    <br>
                    <div class="images">
                        <img class="kepek" src="{{ asset('storage/java.png') }}">
                    </div>
                </div>

                <div class="link-1">
                    <a class="linkek" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
                        <span class="thick">JavaScript</span>
                    </a>
                    <br>
                    <div class="images">
                        <img class="kepek" src="{{ asset('storage/javascript.png') }}">
                    </div>
                </div>

                <div class="link-1">
                    <a class="linkek" href="https://docs.python.org/3/" target="_blank">
                        <span class="thick">Python</span>
                    </a>
                    <br>
                    <div class="images">
                        <img class="kepek" src="{{ asset('storage/python.png') }}">
                    </div>
                </div>




            </div>
        </div>



        <style>
            .wrapper {
                display: table;
                height: 100%;
                width: 100%;
            }

            .stage {
                display: table-cell;
                vertical-align: middle;
            }

            .tabled,
            .middled {
                text-align: center;
                margin: 0 auto;
            }

            .thin {
                font-weight: 300;
            }

            .thick {
                font-weight: 900;
            }

            .linkek {
                text-transform: uppercase;
                font-size: 36px;
                color: white;
                text-decoration: none;
                position: relative;
                display: block;
            }

            p {
                font-weight: 100;
                font-size: 80%;
                margin: 1px;
            }

            [class^="link-"] {
                display: inline-block;
                margin: 2em
            }

            /* linkone */
            .link-1 .linkek:before,
            .link-1 .linkek:after {
                content: '';
                border-bottom: solid 1px white;
                position: absolute;
                bottom: 0;
                width: 0;
            }

            .link-1 .linkek:before {
                left: 0;
            }

            .link-1 .linkek:after {
                right: 0;
            }

            .link-1 .linkek:hover:before,
            .link-1 .linkek:hover:after {
                width: 50%;
            }

            .link-1 .linkek:before,
            .link-1 .linkek:after {
                -webkit-transition: all 0.2s ease;
                transition: all 0.2s ease;
            }

            /* Új szabály a képekhez */
            .kepek {
                width: 100%;
                /* Kép szélessége a link szöveg szélességéhez igazítva */
                height: auto;
                /* Magasság automatikusan, hogy arányos maradjon */
                max-width: 160px;
                /* Maximum szélesség, hogy ne nyúljanak túl a kijelzőn */
                display: block;
                /* Elem legyen blokkoként kezelve */
                margin: 0 auto;
                /* Középre igazítás */

            }

            .kepek:hover {
                transition: all 400ms ease-in;
                transform: scale(1.5);
            }
        </style>
    @endsection

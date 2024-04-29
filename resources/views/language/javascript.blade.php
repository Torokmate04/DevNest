@extends('layouts.app')

@section('content')
<style>
    .jumbotron {
        background-color: #7d6139;
        color: #ffffff;
    }

    .btn-custom {
        background-color: #7d6139;
        border-color: #7d6139;
    }

    .btn-custom:hover {
        background-color: #c7a26d;
        border-color: #7d6139;
    }
</style>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">JavaScript Bemutatása</h1>
            <p class="lead">A JavaScript egy dinamikus, könnyen tanulható és sokoldalú programozási nyelv, amelyet a
                webfejlesztésben használnak.</p>
            <hr class="my-4">
            <p>A JavaScript segítségével interaktív és dinamikus weboldalakat készíthetsz, és képes vagy kommunikálni a
                böngészővel, manipulálni a HTML és CSS-t, valamint kezelni az eseményeket.</p>
        </div>

        <div id="miert-tanulj-javascript-et">
            <h2>Miért érdemes tanulni JavaScript-et?</h2>
            <p>A JavaScript egyike a legnépszerűbb és legkeresettebb programozási nyelveknek, és számos előnnyel jár a
                tanulása:</p>
            <ul>
                <li>Könnyen tanulható és értelmezhető, kiváló választás kezdőknek</li>
                <li>Webes alkalmazások fejlesztésére optimalizált, képes interaktív és dinamikus felhasználói felületeket
                    létrehozni</li>
                <li>Széles körben támogatott böngészőkön, és kompatibilis a legtöbb modern webes technológiával</li>
                <li>Nagy közösség és dokumentáció áll rendelkezésre, így sok segítséget kaphatsz és gyorsan fejlődhetsz</li>
                <li>Kiválóan kombinálható más nyelvekkel és keretrendszerekkel, mint például HTML, CSS és Node.js</li>
            </ul>
            <p>Végül, de nem utolsósorban, a JavaScriptben való jártasság számos karrierlehetőséget kínál a webfejlesztési
                iparban, és segíthet sikeres fejlesztővé válni.</p>
        </div>
    </div>
    <a href="../courses/8" class="btn btn-custom btn-lg mt-2">Vágjunk bele!</a>
@endsection

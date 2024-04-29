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
            <h1 class="display-4">C# Bemutatása</h1>
            <p class="lead">A C# egy erőteljes és sokoldalú programozási nyelv, amelyet a Microsoft fejlesztett ki.
                Kiváló választás lehet a szoftverfejlesztéshez.</p>
            <hr class="my-4">
            <p>C# segítségével könnyen fejleszthetsz webes alkalmazásokat, asztali alkalmazásokat és még sok más egyéb
                típusú szoftvert.</p>
        </div>

        <div id="miert-tanulj-csharpot">
            <h2>Miért érdemes tanulni C#-t?</h2>
            <p>C# egyike a legnépszerűbb programozási nyelveknek, és számos előnnyel jár a tanulása:</p>
            <ul>
                <li>Könnyen tanulható és értelmezhető</li>
                <li>Robosztus és biztonságos kódírást tesz lehetővé</li>
                <li>Kiterjedt támogatás és dokumentáció áll rendelkezésre</li>
                <li>Közösség és fejlesztői eszközök széles skálája áll rendelkezésre</li>
                <li>Ideális választás a Microsoft platformok fejlesztéséhez</li>
            </ul>
            <p>Végül, de nem utolsósorban, a C#-ban való jártasság kiváló lehetőségeket teremt a szoftverfejlesztési
                iparban, és segíthet sikeres karriert építeni.</p>
        </div>
    </div>
    <a href="../courses/5" class="btn btn-custom btn-lg mt-2">Vágjunk bele!</a>
@endsection

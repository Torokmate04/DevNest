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
            <h1 class="display-4">Python Bemutatása</h1>
            <p class="lead">A Python egy könnyen tanulható és olvasható programozási nyelv, amelyet számos területen
                használnak, például webfejlesztésben, adatelemzésben és mesterséges intelligenciában.</p>
            <hr class="my-4">
            <p>Python segítségével könnyen megvalósíthatók az ötleteid, legyen szó akár egyszerű szkriptekről, vagy komplex
                alkalmazásokról.</p>
        </div>

        <div id="miert-tanulj-python-t">
            <h2>Miért érdemes tanulni Python-t?</h2>
            <p>Python egyike a legnépszerűbb és legkeresettebb programozási nyelveknek, és számos előnnyel jár a tanulása:
            </p>
            <ul>
                <li>Könnyen tanulható és értelmezhető, kiváló választás kezdőknek</li>
                <li>Erős közösség és támogatás áll rendelkezésre</li>
                <li>Széles körben alkalmazható, beleértve a webfejlesztést, adatelemzést, gépi tanulást és sok más területet
                </li>
                <li>Modularitása és egyszerűsége révén gyorsan fejleszthető vele</li>
                <li>Ideális választás a szoftverfejlesztési projektekhez</li>
            </ul>
            <p>Végül, de nem utolsósorban, a Pythonban való jártasság széles körű karrierlehetőségeket teremt, és segíthet
                sikeres fejlesztővé válni.</p>
        </div>
    </div>
    <a href="../courses/7" class="btn btn-custom btn-lg mt-2">Vágjunk bele!</a>
@endsection

@extends('layouts.app')

@section('content')
<style>
    .jumbotron {
        background-color: #FF0000;
        color: #000;
    }

    .btn-custom {
        background-color: #FF0000;
        border-color: #FF0000;
    }

    .btn-custom:hover {
        background-color: #DC143C;
        border-color: #DC143C;
    }
</style>
<div class="container mt-5">
    <div class="jumbotron">
      <h1 class="display-4">PHP Bemutatása</h1>
      <p class="lead">A PHP egy széles körben elterjedt szkriptnyelv, amelyet főként webfejlesztéshez használnak. Rugalmas és könnyen tanulható.</p>
      <hr class="my-4">
      <p>A PHP segítségével dinamikus weboldalakat és webalkalmazásokat hozhatsz létre, amelyek képesek kommunikálni az adatbázisokkal és feldolgozni a felhasználói bemenetet.</p>
    </div>
    
    <div id="miert-tanulj-php-t">
      <h2>Miért érdemes tanulni PHP-t?</h2>
      <p>A PHP egyike a legnépszerűbb és legelterjedtebb programozási nyelveknek a webfejlesztés területén. Íme néhány előnye:</p>
      <ul>
        <li>Könnyen tanulható és használható, kiváló választás kezdőknek</li>
        <li>Széles körben támogatott és dokumentált nyelv, rengeteg erőforrás és közösség áll rendelkezésre</li>
        <li>Dinamikus, szerveroldali programozásra optimalizált, amely lehetővé teszi az adatok dinamikus generálását és feldolgozását</li>
        <li>Alkalmas kis weboldalaktól egészen nagy vállalati alkalmazásokig terjedő projektekhez</li>
        <li>Kiválóan integrálható adatbázisokkal és más webes technológiákkal</li>
      </ul>
      <p>Végül, de nem utolsósorban, a PHP-ban való jártasság keresett képesség a webfejlesztői piacon, és számos karrierlehetőséget kínál.</p>
    </div>
  </div>
  <a href="../courses/4" class="btn btn-custom btn-lg mt-2">Vágjunk bele!</a>
  
@endsection

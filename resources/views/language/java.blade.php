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
          <h1 class="display-4">Java Bemutatása</h1>
          <p class="lead">A Java egy erőteljes, sokoldalú és platformfüggetlen programozási nyelv, amelyet széles körben használnak asztali, webes és mobilalkalmazások fejlesztésére.</p>
          <hr class="my-4">
          <p>A Java nyelv és platform a szoftverfejlesztés számos területén alkalmazható, beleértve a vállalati alkalmazásokat, a játékokat, a mobilalkalmazásokat és a webalkalmazásokat is.</p>
        </div>
        
        <div id="miert-tanulj-java-t">
          <h2>Miért érdemes tanulni Java-t?</h2>
          <p>A Java egyike a legnépszerűbb és leginkább keresett programozási nyelveknek, és számos előnnyel jár a tanulása:</p>
          <ul>
            <li>Platformfüggetlenség: A Java alkalmazások szinte bármilyen platformon futtathatók, ami rendkívül rugalmassá teszi őket</li>
            <li>Erőteljes, objektumorientált nyelv, amely lehetővé teszi a nagy és összetett alkalmazások fejlesztését</li>
            <li>Széles körű támogatás és dokumentáció áll rendelkezésre a Java fejlesztői közösség részéről</li>
            <li>Kiválóan alkalmas vállalati és kereskedelmi alkalmazások fejlesztésére</li>
            <li>Nagy piaci kereslet a Java fejlesztők iránt, ami számos karrierlehetőséget kínál</li>
          </ul>
          <p>Végül, de nem utolsósorban, a Java-ban való jártasság elengedhetetlen lehetőséget jelent a szoftverfejlesztési iparban való sikeres karrierhez.</p>
        </div>
      </div>
      <a href="../courses/6" class="btn btn-custom btn-lg mt-2">Vágjunk bele!</a>
      
@endsection

@extends('layouts.app')

@section('content')
    <div id="firstpage">
        <div class="intro-section">
            <h2>1. Bevezetés a PHP-be</h2>
            <p>A PHP (Hypertext Preprocessor) egy szerveroldali szkriptnyelv, amely elsősorban webfejlesztéshez
                használatos.
                Dinamikus weboldalak létrehozására alkalmas, mivel a PHP kód közvetlenül beágyazható az HTML-be.</p>
            <p>Íme néhány jellemzője a PHP-nek:</p>
            <ul>
                <li>Könnyen tanulható és olvasható nyelv.</li>
                <li>Általánosan támogatott és elterjedt a weben.</li>
                <li>Képes kommunikálni az adatbázisokkal, például a MySQL-rel.</li>
                <li>Támogatja a szerveroldali fájlkezelést és hálózati protokollokat.</li>
            </ul>
            <p>Íme egy egyszerű példa arra, hogyan lehet kiírni egy üzenetet a böngészőbe PHP segítségével:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;?php
        echo "Hello, World!";
        ?&gt;</code></pre>
            </div>
            <p>A fenti példában láthatjuk, hogy a PHP kódot &lt;?php és ?&gt; tag-ek közé írjuk, és az echo utasítással
                írjuk ki
                az üzenetet.</p>
        </div>
        <div class="intro-section">
            <h2>2. Környezet beállítása</h2>
            <p>A PHP fejlesztéshez először telepítened kell egy szerverkörnyezetet a gépedre. Egyik népszerű lehetőség a
                XAMPP, amely tartalmazza az Apache webszervert, a MySQL adatbázis-kezelőt és a PHP-t.</p>
            <p>A XAMPP letölthető és telepíthető a hivatalos weboldalról. Telepítés után elérhető lesz a localhost
                szerver, ahol
                futtathatod a PHP alkalmazásaidat.</p>
            <p>Ha még nem telepítetted a XAMPP-ot, kérj segítséget a telepítési útmutatóból.</p>
            <h2>3. Alapvető szintaxis</h2>
            <p>A PHP nyelvnek számos alapvető szintaxisa van, amelyeket meg kell érteni a hatékony programozás
                érdekében. Ezek
                közé tartoznak a változók, az elágazások, a ciklusok és a függvények.</p>
            <p>Példák a PHP alapvető szintaxisára:</p>
            <ul>
                <li>Változók deklarálása és inicializálása: <code>$number = 10;</code></li>
                <li>Elágazások (if, else if, else): <code>if ($condition) {
                        // Kód blokk
                        } else {
                        // Kód blokk
                        }</code></li>
                <li>Ciklusok (for, while, do-while): <code>for ($i = 0; $i &lt; 5; $i++) {
                        // Kód blokk
                        }</code></li>
                <li>Függvények: <code>function myFunction() {
                        // Kód blokk
                        }</code></li>
            </ul>
            <p>Érdemes alaposan megismerni ezeket a szintaxisokat, mivel ezek az alapok a PHP programozásához.</p>
        </div>
    </div>
    <div id="secondpage" class="d-none">
        <div class="intro-section">
            <h2>1. Változók és adattípusok</h2>
            <p>A változók az adatok tárolására szolgálnak a PHP-ban. A változókat dollárjellel kezdjük, és a nevet követően
                értéket adhatunk neki.</p>
            <h3>Változók deklarálása és inicializálása</h3>
            <div class="example">
                <pre><code>$number = 10;
        $string = "Hello, World!";
        $isTrue = true;</code></pre>
            </div>
            <h3>Adattípusok</h3>
            <p>A PHP támogatja az alábbi alapvető adattípusokat:</p>
            <ul>
                <li>String: karakterláncok tárolására</li>
                <li>Integer: egész számok tárolására</li>
                <li>Float: lebegőpontos számok tárolására</li>
                <li>Boolean: logikai értékek tárolására (true vagy false)</li>
                <li>Array: tömbök tárolására</li>
                <li>Object: objektumok tárolására</li>
                <li>Null: üres érték tárolására</li>
            </ul>
        </div>
        <div class="intro-section">
            <h2>2. Elágazások és ciklusok</h2>
            <p>Az elágazások és ciklusok segítségével irányíthatjuk a program futását aszerint, hogy adott feltételek
                teljesülnek-e vagy sem.</p>
            <h3>If-else szerkezet</h3>
            <div class="example">
                <pre><code>$x = 10;
        if ($x > 0) {
            echo "A szám pozitív.";
        } else {
            echo "A szám nem pozitív.";
        }</code></pre>
            </div>
            <h3>For ciklus</h3>
            <div class="example">
                <pre><code>for ($i = 0; $i < 5; $i++) {
            echo $i;
        }</code></pre>
            </div>
            <h3>While ciklus</h3>
            <div class="example">
                <pre><code>$i = 0;
        while ($i < 5) {
            echo $i;
            $i++;
        }</code></pre>
            </div>
        </div>
    </div>
    <div id="thirdpage" class="d-none">
        <div class="intro-section">
            <h2>1. Függvények és eljárások</h2>
            <p>A függvények segítségével csoportosíthatjuk a kódot, ami újrahasználható és könnyen karbantartható.</p>
            <h3>Függvények létrehozása és használata</h3>
            <div class="example">
                <pre><code>function sayHello() {
            echo "Hello, World!";
        }
        sayHello();</code></pre>
            </div>
            <h2>2. Adatbázis-kezelés</h2>
            <p>Az adatbázis-kezelés fontos része a PHP alkalmazásoknak, lehetővé téve az adatok tárolását és kezelését.</p>
            <h3>Adatbázis kapcsolódás és lekérdezés</h3>
            <div class="example">
                <pre><code>$servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "myDB";

                // Kapcsolódás az adatbázishoz
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Lekérdezés végrehajtása
                $sql = "SELECT * FROM MyTable";
                $result = $conn->query($sql);</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>3. Fájlkezelés</h2>
            <p>A PHP lehetővé teszi a szerveroldali fájlkezelést, amelynek segítségével olvashatunk, írhatunk és
                módosíthatunk
                fájlokat a szerveren.</p>
            <h3>Fájl írása és olvasása</h3>
            <div class="example">
                <pre><code>$file = fopen("example.txt", "w");
        fwrite($file, "Hello, World!");
        fclose($file);
        
        // Fájl beolvasása
        $file = fopen("example.txt", "r");
        echo fread($file, filesize("example.txt"));
        fclose($file);</code></pre>
            </div>
        </div>
    </div>


    <div id="form" class="d-none">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            <div class="question">
                <p class="question-text fs-4"><strong>1. Melyik utasítás használható arra, hogy egy PHP fájlban kiírjunk
                        egy
                        üzenetet a böngészőbe?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="echo">
                        echo
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="print">
                        print
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="console.log">
                        console.log
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="alert">
                        alert
                    </label>
                </div>
                <input type="hidden" name="question1answer" value="echo">
            </div>
            {{-- question 2 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Igaz vagy hamis: A PHP nyelv használható kliensoldali
                        fejlesztésre?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="igaz">
                        Igaz
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="hamis">
                        Hamis
                    </label>
                </div>
                <input type="hidden" name="question2answer" value="hamis">
            </div>
            {{-- question 3 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik utasítás használható a PHP nyelvben egy fájl
                        beolvasására?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="readfile()">
                        readfile()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="fopen()">
                        fopen()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="file_get_contents()">
                        file_get_contents()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="include()">
                        include()
                    </label>
                </div>
                <input type="hidden" name="question3answer" value="file_get_contents()">
            </div>
            {{-- question 4 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik szintaxis használható az összefűzésre (concatenation) a PHP
                        nyelvben?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="++">
                        ++
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="+">
                        +
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value=".">
                        .
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="=">
                        =
                    </label>
                </div>
                <input type="hidden" name="question4answer" value=".">
            </div>
            <div id="submit" class="mb-3 text-center">
                <button id="submitbutton" type="submit" style="background-color:#800404"
                    class="btn btn-danger w-75">Submit</button>
            </div>
        </form>
    </div>
    </div>
    <button id="nextbutton" type="button" onclick="nextpage()" class="next-page-button">Következő oldal</button>
    @if (isset($_GET['question1']))
        <table id="responsetable" class="table table-dark text-white table-striped mt-5">
            <thead>
                <tr>
                    <th class="w-50" scope="col">Kérdés:</th>
                    <th scope="col">Ön válasza:</th>
                    <th scope="col">Helyes válasz:</th>
                    <th scope="col">Pontszám:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Melyik kifejezés használható arra, hogy egy osztály metódusa hozzáférjen a privát adattagokhoz?
                    </td>
                    <td>{{ $_GET['question1'] }}</td>
                    <td>{{ $_GET['question1answer'] }}</td>
                    <td class="eredmeny">{{ $_GET['question1'] == $_GET['question1answer'] ? 1 : 0 }}</td>
                </tr>
                <tr>
                    <td>Igaz vagy hamis: Az int és az Int32 azonos adattípusok a C#-ban?</td>
                    <td>{{ $_GET['question2'] }}</td>
                    <td>{{ $_GET['question2answer'] }}</td>
                    <td class="eredmeny">{{ $_GET['question2'] == $_GET['question2answer'] ? 1 : 0 }}</td>
                </tr>
                <tr>
                    <td>Melyik szabályosan deklarált változó a következő példában: string myString?</td>
                    <td>{{ $_GET['question3'] }}</td>
                    <td>{{ $_GET['question3answer'] }}</td>
                    <td class="eredmeny">{{ $_GET['question3'] == $_GET['question3answer'] ? 1 : 0 }}</td>
                </tr>
                <tr>
                    <td>Melyik a C# nyelvben az elsődleges adatkezelő egység?</td>
                    <td>{{ $_GET['question4'] }}</td>
                    <td>{{ $_GET['question4answer'] }}</td>
                    <td class="eredmeny">{{ $_GET['question4'] == $_GET['question4answer'] ? 1 : 0 }}</td>
                </tr>
            </tbody>
        </table>
        <p id="osszegzes" class="text-end fs-4 text-light" for="osszgezes">Összesen:
            {{ count($_GET) / 2 }} / </p>
        <div class="row">
            <div class="col">
                <p id="visszajelzoszoveg" class="fs-3 text-warning text-center mt-5">A következő tananyag úgy
                    épült fel hogy az
                    előzőleg
                    tanultakat már
                    tudja a
                    tanúló. Szeretnel
                    tovább menni a tananyagba vagy inkabb el olvasod újra?</p>
                <a class="link-danger fw-bold fs-4 float-start link-opacity-75-hover" href="./5">El
                    olvasom ujra</a>
                <a id="tovabb" class="link-success fw-bold fs-4 float-end link-opacity-75-hover"
                    href="#tovaboldal">Menyunk
                    tovabb -></a>
            </div>
        </div>
    @endif
    </div>

    <script>
        var form = document.getElementById("form");
        var page1 = document.getElementById("firstpage");
        var page2 = document.getElementById("secondpage");
        var page3 = document.getElementById("thirdpage");
        var nextbutton = document.getElementById("nextbutton");
        let pagecount = 0;
        var ulr = window.location.href;
        var helyes = 0;


        if (ulr.includes("question")) {

            nextbutton.classList.add("d-none");
            page1.classList.add("d-none");
            /* visszajelzés  jquery hasznalata javascript helyett*/


            document.getElementById('responsetable').classList.remove("d-none");


            var eredmenyek = document.querySelectorAll(".eredmeny");

            for (var i = 0; i < eredmenyek.length; i++) {

                if (eredmenyek[i].innerHTML == 1) {

                    helyes++;

                }
            }
            document.getElementById("osszegzes").innerHTML += helyes;
            if (helyes == 0) {
                document.getElementById("tovabb").classList.add("d-none");
                document.getElementById("visszajelzoszoveg").innerHTML =
                    "Sájnáljuk de nem sikerült megtanulnod az alapokat kérlek figyelmesen olvasd át mégegyszer és érj el legalább 50% eredményt!";

            }

        } else {
            page1.classList.remove("d-none");
            nextbutton.classList.remove("d-none");
        }




        function nextpage() {
            if (pagecount == 0) {
                pagecount++;
                page1.style.display = "none";
                page2.classList.remove("d-none");
            } else if (pagecount == 1) {
                pagecount++;
                page2.classList.add("d-none");
                page3.classList.remove("d-none");
            } else {
                page3.classList.add("d-none");
                form.classList.remove("d-none");
                nextbutton.classList.add("d-none");
            }
        }


        var progress = 0;

        function selectchange() {
            var selects = document.querySelectorAll(".notchangedvalue");

            for (var i = 0; i < selects.length; i++) {
                if (selects[i].value != "v") {
                    selects[i].classList.remove("notchangedvalue");
                    document.getElementById("progressbar").classList.remove("w-" + progress);
                    progress += 25;
                    document.getElementById("progressbar").classList.add("w-" + progress);
                    if (progress == 100) {
                        document.getElementById("submitbutton").disabled = false;
                    }
                }
            }

        }
    </script>
    <style>
        .quiz-title {
            text-align: center;
        }

        .question {
            margin-bottom: 20px;
        }

        .question-text {
            margin-bottom: 10px;
        }




        .answer-wrapper {
            background-color: rgba(123, 7, 7, 0.896);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            position: relative;
            /* Position relative a child elemek abszolút pozícionálásához */
            border: 1.5px solid black;
            /* Körvonal hozzáadása */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.784);
            /* Árnyék hozzáadása */
        }


        .answer {
            cursor: pointer;
            color: white;
            /* Szövegszín fekete */
            display: inline-block;
            /* Elemek blokkokká alakítása */
            margin: 0 10px;
            /* Külső margó a szövegek körül */

        }




        .checkmark {
            color: white;
            padding-left: 20px
        }






        /* CSS */
        .button-71 {
            background-color: #800404;
            border: 0;
            border-radius: 56px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: system-ui, -apple-system, system-ui, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
            font-size: 18px;
            font-weight: 600;
            outline: 0;
            padding: 16px 21px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-71:before {
            background-color: initial;
            background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
            border-radius: 125px;
            content: "";
            height: 50%;
            left: 4%;
            opacity: .5;
            position: absolute;
            top: 0;
            transition: all .3s;
            width: 92%;
        }

        .button-71:hover {
            box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
            transform: scale(1.05);
        }

        @media (min-width: 768px) {
            .button-71 {
                padding: 16px 48px;
            }
        }


        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        

        .intro-section h2 {
            color: #B22222;
            border-bottom: 2px solid #B22222;
            padding-bottom: 10px;
        }

        .intro-section p {
            margin-top: 20px;
            line-height: 1.5;
        }

        .example {
            background-color: rgba(79, 4, 4, 0.8);
            color: #FFF;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .example code {
            color: #FFF;
        }

        .next-page-button {
            background-color: #3f0808;
            color: #FFF;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            float: right;
        }

        .next-page-button:hover {
            background-color: #800000;
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div id="firstpage">
        <div class="intro-section">
            <h2>1. Objektumorientált PHP</h2>
            <p>Az objektumorientált programozás (OOP) nagyobb projektjeink során különösen hasznos, mivel lehetővé teszi az
                alkalmazások modulárisabbá és könnyebben karbantarthatóvá tételét.</p>
            <p>A PHP-ban az OOP-t osztályok és objektumok segítségével valósíthatjuk meg. Íme egy példa egy egyszerű
                osztályra:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;?php
        class Car {
            public $brand;
            public $model;
            public function __construct($brand, $model) {
                $this->brand = $brand;
                $this->model = $model;
            }
            public function displayInfo() {
                echo "Brand: " . $this->brand . ", Model: " . $this->model;
            }
        }

        $car1 = new Car("Toyota", "Corolla");
        $car1->displayInfo();
        ?&gt;</code></pre>
            </div>
            <p>A fenti példában létrehoztunk egy Car osztályt, amelynek van két tulajdonsága (brand és model) és egy
                displayInfo() metódusa.</p>
        </div>
        <div class="intro-section">
            <h2>2. Adatbázis-kezelés PDO-val</h2>
            <p>Az adatbázis-kezelés nagyon fontos a webfejlesztésben. A PDO (PHP Data Objects) egy általános módszer az
                adatbázisokhoz
                való kapcsolódásra és velük való kommunikációra PHP-ban.</p>
            <p>Íme egy példa egy egyszerű PDO használatára egy MySQL adatbázissal:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Példa lekérdezés végrehajtása
            $stmt = $conn->prepare("SELECT * FROM MyTable");
            $stmt->execute();

            // Eredmény feldolgozása
            $result = $stmt->fetchAll();
            foreach($result as $row) {
                echo "ID: " . $row['id'] . ", Name: " . $row['name'];
            }
        } catch(PDOException $e) {
            echo "Hiba: " . $e->getMessage();
        }
        $conn = null;
        ?&gt;</code></pre>
            </div>
            <p>Ez a példa bemutatja, hogyan lehet kapcsolódni egy MySQL adatbázishoz PDO-val, lekérdezést végrehajtani és
                feldolgozni az eredményeket.</p>
        </div>
    </div>
    <div id="secondpage" class="d-none">
        <div class="intro-section">
            <h2>1. Fájlkezelés PHP-ban</h2>
            <p>A fájlkezelés egy másik fontos része a PHP alkalmazásoknak. Segítségével fájlokat írhatunk, olvashatunk és
                manipulálhatunk a szerveren.</p>
            <p>Íme egy példa a fájl írására és olvasására:</p>
            <div class="example">
                <p><strong>Példa írásra:</strong></p>
                <pre><code>&lt;?php
        $file = fopen("example.txt", "w");
        fwrite($file, "Hello, World!");
        fclose($file);
        ?&gt;</code></pre>
                <p><strong>Példa olvasásra:</strong></p>
                <pre><code>&lt;?php
        $file = fopen("example.txt", "r");
        echo fread($file, filesize("example.txt"));
        fclose($file);
        ?&gt;</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Sessions és Cookies</h2>
            <p>A sessions és cookies lehetővé teszik az információk tárolását az egyes látogatók számára a weboldalakon.</p>
            <p>A sessions-t általában azért használjuk, hogy ideiglenesen tároljunk információkat egy adott látogatóhoz, míg
                a cookies hosszabb távú tárolást tesz lehetővé.</p>
            <p>Íme egy példa a sessions használatára:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;?php
        // Session indítása
        session_start();

        // Session változó beállítása
        $_SESSION['user'] = "John";

        // Session változó lekérdezése
        echo "Welcome, " . $_SESSION['user'];
        ?&gt;</code></pre>
            </div>
        </div>
    </div>
    <div id="thirdpage" class="d-none">
        <div class="intro-section">
            <h2>1. Error Handling</h2>
            <p>A hibakezelés nagyon fontos a stabil és biztonságos PHP alkalmazások számára. A megfelelő hibakezelés
                segítségével megelőzhetjük a nem várt hibákat és hibás állapotokat.</p>
            <p>Íme egy példa a hibakezelésre a try-catch blokkok segítségével:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;?php
        try {
            // Kód, ami hibát okozhat
            throw new Exception("Hibaüzenet");
        } catch(Exception $e) {
            // Hibakezelés
            echo "Hiba: " . $e->getMessage();
        }
        ?&gt;</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Form Handling</h2>
            <p>Az űrlapok kezelése központi szerepet játszik a webfejlesztésben, hiszen ezeken keresztül kapunk adatokat a
                felhasználóktól.</p>
            <p>Íme egy példa egy egyszerű űrlap kezelésére PHP-ban:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>&lt;form action="submit.php" method="post">
        Name: &lt;input type="text" name="name"&gt;
        &lt;input type="submit"&gt;
        &lt;/form&gt;</code></pre>
                <p>A submit.php fájlban kezelhetjük az adatokat, amelyeket az űrlap elküld.</p>
            </div>
        </div>
    </div>
    <div id="form" class="d-none">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            <div class="question">
                <p class="question-text fs-4"><strong>1. Melyik függvényt használjuk az objektumok létrehozásához egy osztályban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="new">
                        new
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="create">
                        create
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="instance">
                        instance
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="initialize">
                        initialize
                    </label>
                </div>
                <input type="hidden" name="question1answer" value="new">
            </div>
            {{-- question 2 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik PHP függvényt használjuk a POST adatok feldolgozásához?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="$_GET">
                        $_GET
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="$_POST">
                        $_POST
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="$_REQUEST">
                        $_REQUEST
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="$_SERVER">
                        $_SERVER
                    </label>
                </div>
                <input type="hidden" name="question2answer" value="$_POST">
            </div>
            {{-- question 3 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Mi a kimenete az alábbi kódnak: echo strlen('Hello world!');</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="12">
                        12
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="11">
                        11
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="10">
                        10
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="13">
                        13
                    </label>
                </div>
                <input type="hidden" name="question3answer" value="12">
            </div>
            {{-- question 4 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik függvényt használjuk a cookie-k beállításához PHP-ban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="setcookie()">
                        setcookie()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="createcookie()">
                        createcookie()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="set_cookie()">
                        set_cookie()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="cookie()">
                        cookie()
                    </label>
                </div>
                <input type="hidden" name="question4answer" value="setcookie()">
            </div>
            <div id="submit" class="mb-3 text-center">
                <button id="submitbutton" type="submit" style="background-color:#c7a26d; border-color:#c7a26d"
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
                <td>Melyik függvényt használjuk az objektumok létrehozásához egy osztályban?
                </td>
                <td>{{ $_GET['question1'] }}</td>
                <td>{{ $_GET['question1answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question1'] == $_GET['question1answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Melyik PHP függvényt használjuk a POST adatok feldolgozásához?</td>
                <td>{{ $_GET['question2'] }}</td>
                <td>{{ $_GET['question2answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question2'] == $_GET['question2answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Mi a kimenete az alábbi kódnak: echo strlen('Hello world!');</td>
                <td>{{ $_GET['question3'] }}</td>
                <td>{{ $_GET['question3answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question3'] == $_GET['question3answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Melyik függvényt használjuk a cookie-k beállításához PHP-ban?</td>
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
            <div id="utolsovisszajelzes" class="d-none"> </div>
        </div>
    </div>
    </div>
    @endif
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
            if (helyes <= 2) {
                document.getElementById("utolsovisszajelzes").classList.remove("d-none");
                document.getElementById("utolsovisszajelzes").innerHTML =
                    "<h4 class='text-danger'>Sájnáljuk de nem sikerült megtanulnod az alapokat kérlek figyelmesen olvasd át mégegyszer és érj el legalább 50% eredményt!<a href='./9' class='text-decoration-underline text-danger '>Probald ujra!</a></h4>";
            }
            else{
                document.getElementById("utolsovisszajelzes").classList.remove("d-none");
                document.getElementById("utolsovisszajelzes").innerHTML =
                "<h3 class='text-success'>Gratulálunk sikeresen teljesitetted a php intermediate levelt!<a href='./10' class='text-decoration-underline text-success '>Irány a következő oldal!</a></h3>";
            
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
            background-color: #7d6139;
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
            background-color: #7d6139;
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
            color: #c7a26d;
            border-bottom: 2px solid #c7a26d;
            padding-bottom: 10px;
        }

        .intro-section p {
            margin-top: 20px;
            line-height: 1.5;
        }

        .example {
            background-color: #7d6139;
            color: #FFF;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .example code {
            color: #FFF;
        }

        .next-page-button {
            background-color: #7d6139;
            color: #FFF;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            float: right;
        }

        .next-page-button:hover {
            background-color: #c7a26d;
        }
    </style>
@endsection

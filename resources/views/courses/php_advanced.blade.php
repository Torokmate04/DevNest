@extends('layouts.app')

@section('content')
<div id="firstpage">
    <div class="intro-section">
        <h2>1. Hiba kezelése a PHP-ban</h2>
        <p>A hibakezelés fontos része minden PHP alkalmazásnak. Az alábbi példa bemutatja, hogyan kezelhetünk hibákat a PHP-ban:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;?php
// Megpróbálunk végrehajtani egy műveletet
try {
    // Művelet végrehajtása
    $result = 10 / 0;
} catch (DivisionByZeroError $e) {
    // Hibakezelés, ha nullával osztunk
    echo "Hiba: Nullával osztás!";
}
?&gt;</code></pre>
        </div>
    </div>
    <div class="intro-section">
        <h2>2. Űrlapkezelés PHP-ban</h2>
        <p>Az űrlapok kezelése alapvető a webfejlesztés során. Az alábbi példa bemutatja, hogyan kezelhetünk egy egyszerű űrlapot PHP segítségével:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;form action="submit.php" method="post">
    Név: &lt;input type="text" name="name"&gt;
    &lt;input type="submit"&gt;
&lt;/form&gt;</code></pre>
            <p>A submit.php fájlban lehet kezelni az adatokat, amelyeket az űrlap elküld.</p>
        </div>
    </div>
</div>
<div id="secondpage" class="d-none">
    <div class="intro-section">
        <h2>3. Kivételkezelés PHP-ban</h2>
        <p>A kivételkezelés egy másik fontos része a PHP alkalmazásoknak. Az alábbi példa bemutatja, hogyan kezelhetünk kivételeket:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;?php
// Megpróbálunk végrehajtani egy műveletet
try {
    // Művelet végrehajtása
    $result = 10 / 0;
} catch (Exception $e) {
    // Hibakezelés, ha kivétel keletkezik
    echo "Hiba: " . $e->getMessage();
}
?&gt;</code></pre>
        </div>
    </div>
    <div class="intro-section">
        <h2>4. Adatfeldolgozás PHP-ban</h2>
        <p>Az adatfeldolgozás fontos a PHP alkalmazásokban. Az alábbi példa bemutatja, hogyan dolgozhatunk fel adatokat PHP-ban:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;?php
// Adatok feldolgozása
$data = $_POST['data'];

// Adatok ellenőrzése és feldolgozása
if (!empty($data)) {
    // Adatok feldolgozása
    echo "Feldolgozott adat: " . $data;
} else {
    // Hibaüzenet, ha nincsenek adatok
    echo "Nincsenek adatok a feldolgozáshoz!";
}
?&gt;</code></pre>
        </div>
    </div>
</div>
<div id="thirdpage" class="d-none">
    <div class="intro-section">
        <h2>5. Adatbázis-műveletek végrehajtása SQL lekérdezésekkel</h2>
        <p>Az adatbázis-műveletek végrehajtása kulcsfontosságú a webfejlesztésben. Az alábbi példa bemutatja, hogyan végezhetünk el SQL lekérdezéseket PHP segítségével:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;?php
// Adatbázis kapcsolódás
$servername = "localhost";
$username = "felhasznalonev";
$password = "jelszo";
$dbname = "adatbazis_nev";

$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrizzük a kapcsolatot
if ($conn->connect_error) {
    die("Sikertelen kapcsolódás: " . $conn->connect_error);
}

// SQL lekérdezés végrehajtása
$sql = "SELECT id, nev, email FROM felhasznalok";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Adatok kiíratása
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Név: " . $row["nev"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Nincs eredmény";
}

// Adatbázis kapcsolat bezárása
$conn->close();
?&gt;</code></pre>
        </div>
    </div>
    <div class="intro-section">
        <h2>6. Fájl manipuláció a PHP-ban</h2>
        <p>A fájlkezelés lehetővé teszi a fájlok létrehozását, olvasását, írását és manipulációját a szerveren. Az alábbi példa bemutatja, hogyan végezhetünk fájlkezelési műveleteket PHP-ban:</p>
        <div class="example">
            <p><strong>Példa:</strong></p>
            <pre><code>&lt;?php
// Fájl megnyitása írásra
$file = fopen("example.txt", "w");
// Adatok írása a fájlba
fwrite($file, "Hello, World!");
// Fájl bezárása
fclose($file);

// Fájl megnyitása olvasásra
$file = fopen("example.txt", "r");
// Fájl tartalmának kiíratása
echo fread($file, filesize("example.txt"));
// Fájl bezárása
fclose($file);
?&gt;</code></pre>
        </div>
    </div>
</div>
    <div id="form" class="d-none">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            <div class="question">
                <p class="question-text fs-4"><strong>1. Melyik PHP funkciót használjuk fájl olvasására?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="read()">
                        read()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="fget()">
                        fget()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="fread()">
                        fread()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="file_get_contents()">
                        file_get_contents()
                    </label>
                </div>
                <input type="hidden" name="question1answer" value="file_get_contents()">
            </div>
            {{-- question 2 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Hogyan nyithatjuk meg egy fájl írását a PHP-ban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="openFile('filename.txt', 'r')">
                        openFile('filename.txt', 'r')
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="fopen('filename.txt', 'w')">
                        fopen('filename.txt', 'w')
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="open('filename.txt', 'r'">
                        open('filename.txt', 'r')
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2" value="file_open('filename.txt', 'w')">
                        file_open('filename.txt', 'w')
                    </label>
                </div>
                <input type="hidden" name="question2answer" value="fopen('filename.txt', 'w')">
            </div>
            {{-- question 3 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik PHP funkciót használjuk az adatbázis kapcsolódásához?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="connect_db()">
                        connect_db()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="pdo_connect()">
                        pdo_connect()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="mysqli_connect()">
                        mysqli_connect()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="new PDO()">
                        new PDO()
                    </label>
                </div>
                <input type="hidden" name="question3answer" value="new PDO()">
            </div>
            {{-- question 4 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik SQL lekérdezési mód az egyik legbiztonságosabb a PHP-ban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Prepared statements">
                        Prepared statements
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Escaped strings">
                        Escaped strings
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Inline queries">
                        Inline queries
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Filtered queries">
                        Filtered queries
                    </label>
                </div>
                <input type="hidden" name="question4answer" value="Prepared statements">
            </div>
            <div id="submit" class="mb-3 text-center">
                <button id="submitbutton" type="submit" style="background-color:#c7a26d; border-color:#c7a26d"
                    class="btn btn-danger w-75 button-71">Submit</button>
            </div>
        </form>
    </div>
</div>
    <button id="nextbutton" type="button" onclick="nextpage()" class="next-page-button">Következő oldal</button>
    @if (isset($_GET['question1']))
    <div class="container">
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
                <td>Melyik PHP funkciót használjuk fájl olvasására?
                </td>
                <td>{{ $_GET['question1'] }}</td>
                <td>{{ $_GET['question1answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question1'] == $_GET['question1answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Hogyan nyithatjuk meg egy fájl írását a PHP-ban?</td>
                <td>{{ $_GET['question2'] }}</td>
                <td>{{ $_GET['question2answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question2'] == $_GET['question2answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Melyik PHP funkciót használjuk az adatbázis kapcsolódásához?</td>
                <td>{{ $_GET['question3'] }}</td>
                <td>{{ $_GET['question3answer'] }}</td>
                <td class="eredmeny">{{ $_GET['question3'] == $_GET['question3answer'] ? 1 : 0 }}</td>
            </tr>
            <tr>
                <td>Melyik SQL lekérdezési mód az egyik legbiztonságosabb a PHP-ban?</td>
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
            <div id="utolsovisszajelzes" class="d-none"></div>
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
                    "<h2 class='text-danger fw-bold bg-dark p-2'>Sájnáljuk de nem sikerült megtanulnod az alapokat kérlek figyelmesen olvasd át mégegyszer és érj el legalább 50% eredményt!<a href='./10?sikerult=false' class='text-decoration-underline text-danger '>Probald ujra!</a></h2>";
            }
            else{
                document.getElementById("utolsovisszajelzes").classList.remove("d-none");
                document.getElementById("utolsovisszajelzes").innerHTML =
                    "<h2 class='text-success fw-bold bg-dark p-2'>Gratulálunk sikeresen teljesitetted a php kurzust!<a href='./10?sikerult=true&elozocourse=10&basecourseid=4&level=3' class='text-decoration-underline text-success '>Irány a fő oldal!</a></h2>";
            
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
     #nextbutton{
        padding: 20px;
        font-size: 0.6cm;
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

    .sorcode {
        background-color: #7d6139;
        color: #FFF;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .next-page-button {
        background-color: #7d6139;
        color: #FFF;
        border: none;
        w padding: 10px 20px;
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

@extends('layouts.app')

@section('content')
    <div id="firstpage">
        <div class="intro-section">
            <h2>1. Bevezetés a Python nyelvbe</h2>
            <p>A Python egy magas szintű, interpretált, dinamikusan típusos programozási nyelv, amelyet Guido van Rossum
                tervezett és fejlesztett ki az 1990-es évek elején. A Python népszerűsége az egyszerű, olvasható
                szintaxisának, valamint a sokoldalúságának köszönhető, ami lehetővé teszi asztali, webes, és adatelemzési
                alkalmazások, mesterséges intelligencia, gépi tanulás és sok más területen való alkalmazását.</p>
            <p>A Python nyelv alapvető jellemzői közé tartoznak:</p>
            <ul>
                <li>Egyszerű olvasható szintaxis: A Python egy tiszta, könnyen érthető szintaxissal rendelkező nyelv, ami
                    ideális a kezdők és a tapasztalt fejlesztők számára egyaránt.</li>
                <li>Interpretált nyelv: A Python kódját soronként értelmezi az interpretáló, ami lehetővé teszi a gyors
                    fejlesztést és tesztelést.</li>
                <li>Dinamikusan típusos: A változók típusát nem kell előre deklarálni a Pythonban, és az értékük típusa
                    dinamikusan változhat a futás során.</li>
                <li>Modularitás és újrafelhasználhatóság: A Python támogatja a modulok és csomagok használatát, amelyek
                    lehetővé teszik a kód újrafelhasználását és a nagyobb projektek könnyebb kezelését.</li>
            </ul>
            <p>Íme egy egyszerű példa arra, hogyan lehet kiírni egy üzenetet a konzolra Python nyelven:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>print("Hello, World!")</code></pre>
            </div>
            <p>A fenti példában a <code>print()</code> függvényt használjuk arra, hogy kiírjuk a "Hello, World!" üzenetet a
                konzolra.</p>
        </div>
        <div class="intro-section">
            <h2>2. Környezet beállítása</h2>
            <p>A Python fejlesztéshez először telepítened kell egy Python fejlesztőkörnyezetet. A legnépszerűbb Python
                fejlesztőkörnyezetek közé tartozik a PyCharm, a Visual Studio Code és a Jupyter Notebook.</p>
            <p>A Python letölthető és telepíthető a hivatalos weboldalról, és telepítése után könnyen készíthetsz új Python
                projektet, és írhatod meg az első Python programjaidat.</p>
            <p>Ha még nincs telepítve a Python, kérj segítséget az installation.html oldalunkon található telepítési
                útmutatóból.</p>
            <h2>3. Alapvető szintaxis</h2>
            <p>A Python nyelvnek számos alapvető szintaxisa van, amelyeket meg kell érteni a hatékony programozás érdekében.
                Ezek közé tartoznak a változók, az elágazások, a ciklusok és a függvények.</p>
            <p>Példák a Python alapvető szintaxisára:</p>
            <ul>
                <li>Változók deklarálása és inicializálása: <code>number = 10</code>, <code>message = "Hello, World!"</code>,
                    <code>is_true = True</code>
                </li>
                <li>Elágazások (if, elif, else): <code>if condition:
                        # Code block
                        elif another_condition:
                        # Code block
                        else:
                        # Code block</code></li>
                <li>Ciklusok (for, while): <code>for i in range(5):
                        # Code block</code></li>
                <li>Függvények: <code>def my_function():
                        # Code block</code></li>
            </ul>
            <p>Érdemes alaposan megismerni ezeket a szintaxisokat, mivel ezek az alapok a Python programozásához.</p>
        </div>
    </div>
    <div id="secondpage" class="d-none">
        <div class="intro-section">
            <h2>1. Adatstruktúrák és fájlkezelés</h2>
            <p>Az adatstruktúrák és fájlkezelés az egyik alapvető része a Python programozásnak. Az adatstruktúrák
                segítségével tárolhatunk és kezelhetünk adatokat, míg a fájlkezelés lehetővé teszi a fájlok olvasását és
                írását a lemezre.</p>
            <h3>Listák, tuple-ök és szótárak</h3>
            <p>A listák, tuple-ök és szótárak kulcsfontosságú adatstruktúrák a Pythonban, amelyek különböző módon tárolják
                az adatokat.</p>
            <div class="example">
                <h4>Listák:</h4>
                <pre><code>my_list = [1, 2, 3, 4, 5]</code></pre>
                <h4>Tuple-ök:</h4>
                <pre><code>my_tuple = (1, 2, 3, 4, 5)</code></pre>
                <h4>Szótárak:</h4>
                <pre><code>my_dict = {"name": "John", "age": 30}</code></pre>
            </div>
            <h3>Fájlkezelés</h3>
            <p>A fájlkezelés lehetővé teszi a fájlok olvasását és írását a lemezre. A <code>open()</code> függvény
                segítségével megnyithatjuk a fájlokat olvasásra vagy írásra.</p>
            <div class="example">
                <h4>Fájl olvasása:</h4>
                <pre><code>with open("file.txt", "r") as file:
    content = file.read()</code></pre>
                <h4>Fájl írása:</h4>
                <pre><code>with open("file.txt", "w") as file:
    file.write("Hello, World!")</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Modulok és csomagok</h2>
            <p>A modulok és csomagok segítségével strukturáltabbá tehetjük a kódot és újrafelhasználható elemeket hozhatunk
                létre. A modulok egy vagy több Python fájlban találhatók, amelyek tartalmazhatnak változókat, függvényeket
                és osztályokat. A csomagok pedig egy vagy több modult tartalmazó könyvtárak.</p>
            <h3>Modulok importálása</h3>
            <p>Az import utasítással importálhatjuk a Python modulokat a kódba, hogy használhassuk azokat.</p>
            <div class="example">
                <pre><code>import math
print(math.pi)</code></pre>
            </div>
            <h3>Csomagok importálása</h3>
            <p>A csomagok importálásához használhatjuk az <code>import</code> utasítást a csomag nevével.</p>
            <div class="example">
                <pre><code>import pandas as pd
data = pd.read_csv("data.csv")</code></pre>
            </div>
        </div>
    </div>
    <div id="thirdpage" class="d-none">
        <div class="intro-section">
            <h2>1. Függvények és osztályok folytatása</h2>
            <p>A függvények és osztályok további lehetőségeket kínálnak a kód strukturálására és az újrafelhasználhatóság
                növelésére.</p>
            <h3>Változók átadása függvényeknek</h3>
            <p>A függvények paramétereket fogadhatnak, amelyek segítségével változókat adhatunk át a függvénynek.</p>
            <div class="example">
                <pre><code>def greet(name):
    print("Hello, " + name)

greet("John")</code></pre>
            </div>
            <h3>Osztályok létrehozása</h3>
            <p>Az osztályok segítségével létrehozhatunk saját adattípusokat és metódusokat.</p>
            <div class="example">
                <pre><code>class Person:
    def __init__(self, name, age):
        self.name = name
        self.age = age

person1 = Person("John", 30)
print(person1.name)</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Hiba- és kivételkezelés</h2>
            <p>A hiba- és kivételkezelés segítségével kezelhetjük a program futása során előforduló hibákat és kivételeket,
                így biztosítva a program stabil működését.</p>
            <div class="example">
                <pre><code>try:
    # Kódrész, amely hibát okozhat
except Exception as e:
    print("Hiba történt:", e)</code></pre>
            </div>
        </div>
    </div>

    <div id="form" class="d-none">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            {{-- Kérdés 1 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>1. Melyik az egyik jellemzője a Python programozási nyelvnek?</strong>
                </p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1a" value="Moduláris és könnyen olvasható kód">
                        Moduláris és könnyen olvasható kód
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1b" value="Erős típusosság">
                        Erős típusosság
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1c" value="Platformfüggetlenség">
                        Platformfüggetlenség
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1d"
                            value="Kizárólag asztali alkalmazásokhoz használható">
                        Kizárólag asztali alkalmazásokhoz használható
                    </label>
                </div>
                <input type="hidden" name="question1answer" value="Moduláris és könnyen olvasható kód">
            </div>
            {{-- Kérdés 2 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>2. Milyen módon lehet egy Python függvény visszatérési értékét kiírni
                        a konzolra?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2a" value="print() függvénnyel">
                        print() függvénnyel
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2b" value="return utasítással">
                        return utasítással
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2c" value="console.log() függvénnyel">
                        console.log() függvénnyel
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question2" id="question2d" value="echo() függvénnyel">
                        echo() függvénnyel
                    </label>
                </div>
                <input type="hidden" name="question2answer" value="print() függvénnyel">
            </div>
            {{-- Kérdés 3 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>3. Hogyan lehet létrehozni egy üres listát Pythonban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3a" value="list() függvénnyel">
                        list() függvénnyel
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3b" value="[] zárójelek között">
                        [] zárójelek között
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3c" value="empty() függvénnyel">
                        empty() függvénnyel
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3d" value="createList() függvénnyel">
                        createList() függvénnyel
                    </label>
                </div>
                <input type="hidden" name="question3answer" value="[] zárójelek között">
            </div>
            {{-- Kérdés 4 --}}
            <div class="question">
                <p class="question-text fs-4"><strong>4. Melyik adattípus használható egyedi kulcsok tárolására egy Python
                        dictionary-ben?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4a" value="integer">
                        integer
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4b" value="string">
                        string
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4c" value="boolean">
                        boolean
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4d" value="list">
                        list
                    </label>
                </div>
                <input type="hidden" name="question4answer" value="string">
            </div>
            <div id="submit" class="mb-3 text-center">
                <button id="submitbutton" type="submit" style="background-color:#800404"
                    class="btn btn-danger w-75">Submit</button>
            </div>
        </form>
    </div>
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

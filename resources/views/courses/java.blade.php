@extends('layouts.app')

@section('content')
    <div id="firstpage">
        <div class="intro-section">
            <h2>1. Bevezetés a Java nyelvbe</h2>
            <p>A Java egy erősen típusos, objektumorientált programozási nyelv, amelyet eredetileg a Sun Microsystems
                fejlesztett ki. Az alábbiakban röviden bemutatjuk a Java alapvető jellemzőit:</p>
            <ul>
                <li>Erős típusosság: A Java erősen típusos nyelv, ami azt jelenti, hogy minden változónak meg kell adni a
                    típusát, és csak az adott típusú értékekkel lehet inicializálni.</li>
                <li>Objektumorientált: A Java objektumorientált nyelv, ami azt jelenti, hogy az alkalmazásokat osztályok és
                    objektumok segítségével építjük fel.</li>
                <li>Platformfüggetlen: A Java programokat a Java virtuális gép (JVM) segítségével futtathatjuk különböző
                    platformokon, beleértve a Windows-t, a macOS-t és a Linux-ot.</li>
            </ul>
            <p>Íme egy egyszerű példa arra, hogyan lehet kiírni egy üzenetet a konzolra Java nyelven:</p>
            <div class="example">
                <p><strong>Példa:</strong></p>
                <pre><code>public class Main {
            public static void main(String[] args) {
                System.out.println("Hello, World!");
            }
        }</code></pre>
            </div>
            <p>A fenti példában láthatjuk, hogy a <code>System.out.println()</code> utasítást használjuk a szöveg kiírására
                a konzolra.</p>
        </div>
        <div class="intro-section">
            <h2>2. Környezet beállítása</h2>
            <p>A Java fejlesztéshez először telepítened kell egy Java fejlesztőkörnyezetet, például a JDK-t (Java
                Development Kit) és a Java IDE-t (Integrated Development Environment), mint például az Eclipse vagy a
                IntelliJ IDEA.</p>
            <p>A JDK letölthető a hivatalos Oracle weboldaláról, és telepítése után könnyen készíthetsz új Java projektet,
                és írhatod meg az első Java programjaidat.</p>
            <p>Ha még nincs telepítve a JDK és a Java IDE, kérj segítséget az installation.html oldalunkon található
                telepítési útmutatóból.</p>
            <h2>3. Alapvető szintaxis</h2>
            <p>A Java nyelvnek számos alapvető szintaxisa van, amelyeket meg kell érteni a hatékony programozás érdekében.
                Ezek közé tartoznak a változók, az elágazások, a ciklusok és a függvények.</p>
            <p>Példák a Java alapvető szintaxisára:</p>
            <ul>
                <li>Változók deklarálása és inicializálása: <code>int number = 10;</code></li>
                <li>Elágazások (if-else): <code>if (condition) { // Code block }</code></li>
                <li>Ciklusok (for, while): <code>for (int i = 0; i &lt; 5; i++) { // Code block }</code></li>
                <li>Függvények és metódusok: <code>void myMethod() { // Code block }</code></li>
            </ul>
            <p>Érdemes alaposan megismerni ezeket a szintaxisokat, mivel ezek az alapok a Java programozásához.</p>
        </div>
    </div>
    <div id="secondpage" class="d-none">
        <div class="intro-section">
            <h2>1. Változók és vezérlési szerkezetek</h2>
            <p>Az alapok megértése elengedhetetlen a Java-ban való sikeres programozáshoz. A változók és vezérlési
                szerkezetek használatának gyakorlásával könnyebben kezelhető és olvasható kódokat készíthetsz.</p>
            <h3>Változók deklarálása és inicializálása</h3>
            <p>A változók segítségével tárolhatunk értékeket a programunkban. Például:</p>
            <div class="example">
                <pre><code>int number = 10;
    String message = "Hello, World!";
    boolean isTrue = true;</code></pre>
            </div>
            <h3>Vezérlési szerkezetek</h3>
            <p>Az if-else és a switch-case szerkezetek segítségével különböző utasításokat hajthatunk végre a program futása
                során.</p>
            <div class="example">
                <pre><code>int x = 5;
    if (x > 0) {
        System.out.println("A szám pozitív.");
    }
    else {
        System.out.println("A szám nem pozitív.");
    }</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Függvények és osztályok</h2>
            <p>A függvények és osztályok segítségével strukturáltabbá tehetjük a kódot és újrahasználható elemeket hozhatunk
                létre.</p>
            <h3>Függvények</h3>
            <p>A függvények segítségével csoportosíthatjuk a kódot és egyszerűen hívhatjuk meg azokat többször.</p>
            <div class="example">
                <pre><code>void printMessage(String message) {
        System.out.println(message);
    }
    printMessage("Üdvözöllek!");</code></pre>
            </div>
            <h3>Osztályok és objektumok</h3>
            <p>Az osztályok lehetővé teszik, hogy saját adattípusokat hozzunk létre, míg az objektumok példányosítják ezeket
                az osztályokat.</p>
            <div class="example">
                <pre><code>class Person {
        String name;
        int age;
    }
    Person person1 = new Person();
    person1.name = "John";
    person1.age = 30;</code></pre>
            </div>
        </div>
    </div>

    <div id="thirdpage" class="d-none">
        <div class="intro-section">
            <h2>1. Többszálú programozás</h2>
            <p>A többszálú programozás lehetővé teszi, hogy egy időben több feladatot is végrehajtsunk a programban.</p>
            <div class="example">
                <pre><code>Thread thread = new Thread(() -> {
        // Többszálú kód itt
    });
    thread.start();</code></pre>
            </div>
        </div>
        <div class="intro-section">
            <h2>2. Adatbázis-kezelés</h2>
            <p>Az adatbázis-kezelés fontos része a Java alkalmazásoknak, lehetővé téve az adatok tárolását és kezelését.</p>
            <div class="example">
                <pre><code>try (Connection connection = DriverManager.getConnection(url, username, password)) {
        // Kapcsolat létrehozása az adatbázissal
        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery("SELECT * FROM Users");
        // adatok kezelése
    } catch (SQLException e) {
        e.printStackTrace();
    }</code></pre>
            </div>
        </div>

        <div class="intro-section">
            <h2>3. Kivételek kezelése</h2>
            <p>A kivételek kezelése lehetővé teszi, hogy egy alkalmazás elegánsan reagáljon hibás helyzetekre és hibákra.
            </p>
            <div class="example">
                <pre><code>try {
        // Kódrész, amely kivételt válthat ki
    } catch (Exception e) {
        // Kivétel kezelése
        e.printStackTrace();
    }</code></pre>
            </div>
        </div>
    </div>
    

    <div id="form" class="d-none">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            <div class="question">
                <p class="question-text fs-4"><strong>1. Melyik kifejezés használható arra, hogy egy változó értékét kiírjuk
                        a konzolra Java-ban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="System.out.println()">
                        System.out.println()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="print()">
                        print()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="console.log()">
                        console.log()
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question1" id="question1" value="display()">
                        display()
                    </label>
                </div>
                <input type="hidden" name="question1answer" value="System.out.println()">
            </div>
            <!-- question 2 -->
            <div class="question">
                <p class="question-text fs-4"><strong>Igaz vagy hamis: A Java egy interpretált nyelv.</strong></p>
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
            <!-- question 3 -->
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik az érvényes módja a kommentek elhelyezésének a Java
                        kódban?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="//">
                        //
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="<!-- -->">
                        &lt;!-- --&gt;
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="/* */">
                        /* */
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question3" id="question3" value="#">
                        #
                    </label>
                </div>
                <input type="hidden" name="question3answer" value="//">
            </div>
            <!-- question 4 -->
            <div class="question">
                <p class="question-text fs-4"><strong>Melyik Java osztályt használjuk a szöveges bemenet beolvasásához a
                        konzolról?</strong></p>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Scanner">
                        Scanner
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="Reader">
                        Reader
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="InputStream">
                        InputStream
                    </label>
                </div>
                <div class="answer-wrapper">
                    <label class="answer">
                        <input type="radio" name="question4" id="question4" value="FileReader">
                        FileReader
                    </label>
                </div>
                <input type="hidden" name="question4answer" value="Scanner">
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

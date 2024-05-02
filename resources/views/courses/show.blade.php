@extends('layouts.app')

@section('content')
    @foreach ($coursedata as $item)
        <div id="page">
            <div class="intro-section">
                <h2>{{ $item->cim }}</h2>
                <p><?php echo $item->tartalom; ?></p>
            </div>
        </div>
        </div>
    @endforeach
    <div class="container">
        <div id="form">
            <form id="quizForm" method="GET" enctype="multipart/form-data">
                @foreach ($coursequestions as $item)
                    <div class="question">
                        <p class="question-text fs-4"><strong>{{ $item->kerdes }}</strong></p>
                        @foreach (explode(';', $item->valaszok) as $valasz)
                            <div class="answer-wrapper">
                                <label class="answer">
                                    <input type="radio" name="question{{ $item->id }}"
                                        id="question{{ $item->id }}" value="{{ $valasz }}">
                                    {{ $valasz }}
                                </label>
                            </div>
                        @endforeach
                        <input type="hidden" name="question{{ $item->id }}answer"
                            value="{{ explode(';', $item->valaszok)[0] }}">
                @endforeach


        </div>
        <div id="submit" class="mb-3 text-center">
            <button id="submitbutton" type="submit" style="background-color:#c7a26d; border-color:#c7a26d"
                class="btn btn-danger w-75 button-71">Submit</button>
        </div>
        </form>
    </div>
    </div>
    @if (isset($_GET['question1']))
        <div class="container">
            <table id="responsetable" class="table table-dark text-white table-striped mt-5 d-none">
                <thead>
                    <tr>
                        <th class="w-50" scope="col">Kérdés:</th>
                        <th scope="col">Ön válasza:</th>
                        <th scope="col">Helyes válasz:</th>
                        <th scope="col">Pontszám:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coursequestions as $item)
                        <tr>
                            <td>{{ $item->kerdes }}</td>
                            <td>{{ $_GET['question' . $item->id] }}</td>
                            <td>{{ $_GET['question' . $item->id . 'answer'] }}</td>
                            <td class="eredmeny">
                                {{ $_GET['question' . $item->id] == $_GET['question' . $item->id . 'answer'] ? 1 : 0 }}
                            </td>
                        </tr>
                    @endforeach

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
        </div>
    @endif
    </div>
    <script>
        var tartalom = document.getElementById("page");
        var form = document.getElementById("form");
        var ulr = window.location.href;
        var helyes = 0;
        if (ulr.includes("question")) {
            form.classList.add("d-none");
            tartalom.classList.add("d-none");
            document.getElementById('responsetable').classList.remove("d-none");

            var eredmenyek = document.querySelectorAll(".eredmeny");

            for (var i = 0; i < eredmenyek.length; i++) {

                if (eredmenyek[i].innerHTML == 1) {

                    helyes++;

                }
            }
            document.getElementById("osszegzes").innerHTML += helyes;
            var osszeskerdes = document.getElementById("osszegzes").innerHTML;
            var idsztring = ulr.split("/")[4];
            let index = idsztring.indexOf("?");
            let choppedString = idsztring.substring(0, index);

            if (helyes <= osszeskerdes[26] / 2) {
                document.getElementById("utolsovisszajelzes").classList.remove("d-none");
                document.getElementById("utolsovisszajelzes").innerHTML =
                "<h2 class='text-danger fw-bold bg-dark p-2'>Sájnáljuk de nem sikerült megtanulnod az alapokat kérlek figyelmesen olvasd át mégegyszer és érj el legalább 60% eredményt! <a href='./"+choppedString+"?sikerult=false' class='text-decoration-underline text-danger '>Probald ujra!</a></h2>";
            } else {
                document.getElementById("utolsovisszajelzes").classList.remove("d-none");
                document.getElementById("utolsovisszajelzes").innerHTML =
                    "<h2 class='text-success fw-bold bg-dark p-2'>Gratulálunk sikeresen teljesitetted ezt a kurzust!</h2>";

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
    </style>
@endsection

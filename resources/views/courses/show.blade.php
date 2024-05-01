@extends('layouts.app')

@section('content')
    @foreach ($coursedata as $item)
        <div class="intro-section">
            <h2>{{ $item->cim }}</h2>
            <?php echo $item->tartalom; ?>

        </div>
    @endforeach

    <div id="form" class="">
        <form id="quizForm" method="GET" enctype="multipart/form-data">
            <div class="question">
                @foreach ($coursequestions as $item)
                    <p class="question-text fs-4"><strong>{{ $item->kerdes }}</strong></p>
                    <div class="answer-wrapper">
                        <label class="answer">
                            <input type="radio" name="question1" id="question1" value="{{ $item->valaszok }}">

                            {{ $item->valaszok }}
                        </label>
                    </div>
                @endforeach





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

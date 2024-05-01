@extends('layouts.app')

@section('content')
<div class="heading">
    <h1 class="heading__title">Kurzusaink</h1>
    <p class="heading__credits">Ezek közül tudsz választani:</p>
</div>
<div class="cards">
    @foreach ($courses as $item)
    <div class="card card-{{($item->id + 1) % 4 == 1 || $item->id % 4 == 1  ? "egyikek": "masikok"}}">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h2 class="card__title">{{$item->name}}</h2>
        <p class="card__apply">
            <a class="card__link" href="../courses/{{$item->id}}">Indítás<i class="fas fa-arrow-right"></i></a>
        </p>
    </div>
    @endforeach    
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }        
        .main-container {
            padding: 30px;
        }

        /* HEADING */
        
        .heading {
            text-align: center;
        }

        .heading__title {
            font-weight: 600;
            color: white;
        }
        
        .heading__credits {
            margin: 10px 0px;
            color: #564837;
            font-size: 25px;
            transition: all 0.5s;
        }

        .heading__link {
            text-decoration: none;
        }
        
        .heading__credits .heading__link {
            color: inherit;
        }
        
        /* CARDS */
        
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            margin: 20px;
            padding: 20px;
            width: 500px;
            min-height: 200px;
            display: grid;
            grid-template-rows: 20px 50px 1fr 50px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.2s;
        }

        .card:hover {
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
            transform: scale(1.01);
        }

        .card__link,
        .card__exit,
        .card__icon {
            position: relative;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
        }

        .card__link::after {
            position: absolute;
            top: 25px;
            left: 0;
            content: "";
            width: 0%;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.6);
            transition: all 0.5s;
        }

        .card__link:hover::after {
            width: 100%;
        }

        .card__exit {
            grid-row: 1/2;
            justify-self: end;
        }

        .card__icon {
            grid-row: 2/3;
            font-size: 30px;
        }

        .card__title {
            grid-row: 3/4;
            font-weight: 400;
            color: #ffffff;
        }

        .card__apply {
            grid-row: 4/5;
            align-self: center;
        }

        /* CARD BACKGROUNDS */
        
        .card-egyikek  {
            background: radial-gradient(#b78d5c, #3d3122);
        }

        .card-masikok {
            background: radial-gradient(#e2c69b, #877651);
        }



        /* RESPONSIVE */

        @media (max-width: 1600px) {
            .cards {
                justify-content: center;
            }
        }
    </style>
@endsection

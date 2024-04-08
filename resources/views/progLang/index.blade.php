@extends('layouts.app')

@section('content')
    <h1>Proglangues</h1>
    <div class="row">
        @foreach ($language as $item)
            <div class="col">
                <div class="card">
                    <img class="card-img-top" style="width: 150px"
                        src="https://assets.exercism.org/tracks/{{ $item->name }}.svg" alt="{{ $item->name }}" />
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->name }}</h4>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

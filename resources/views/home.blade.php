@extends('layouts.main')

@section('main-content')

<div class="d-flex flex-wrap">
    @forelse($movies as $movie)

    <div class="card m-3" style="width: 18rem;">

        <div class="card-header">
            {{$movie->title}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Titolo originale: '{{$movie->original_title}}' </li>
            <li class="list-group-item">Nazionalità: {{ $movie->nationality}}</li>
            <li class="list-group-item">Anno di pubblicazione: {{$movie->date}}</li>
            <li class="list-group-item">Valutazione media utenti: {{$movie->vote}}</li>
        </ul>
    </div>
    @empty
    <h4> nessun film da visualizzare... </h4>
    @endforelse
</div>


@endsection
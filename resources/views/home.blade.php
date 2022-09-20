@extends('layouts.main')

@section('main-content')
<ul>
    @forelse($movies as $movie)
    <li>
        {{$movie->title}}
    </li>
    @empty
    <h4> nessun libro da visualizzare... </h4>
    @endforelse

</ul>

@endsection
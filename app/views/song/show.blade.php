
@extends('layouts._master')

@section('title')
    {{ $song->name }}
@stop

@section('nav')
    @include('partials.songnav')
@stop

@section('content')
<h1>{{ $song->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $song->name }}</h2>
        <p>
            <strong>Artist:</strong> {{ $song->artist }}<br>
        </p>
    </div>

    <div>
        <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Player</td>
            <td>Part</td>
        </tr>
    </thead>
    <tbody>
    @foreach($song->player as $player)
        <tr>
            <td>{{ $player->name }}</td>
            <td>{{ $player->getPartAttribute($player->pivot->part) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
@stop

@stop
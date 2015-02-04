
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
        <h4>Required Parts</h4>
        <ul style="list-style-type:none">
        @if ($song->gLead)
            <li>Guitar Lead</li>
        @endif
        @if ($song->gRhythm)
            <li>Guitar - Rhythm</li>
        @endif
        @if ($song->gAcoustic)
            <li>Guitar - Acoustic</li>
        @endif
        @if ($song->Bass)
            <li>Bass</li>
        @endif
        @if ($song->Drums)
            <li>Drums</li>
        @endif
        @if ($song->vHarmony)
            <li>Vocal - Harmony</li>
        @endif
        @if ($song->vLead)
            <li>Vocals - Lead</li>
        @endif
         @if ($song->keys)
            <li>Keys</li>
        @endif
        </ul>


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

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
@stop

@stop
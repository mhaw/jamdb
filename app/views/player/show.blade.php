@extends('layouts._master')

@section('title')
    {{ $player->name }}
@stop

@section('nav')
    @include('partials.playernav')
@stop

@section('content')
<h1>{{ $player->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $player->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $player->email }}<br>
        </p>
    </div>

    <div>
    	{{ Form::open(array('url' => 'player/addSong')) }}
        {{ Form::hidden('player', $player->id ) }}
     	{{ Form::label('song', 'Song') }}
     	{{ Form::select('song', $songdata) }}
     	<br>
	{{ Form::label('part', 'Part') }}
     	{{ Form::select('part', array(
 		'10' => 'Guitar - Lead',
		'20' => 'Guitar - Rhythm',
		'30' => 'Guitar - Acoustic',
		'40' => 'Bass',
		'50' => 'Drums',
		'60' => 'Vocal - Harmony',
		'70' => 'Vocal - Lead',
		'80' => 'Keys'
	)) }}
	<br>
	{{ Form::submit('Add Song') }}
	{{ Form::close() }}
    </div>
@stop

@stop

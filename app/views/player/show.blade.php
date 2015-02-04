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
        <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Song</td>
            <td>Artist</td>
            <td>Part</td>
        </tr>
    </thead>
    <tbody>
    @foreach($player->song as $song)
        <tr>
            <td>{{ $song->name }}</td>
            <td>{{ $song->artist }}</td>
            <td>{{ $song->getPartAttribute($song->pivot->part) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>

    <div>
    	{{ Form::open(array('url' => 'player/addSong')) }}
        {{ Form::hidden('player', $player->id ) }}
     	{{ Form::label('song', 'Song') }}
     	{{ Form::select('song', $songdata) }}
     	<br>
	{{ Form::label('part', 'Part') }}
     	{{ Form::select('part', array(
 		'0' => 'Guitar - Lead',
		'1' => 'Guitar - Rhythm',
		'2' => 'Guitar - Acoustic',
		'3' => 'Bass',
		'4' => 'Drums',
		'5' => 'Vocal - Harmony',
		'6' => 'Vocal - Lead',
		'7' => 'Keys'
	)) }}
	<br>
	{{ Form::submit('Add Song') }}
	{{ Form::close() }}
    </div>
@stop

@stop

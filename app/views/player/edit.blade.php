@extends('layouts._master')

@section('title')
    Edit Player
@stop

@section('nav')
    @include('partials.playernav')
@stop

@section('content')
<h1>Edit {{ $player->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($player, array('route' => array('player.update', $player->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop

@stop

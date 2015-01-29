
@extends('layouts._master')

@section('title')
Edit - {{ $song->name }}
@stop

@section('nav')
    @include('partials.songnav')
@stop

@section('content')
<h1>Edit {{ $song->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($song, array('route' => array('song.update', $song->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('artist', 'Artist') }}
        {{ Form::email('artist', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@stop

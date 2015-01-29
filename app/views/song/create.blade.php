@extends('layouts._master')

@section('title')
    Add Song
@stop

@section('nav')
    @include('partials.songnav')
@stop

@section('content')
<h1>Add a Song</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'song')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('artist', 'Artist') }}
        {{ Form::text('artist', Input::old('artist'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@stop
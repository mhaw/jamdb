
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
        {{ Form::text('artist', null, array('class' => 'form-control')) }}
    </div>

    <div>
        <h4>Required Parts</h4>
        {{ Form::label('gLead', 'Guitar - Lead') }}
        {{ Form::checkbox('gLead', 'Yes') }}
        <br>
        {{ Form::label('gRhythm', 'Guitar - Rhythm') }}
        {{ Form::checkbox('gRhythm', 'Yes') }}
         <br>
        {{ Form::label('gAcoustic', 'Guitar - Acoustic') }}
        {{ Form::checkbox('gAcoustic', 'Yes') }}
         <br>
        {{ Form::label('Bass', 'Bass') }}
        {{ Form::checkbox('Bass', 'Yes') }}
         <br>
        {{ Form::label('Drums', 'Drums') }}
        {{ Form::checkbox('Drums', 'Yes') }}
         <br>
        {{ Form::label('vHarmony', 'Vocal - Harmony') }}
        {{ Form::checkbox('vHarmony', 'Yes') }}
         <br>
        {{ Form::label('vLead', 'Vocal - Lead') }}
        {{ Form::checkbox('vLead', 'Yes') }}
         <br>
        {{ Form::label('keys', 'Keys') }}
        {{ Form::checkbox('keys', 'Yes') }}

    </div>


    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@stop

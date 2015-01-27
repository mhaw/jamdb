<!DOCTYPE html>
<html>
<head>
    <title>Edit - {{ $song->name }}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('song') }}">JamDB</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('song') }}">View All Songs</a></li>
        <li><a href="{{ URL::to('song/create') }}">Create a Song</a>
    </ul>
</nav>

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

</div>
</body>
</html>

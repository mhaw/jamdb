<!DOCTYPE html>
<html>
<head>
    <title>Create Song</title>
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

<h1>Create a Song</h1>

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

</div>
</body>
</html>
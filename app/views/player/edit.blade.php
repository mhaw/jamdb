<!DOCTYPE html>
<html>
<head>
    <title>Edit - {{ $player->name }}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('player') }}">JamDB</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('player') }}">View All Players</a></li>
        <li><a href="{{ URL::to('player/create') }}">Create a Player</a>
    </ul>
</nav>

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

</div>
</body>
</html>

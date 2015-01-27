<!DOCTYPE html>
<html>
<head>
    <title>{{ $player->name }}</title>
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

<h1>Showing {{ $player->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $player->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $player->email }}<br>
        </p>
    </div>

</div>
</body>
</html>
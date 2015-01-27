<!DOCTYPE html>
<html>
<head>
    <title>{{ $song->name }}</title>
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

<h1>Showing {{ $song->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $song->name }}</h2>
        <p>
            <strong>Artist:</strong> {{ $song->artist }}<br>
        </p>
    </div>

</div>
</body>
</html>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('player') }}">JamDB</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('player') }}">View All Players</a></li>
        <li><a href="{{ URL::to('player/create') }}">Create a Player</a>
    </ul>
</nav>
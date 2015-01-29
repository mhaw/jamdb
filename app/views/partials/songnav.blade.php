<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('song') }}">JamDB</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('song') }}">View All Songs</a></li>
        <li><a href="{{ URL::to('song/create') }}">Create a Song</a>
    </ul>
</nav>
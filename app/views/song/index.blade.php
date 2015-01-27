<!DOCTYPE html>
<html>
<head>
    <title>All Songs</title>
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

<h1>All the Songs</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Artist</td>
        </tr>
    </thead>
    <tbody>
    @foreach($songs as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->artist }}</td>

            <td>

                {{ Form::open(array('url' => 'song/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('song/' . $value->id) }}">Show</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('song/' . $value->id . '/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
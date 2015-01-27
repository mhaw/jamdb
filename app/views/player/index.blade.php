<!DOCTYPE html>
<html>
<head>
    <title>All Players</title>
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

<h1>All the Players</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
    @foreach($players as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>

            <td>

                {{ Form::open(array('url' => 'player/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('player/' . $value->id) }}">Show</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('player/' . $value->id . '/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
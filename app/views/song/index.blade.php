
@extends('layouts._master')

@section('title')
All Songs
@stop

@section('nav')
    @include('partials.songnav')
@stop

@section('content')
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

@stop

@stop

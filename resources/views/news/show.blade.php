@extends('layouts.app')

@section('content')
    <h3>{{$news->heading}}</h3>
    <div>{!! $news->body !!}</div>
    <hr>
    <h3>{{$news->heading_ta}}</h3>
    <div>{!! $news->body_ta !!}</div>
    <hr>
    
    {!! Form::open(['action' => ['NewsController@destroy',$news->id] , 'method' => 'POST' , 'class' => 'float-right']) !!}
        {{ Form::hidden('_method','DELETE')}}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <a href= "{{$news->id}}/edit" class="btn btn-secondary"> Edit</a>
@endsection
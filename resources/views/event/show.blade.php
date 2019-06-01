@extends('layouts.app')

@section('content')
    <div>Date {!! date('d-m-Y', strtotime($event->from_date))  !!} - {!! date('d-m-Y', strtotime($event->to_date)) !!}</div>
    <div>Time {!! date("H:i A", strtotime($event->from_time))   !!} - {!! date("H:i A", strtotime($event->to_time)) !!}</div>
    <hr>
    <h3>{{$event->name}}</h3>
    <div>{!! $event->venue !!}</div>
    <hr>
    <h3>{{$event->name_ta}}</h3>
    <div>{!! $event->venue_ta !!}</div>
    <hr>
        <img style="width:100%" src="{{ asset('/storage/event_images/'.$event->cover_image) }}">
    <hr>
    {!! Form::open(['action' => ['NewsController@destroy',$event->id] , 'method' => 'POST' , 'class' => 'float-right']) !!}
        {{ Form::hidden('_method','DELETE')}}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    
    <a href= "{{$event->id}}/edit" class="btn btn-secondary"> Edit</a>
@endsection
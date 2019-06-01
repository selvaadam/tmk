@extends('layouts.app')

@section('content')
<h3> Create Event</h3>
<br>
<br>
{!! Form::open(['action' => 'EventController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <div class='form-group'>
        {{ Form::label('from_date','From Date')}} 
        {{ Form::date('from_date'  ,'' ,[ 'class'=>'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('to_date','To Date')}} 
        {{ Form::date('to_date'  ,'' ,[ 'class'=>'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('from_time','From Time')}} 
        {{ Form::time('from_time'  ,'' ,[ 'class'=>'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('to_time','To Time')}} 
        {{ Form::time('to_time'  ,'' ,[ 'class'=>'form-control']) }}
    </div>
    <br>
    <br>
    <div class='form-group'>
            {{ Form::label('name','Event Name')}} 
            {{ Form::text('name','' ,[ 'class'=>'form-control'] ) }}
        </div>
    <div class='form-group'>
            {{ Form::label('venue','Venue')}} 
            {{ Form::text('venue' ,'' , ['id'=> 'venue' , 'class'=>'form-control'] ) }}
    </div>
    <br>
    <br>
    <div class='form-group'>
            {{ Form::label('name_ta','Event Name in Tamil')}} 
            {{ Form::text('name_ta','' ,[ 'class'=>'form-control'] ) }}
        </div>
    <div class='form-group'>
            {{ Form::label('venue_ta','Venue in Tamil')}} 
            {{ Form::text('venue_ta' ,'' , ['id'=> 'venue_ta' , 'class'=>'form-control'] ) }}
    </div>
    <br>
    <br>
    <div class='form-group'>
        {{ Form::file('cover_image')}} 
    </div>
    <br>
    <br>
    {{ Form::submit('Submit') }}
{!! Form::close() !!}
@endsection
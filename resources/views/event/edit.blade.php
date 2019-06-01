@extends('layouts.app')

@section('content')
<h3> Update Event</h3>
{!! Form::open(['action' => ['EventController@update',$event->id] , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                <div class='form-group'>
                        {{ Form::label('from_date','From Date')}} 
                        {{ Form::date('from_date'  ,date('Y-m-d', strtotime($event->from_date)) ,[ 'class'=>'form-control']) }}
                </div>
                <div class='form-group'>
                        {{ Form::label('to_date','To Date')}} 
                        {{ Form::date('to_date'  ,date('Y-m-d', strtotime($event->to_date)) ,[ 'class'=>'form-control']) }}
                </div>

                <div class='form-group'>
                        {{ Form::label('from_time','From Time')}} 
                        {{ Form::time('from_time'  ,$event->from_time ,[ 'class'=>'form-control']) }}
                </div>

                <div class='form-group'>
                        {{ Form::label('to_time','To Time')}} 
                        {{ Form::time('to_time'  ,$event->to_time ,[ 'class'=>'form-control']) }}
                </div>
            <div class='form-group'>
                    {{ Form::label('name','Event Name')}} 
                    {{ Form::text('name',$event->name ,[ 'class'=>'form-control'] ) }}
                </div>
            <div class='form-group'>
                    {{ Form::label('venue','Venue')}} 
                    {{ Form::text('venue' ,$event->venue , ['id'=> 'venue' , 'class'=>'form-control'] ) }}
            </div>
            <br>
            <br>
            <br>
            <div class='form-group'>
                    {{ Form::label('name_ta','Event Name Tamil')}} 
                    {{ Form::text('name_ta',$event->name_ta ,[ 'class'=>'form-control'] ) }}
                </div>
            <div class='form-group'>
                    {{ Form::label('venue_ta','Venue')}} 
                    {{ Form::text('venue_ta' ,$event->venue_ta , ['id'=> 'venue_ta' , 'class'=>'form-control'] ) }}
            </div>
            <br>
            <br>
            <div class='form-group'>
                {{ Form::file('cover_image')}} 
            </div>
    {{ Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection

@extends('layouts.app')

@section('content')
<h3> Create News</h3>
{!! Form::open(['action' => 'NewsController@store' , 'method' => 'POST']) !!}
    <div class='form-group'>
        {{ Form::label('heading','Heading')}} 
        {{ Form::text('heading'  ,'' ,[ 'class'=>'form-control']) }}
    </div>
    <div class='form-group'>
            {{ Form::label('body','Body')}} 
            {{ Form::textarea('body' ,'' , ['id'=> 'body' , 'class'=>'form-control'] ) }}
    </div>
    <br>
    <br>
    <br>
    <div class='form-group'>
            {{ Form::label('heading_ta','Heading Tamil')}} 
            {{ Form::text('heading_ta','' ,[ 'class'=>'form-control'] ) }}
        </div>
    <div class='form-group'>
            {{ Form::label('body_ta','Body Tamil')}} 
            {{ Form::textarea('body_ta','' ,[ 'id'=> 'body_ta' ,'class'=>'form-control'] ) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
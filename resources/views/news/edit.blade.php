@extends('layouts.app')

@section('content')
<h3> Update News</h3>
<br>
{!! Form::open(['action' => ['NewsController@update',$news->id] , 'method' => 'POST']) !!}
    <div class='form-group'>
        {{ Form::label('heading','Heading')}} 
        {{ Form::text('heading'  ,$news->heading ,[ 'class'=>'form-control']) }}
    </div>
    <div class='form-group'>
            {{ Form::label('body','Body')}} 
            {{ Form::textarea('body' ,$news->body , ['id'=> 'body' , 'class'=>'form-control'] ) }}
    </div>
    <br>
    <div class='form-group'>
            {{ Form::label('heading_ta','Heading Tamil')}} 
            {{ Form::text('heading_ta',$news->heading_ta ,[ 'class'=>'form-control'] ) }}
        </div>
    <div class='form-group'>
            {{ Form::label('body_ta','Body Tamil')}} 
            {{ Form::textarea('body_ta',$news->body_ta ,[ 'id'=> 'body_ta' ,'class'=>'form-control'] ) }}
    </div>
    {{ Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
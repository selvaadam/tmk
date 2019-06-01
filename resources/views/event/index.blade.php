@extends('layouts.app')

@section('content')
<div>
        <a href= "event/create" class='btn btn-primary float-right'> Create a new Event </a>
</div>
<br>
<br>
@if(count($events) > 0)
    <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Event</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td><a href= "event/{{$event->id}}" > {{$event->name}} </a></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
        <h3> No events</h3>
@endif
@endsection
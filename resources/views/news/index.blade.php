@extends('layouts.app')

@section('content')
<div>
    <a href= "news/create" class='btn btn-primary float-right'> Create a new News </a>
</div>
<br>
<br>
@if(count($news) > 0)
    @foreach ($news as $item)
        <div class="well">
            <h3> <a href= "news/{{$item->id}}" > {{$item->heading}} </a> </h3>
        </div>
    @endforeach
    {{ $news->links() }}
@else
        <h3> No News</h3>
@endif
@endsection
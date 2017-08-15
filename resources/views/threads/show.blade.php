@extends('layouts.app')


@section('content')
    <h3>{{$thread->title}}</h3>
    <article>
        {{$thread->body}}
    </article>

    <h4>Replies</h4>
    @foreach($thread->replies as $reply)

        <h4>{{ $reply->owner->name }} commented {{ $reply->created_at->diffForHumans() }}</h4>
        <li>{{ $reply->body }}</li>
    @endforeach
    <hr>
@endsection
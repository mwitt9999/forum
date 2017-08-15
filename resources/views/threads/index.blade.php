@extends('layouts.app')


@section('content')
    @foreach($threads as $thread)
        <h3><a href="/threads/{{ $thread->id }}">{{$thread->title}}</a></h3>
        <article>
            {{$thread->body}}
        </article>
        <hr>
    @endforeach
@endsection
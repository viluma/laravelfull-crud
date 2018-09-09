@extends('layout.app')


@section('content')
<a href="/myblog/public/posts" class="btn btn-default">Go back</a>
<div class="well">
<h1> {{$post->title}}</h1>

<p>{{$post->body}}</p>
</div>
@endsection
@extends('layout.app')


@section('content')
<a href="/myblog/public/posts" class="btn btn-default">Go back</a>
<div class="well">
<h1> {{$post->title}}</h1>

<p>{!!$post->body!!}</p>
</div>
<hr>
<a href="/myblog/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit post</a>
{!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=> 'btn btn-danger'])}}

{!! Form::close() !!}
@endsection
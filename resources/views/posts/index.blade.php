@extends('layout.app')


@section('content')

<h1> Posts</h1>

@if(count($posts)>0) 
         
       
      <div class="well">
      	

     @foreach($posts as $post)
     <p><a href="/myblog/public/posts/{{$post->id}}"> {{$post->title}}</a></p>
     <small> {{$post->created_at}}</small>

      @endforeach

     </div>
     {{$posts->links()}}
     @else
     <p> No posts found</p>
        @endif

@endsection
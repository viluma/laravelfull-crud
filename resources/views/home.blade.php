@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  

 <ul class="nav navbar-nav navbar-right">
            <li><a href="/myblog/public/posts/create">Create post</a> </li>

          </ul>
          <h3>your blog posts </h3>  
          @if(count($posts)>0)

                 <table class="table table-striped">
                 <tr>
              
                <th>Title</th>
                  <th></th>
                  </tr>

                 @foreach($posts as $post)

                  <tr>

                    <th>{{$post->title}}</th>

                      <th><a href="/myblog/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                        <th>{!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=> 'btn btn-danger'])}}

{!! Form::close() !!}</th>  
                  </tr>
                  @endforeach

          </table>
          

          @else
            <h3> You have no posts</h3>
            @endif

                        </div>
            </div>
        </div>
    </div>
</div>
@endsection

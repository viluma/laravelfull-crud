@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

 <ul class="nav navbar-nav navbar-right">
            <li><a href="/myblog/public/posts/create">Create post</a> </li>

          </ul>
          <h3>your blog posts </h3>                </div>
            </div>
        </div>
    </div>
</div>
@endsection

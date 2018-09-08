  @extends('layout.app')
      

      @section('content')


       <h1>{{$titulo}}</h1>

        @if(count($services)>0) 
         <ul>
        @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
        </ul>

      @endforeach
    
        @endif 
   @endsection
@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
   
@stop

@section('content')

<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>


    <div>
   
 {{Form::open(array('url' => '/list', 'method' => 'GET'));}}
    
    {{Form::label('query','Search');}}
    {{Form::text('query');}}
    {{Form::submit('Search');}}
    {{Form::close()}}
 <h2>You searched for {{{$query}}}</h2>

</div>



   

   
@stop

@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
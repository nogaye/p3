@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
   
@stop

@section('content')
    <div>
    <h1>Welcome!</h1>
    <h1>Hello {{{ $name }}}</h1>

     <h1>Hello {{{ $user }}}</h1>

    @foreach($fruit as $key => $value) 
    <section> 
    	<h2>
    {{ $key }} : {{ $value }}
    </h2>
    </section>
	@endforeach  

</div>

<form method='GET' action='/list'>
    <label for='query'> Search: </label>
  <input type='text'/>
   <input type='submit' value='Search'/>
    </form>

    {{Form::open(array('url' => '/list', 'method' => 'GET'));}}
    
    {{Form::label('query','Search');}}
    {{Form::text('query');}}
    {{Form::submit('Search');}}
    {{Form::close()}}

    <h2>You searched for {{{$query}}}</h2>
@stop

@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
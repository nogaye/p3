@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
   
@stop

@section('content')

   <div class="jumbotron">
        <p class="lead">
                This tool randomly generates paragraphs of Lorem ipsum or a random list of usernames, depending on user’s specifications.
         </p>
         <p>
            This is useful as it enables the developer to focus on coding. 
            <p/>
           
        </div>

        <div class="row">


            <div class="col-lg-6">
                <form method='GET' action='/GenerateLoremIpsum'>
   
                <h4>Lorem Ipsum Generator</h4>
                <p>Lorem ipsum is a filler text commonly used to demonstrate the graphic elements 
                    of a document. Replacing meaningful content, that could be distracting, with placeholder 
                    text  allows viewers to focus on graphic aspects such as font, typography, and page layout</p>

                  <input type='submit'class="btn btn-lg btn-success" value='Generate Lorem Ipsum'/>
                  </form>
            </div>

            <div class="col-lg-6">
                 <form method='GET' action='/GenerateRandomUsers'>
   
                <h4>Random User Generator</h4>
                <p>The random username generator lets you generate lists of random usernames. This allows a developer to focus on the development work instead of spending time creating usernames.</p>

                 <input type='submit'class="btn btn-lg btn-success" value='Generate Random Users'/>
                  </form>
            </div>
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
@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
   
@stop

@section('content')

   <div class="jumbotron">
            <p class="lead">
                This tool randomly generates paragraphs of lorem ipsum or list of usernames, depending on user’s specifications.
            </p>
        
           
    </div>

        <div class="row">


            <div class="col-lg-6">
                <form method='GET' action='/loremipsum'>
   
                <h4>Lorem Ipsum Generator</h4>
                <p>
                    Lorem ipsum is a filler text commonly used to demonstrate the graphic elements 
                    of a document by replacing meaningful content with placeholder 
                    text.
                </p>

                  <input type='submit' class="btn btn-lg btn-success" value='Generate Lorem Ipsum'/>
                  </form>
            </div>

            <div class="col-lg-6">
                 <form method='GET' action='/users'>
   
                <h4>Random User Generator</h4>
                <p>
                    The random username generator generate a list of random usernames. This is useful as it enables the developer to focus on coding.
                </p>

                 <input type='submit' class="btn btn-lg btn-success" value='Generate Random Users'/>
                  </form>
            </div>
        </div>
    
        
@stop

@section('footer')
   
@stop
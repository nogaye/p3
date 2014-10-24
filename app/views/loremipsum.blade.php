@extends('_master')

@section('title')
    Generate Lorem Ipsum
@stop

@section('head')
   
@stop

@section('content')

   
                <form method='GET' action='/loremipsum'>
   
                <h4>Lorem Ipsum Generator</h4>
                <p>
                    Lorem ipsum is a filler text commonly used to demonstrate the graphic elements 
                    of a document by replacing meaningful content with placeholder 
                    text.
                </p>

                  <input type='submit'class="btn btn-lg btn-success" value='Generate Lorem Ipsum'/>
                  </form>


   

   
@stop

@section('footer')
   
@stop
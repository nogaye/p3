@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
   
@stop

@section('content')

 <h4>Random User Generator</h4>
                 <p>
                    The random username generator generate a list of random usernames. This is useful as it enables the developer to focus on coding.
                </p>


<hr/>


                 <form method='GET' action='/users/list/'>
   
               


                <p>
                   
                     <label for='number_of_users'> How many users do you want to generate (Max 99)? </label>
                    
                      <input type="number" min="1" max="99" required="required" name="number_of_users" value="<?php echo $number_of_users; ?>" />
                  <p/>

                 <input type='submit'class="btn btn-lg btn-success" value='Generate Random Users'/>
                  </form>

                  <div>
  
    <h1>Hello {{{ $number_of_users }}}</h1>
                  </div>
           
        
@stop

@section('footer')
   
@stop
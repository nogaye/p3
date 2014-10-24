
   

@extends('_master')

@section('title')
    Generate xkcd
@stop

@section('head')
   
@stop

@section('content')

    <?php require('xkcdlogic.php');?>
    <div class="container">
        <div class="t-title t-font">
            <span style="color: #d9534f" class="glyphicon glyphicon-lock"></span>An xkcd style password generator          
        </div>

        <form method="get" action='index.php'>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span>Settings</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>
                             <label for='number_of_words'>Number Of Words (Max 10)</label>
                        </td>
                        <td>
                            <input type="number" min="1" max="10" required="required" name="number_of_words" value="<?php echo $number_of_words; ?>" />
                        </td>
                    </tr>
                       <tr>
                        <td>
                             <label for='separator'>Word Separator</label>
                        </td>
                        <td>
                            <input type="radio" name="word_separator" value="none"  <?php if($word_separator == "none") { echo "checked=\"checked\""; } ?>/>None 
                            <input type="radio" name="word_separator" value="space" <?php if($word_separator == "space") { echo "checked=\"checked\""; } ?>/>Space 
                            <input type="radio" name="word_separator" value="camelcase" <?php if($word_separator == "camelcase") { echo "checked=\"checked\""; } ?>/>Camel Case
                            <input type="radio" name="word_separator" value="hyphen" <?php if($word_separator == "hyphen") { echo "checked=\"checked\""; } ?>/>Hyphen
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_number'>Add A Number</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_number" <?php if($add_a_number == true) { echo "checked=\"checked\"";} ?> />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='add_a_symbol'>Add A Symbol</label>
                        </td>
                        <td>
                            <input type="checkbox" name="add_a_symbol" <?php if($add_a_symbol == true) { echo "checked=\"checked\"";} ?>  />
                        </td>
                    </tr>
                    <tr>
                        <td><label for='add_a_symbol'>Add Uppercase</label> </td>
                        <td>
                            <input type="checkbox" name="add_uppercase" <?php if($add_uppercase == true) { echo "checked=\"checked\"";} ?>  />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right">
                             <input type='submit' class="btn btn-primary" value='Generate Password' />
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
        
                    <label >Your Password Is:</label>
            <h3><label class="t-circle"> <?=get_password()?> </label> </h3>
       
                </div>
            </div>
            
        </form>
        <div class="footer">
            Inspired by:   <a href="http://xkcd.com/936/">http://xkcd.com/936/ </a>
        </div>



    </div>

   
@stop

@section('footer')
   
@stop


   






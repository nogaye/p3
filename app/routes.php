<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/new', function() {

    $view  = '<form method="POST" action="/new">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});
Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});
Route::get('/books', function() {
    return 'Here are all the books...';
}); 

Route::get('/books/{category}', function($category) {
        return 'Here are all the books in the category of '.$category;
}); 

Route::get('/list/{format}', function($format = 'html') {

      
        return View::make('users');
}); 

Route::get('/home', function() {

      
        return View::make('loremipsum');
}); 



Route::get('/user/{user_id}', function($user_id) {
     //$user = User::get($user_id);
    return View::make('loremipsum');
}); 



Route::get('/list', function() {

 $user = new Item();
 $user->setName("Nick");
 $user->name = 'Nick';

 //$query = $_GET['query'];
 $query = Input::get('query');


   
    $fruit = Array('Apples', 'Oranges', 'Pears');
    echo Pre::render($fruit,'Fruit');

    $name = "Nicholas";
    return View::make('index')
        ->with('name', $name)
        ->with('fruit', $fruit)
        ->with('user', $user)
         ->with('query', $query)
        ;

});


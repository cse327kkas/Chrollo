<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*Route::get('/hello', function () {
    //return 'welcome';
    return '<h1>Hello World</h1>';

});
Route::get('/users/{id}', function($id){
    return 'This is user '.$id;
});
*/

Route::get('/', 'Pagescontroller@index');
Route::get('/about', 'Pagescontroller@about');
Route::get('/services', 'Pagescontroller@services');
Route::any('posts/hot','PostController@hot');
Route::resource('comments', 'CommentsController');


Route::resource('posts', 'PostController');

//Route::any('posts/hot','PostController@hot');
    


/*Route::get('/about', function(){
    return view('pages.about');
});
*/
Auth::routes();

Route::get('/profile', 'ProfileController@index');
Route::get('/post/{id}', 'PostController@show')->name('posts.show');
Route::post('/posts/{id}/act','PostController@actOnPost');

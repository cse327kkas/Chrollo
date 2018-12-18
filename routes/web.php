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
Route::resource('posts', 'PostController');
    


/*Route::get('/about', function(){
    return view('pages.about');
});
*/
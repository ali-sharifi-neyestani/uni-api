<?php


/*
|--------------------------------------------------------------------------
| Post
|--------------------------------------------------------------------------
|
|
*/
Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index');
});



<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
use Modules\Blogs\Http\Controllers\BlogsController;
Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', 'BlogsController@index');
    Route::get('/blogs', 'BlogsController@show');
    Route::get('/create', 'BlogsController@create');
    Route::post('/insert', ['BlogsController@insert']);
});

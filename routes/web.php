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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'FrontController@index')->name('dashboard');
//routes blog
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{slug}', 'PostController@show')->name('blog.show');
Route::get('/articles/{id}', 'CategoriesController@listArticleByCategory')->name('list.articles');
Route::post('/recherche', 'PostController@findByArticle')->name('search');
Route::post('/newsletter', 'PostController@newsletter')->name('newsletter');

Route::group(['before' => 'auth'], function (){
    Route::post('posts/{id}/comments/create', 'CommentsController@create')->name('comments.create');
});



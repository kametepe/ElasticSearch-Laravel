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

use App\Repository\IArticlesRepository;

Route::get('/search', function (IArticlesRepository $repository) {
    $articles = $repository->search((string) request('q'));

    return view('articles.index', [
        'articles' => $articles,
    ]);
});

Route::get('/', function () {
    return view('articles.index', [
        'articles' => App\Article::all(),
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



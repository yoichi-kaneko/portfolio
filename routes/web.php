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

if (config('app.env') === 'production') {
    // asset()やurl()がhttpsで生成される
    URL::forceScheme('https');
}
Route::get('/page/about', 'PageController@about');
Route::get('/page/portfolio', 'PageController@portfolio');
Route::get('/page/resume', 'PageController@resume');
Route::get('/page/private', 'PageController@private');
Route::get('/page/contact', 'PageController@contact');
Route::get('/portfolio/{id}', 'PortfolioController@detail');
Route::get('/', 'IndexController@index');


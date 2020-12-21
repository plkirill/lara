<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;

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
});

/*Route::get('/news', function () {
    return view('news');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/page', function () {
    return view('page');
}); */
Route::group([
    'prefix' => 'news',
    'as' => 'news::',
], function () {
    Route::get('/',  [NewsController::class, 'index'])
        ->name('categories');

    Route::get('/card/{id}', [NewsController::class, 'newsCard'])
        ->name('card')
        ->where('id', '[0-9]+');

    Route::get('/{categoryId}', [NewsController::class, 'list'])
        ->name('list')
        ->where('categoryId', '[0-9]+');
});
/*// news
Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/card/{id}', [NewsController::class, 'newsCard'])
    ->name('news-card')
    ->where('id', '[0-9]+');

//categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'newsCategory'])
    ->name('news-category')
    ->where('id', '\d+');

Route::get('/page', [\App\Http\Controllers\HomeController::class, 'index']);*/


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
 });

Route::get('/about', function () {

	$article = App\Articles::latest()->get();
    return view('about',['articles'=>$article]);
});

Route::get('/articles','ArticlesController@index');


// Route::get('/hello', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     $name1 = request('name');

//     return view('show',['nam'=>$name1]);
// });


// Route::get('/students/{id}', function ($id) {

// 	$ids = [
//       '1' => 'aman',
//       '2' => 'gupu'
//       	];

//     return view('show',['nam'=>$ids[$id] ?? 'nothing is here']);
// });
Route::get('/articles/create','ArticlesController@create');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}','ArticlesController@update');
Route::get('/articles/{article}','ArticlesController@show');








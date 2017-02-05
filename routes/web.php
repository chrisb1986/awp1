<!-- Routes -->
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

Route::group(['middleware' => ['web']], function () {

  Route::get('/', 'PagesController@home');
  Route::get('about', 'PagesController@about');
  Route::get('/home', 'HomeController@index');
  // Cards.
  Route::get('cards', 'CardsController@index');
  Route::get('cards/{card}', 'CardsController@show');
  Route::post('cards', 'CardsController@create');
  Route::post('cards/{card}/notes', 'NotesController@store');
  Route::get('cards/{card}/delete', 'CardsController@delete');
  // Notes.
  Route::get('notes/{note}/edit', 'NotesController@edit');
  route::patch('notes/{note}', 'NotesController@update');

  Auth::routes();
});

<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontEndController@default')->name('page_default');
Route::get('/page/{slug}', 'FrontEndController@pages')->name('pages');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{social}', 'SocialiteController@redirectToProvider')->name('socialLogin');
Route::get('login/{social}/callback', 'SocialiteController@handleProviderCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::post('backend/search', 'BackendController@search')->name('search');
    Route::get('backend/relationship/{id}/{table}/{key}/{type}', 'BackendController@relationship')->name('relationship');
    Route::get('backend/view/{table}/{id}', 'backendController@view')->name('view');
    Route::get('backend/deletes/recovery/{table}/{id}', 'BackendController@recovery')->name('recovery');
    Route::get('backend/deletes/{table}', 'BackendController@deletes')->name('deletes');
    
    Route::get('{page_id}/edit', 'PageController@edit')->name('page_edit'); 
    Route::post('/page/{page_id}/update', 'PageController@update')->name('page_update');
    Route::get('/page/{page_id}/default', 'PageController@default')->name('page_default'); 

    Route::get('{page_id}/index', 'BlockController@index')->name('block_index'); 
    Route::post('/block/update/{block_id}', 'BlockController@update')->name('block_update');
    Route::get('/block/delete/{block_id}', 'BlockController@delete')->name('block_delete');
    Route::get('/block/order/{block_id}/{order}', 'BlockController@block_ordering');

    Route::get('/block/move_up/{block_id}', 'BlockController@move_up')->name('block_move_up'); 
    Route::get('/block/move_down/{block_id}', 'BlockController@move_down')->name('block_move_down');
});

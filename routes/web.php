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

Auth::routes();

Route::get('/home', 'HomeController@index');

/*
| Controller to control vehicles
*/
Route::get('vehicle', 'VehicleController@index')
    ->name('vehicle_list_route');
Route::get('vehicle/create', 'VehicleController@create')
    ->name('vehicle_create_route');
Route::post('vehicle', 'VehicleController@store')
    ->name('vehicle_insert_route');
Route::get('vehicle/{id}', 'VehicleController@show')
    ->where('id', '[0-9]+')
    ->name('vehicle_show_route');
Route::get('vehicle/{id}/edit', 'VehicleController@edit')
    ->where('id', '[0-9]+')
    ->name('vehicle_edit_route');
Route::put('vehicle/{id}', 'VehicleController@update')
    ->where('id', '[0-9]+')
    ->name('vehicle_update_route');
Route::delete('vehicle/{id}', 'VehicleController@destroy')
    ->where('id', '[0-9]+')
    ->name('vehicle_delete_route');

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

Route::get('/test', function() {

    return view('test');
});
Route::get('/home', 'HomeController@index');
Route::get('/password/change', 'Auth\ChangePasswordController@index')
    ->name('change_password');
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
/*
* Home Page
*
*/
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/test', 'VehicleController@test');
//Route::get('/test/results', 'VehicleController@testRes')->name('test_route');


/*
* Vehicle location related routes
*   
*/
Route::get('branch', 'BranchController@index')
    ->name('branch_list_route');
Route::get('branch/create', 'BranchController@create')
    ->name('branch_create_route');
Route::post('branch', 'BranchController@store')
    ->name('branch_insert_route');
Route::get('branch/{id}', 'BranchController@show')
    ->where('id', '[0-9]+')
    ->name('branch_show_route');
Route::get('branch/{id}/edit', 'BranchController@edit')
    ->where('id', '[0-9]+')
    ->name('branch_edit_route');
Route::put('branch/{id}', 'BranchController@update')
    ->where('id', '[0-9]+')
    ->name('branch_update_route');
Route::delete('branch/{id}', 'BranchController@destroy')
    ->where('id', '[0-9]+')
    ->name('branch_delete_route');
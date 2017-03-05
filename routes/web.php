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
use App\Branch;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/test', function() {

    return view('/new/test');
});
Route::get('/home', 'HomeController@index');
//Route to display change password page
Route::get('/password/change', 'Auth\ChangePasswordController@index')
    ->name('change_password');
//Route to update password after password is entered in the form
Route::post('/password/update', 'Auth\ChangePasswordController@update')
    ->name('update_password');
/*
| Controller to control vehicles
*/
Route::post('vehicle/form_submit', 'VehicleController@processInputBasedRequest')
    ->name('vehicle_decision_route');
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
Route::post('branch/form_submit', 'BranchController@processInputBasedRequest')
    ->name('branch_decision_route');
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


/*
* Vehicle class related routes
*   
*/
Route::post('vehicle_class/form_submit', 'VehicleClassController@processInputBasedRequest')
    ->name('vehicle_class_decision_route');
Route::get('vehicle_class', 'VehicleClassController@index')
    ->name('vehicle_class_list_route');
Route::get('vehicle_class/create', 'VehicleClassController@create')
    ->name('vehicle_class_create_route');
Route::post('vehicle_class', 'VehicleClassController@store')
    ->name('vehicle_class_insert_route');
Route::get('vehicle_class/{id}', 'VehicleClassController@show')
    ->where('id', '[0-9]+')
    ->name('vehicle_class_show_route');
Route::get('vehicle_class/{id}/edit', 'VehicleClassController@edit')
    ->where('id', '[0-9]+')
    ->name('vehicle_class_edit_route');
Route::put('vehicle_class/{id}', 'VehicleClassController@update')
    ->where('id', '[0-9]+')
    ->name('vehicle_class_update_route');
Route::delete('vehicle_class/{id}', 'VehicleClassController@destroy')
    ->where('id', '[0-9]+')
    ->name('vehicle_class_delete_route');


/*
* Season related routes
*   
*/
Route::post('season/form_submit', 'SeasonController@processInputBasedRequest')
    ->name('season_decision_route');
Route::get('season', 'SeasonController@index')
    ->name('season_list_route');
Route::get('season/create', 'SeasonController@create')
    ->name('season_create_route');
Route::post('season', 'SeasonController@store')
    ->name('season_insert_route');
Route::get('season/{id}', 'SeasonController@show')
    ->where('id', '[0-9]+')
    ->name('season_show_route');
Route::get('season/{id}/edit', 'SeasonController@edit')
    ->where('id', '[0-9]+')
    ->name('season_edit_route');
Route::put('season/{id}', 'SeasonController@update')
    ->where('id', '[0-9]+')
    ->name('season_update_route');
Route::delete('season/{id}', 'SeasonController@destroy')
    ->where('id', '[0-9]+')
    ->name('season_delete_route');


/*
* Rental accessories related routes
*   
*/
Route::post('accessory/form_submit', 'RentalAccessoryController@processInputBasedRequest')
    ->name('accessory_decision_route');
Route::get('accessory', 'RentalAccessoryController@index')
    ->name('accessory_list_route');
Route::get('accessory/create', 'RentalAccessoryController@create')
    ->name('accessory_create_route');
Route::post('accessory', 'RentalAccessoryController@store')
    ->name('accessory_insert_route');
Route::get('accessory/{id}', 'RentalAccessoryController@show')
    ->where('id', '[0-9]+')
    ->name('accessory_show_route');
Route::get('accessory/{id}/edit', 'RentalAccessoryController@edit')
    ->where('id', '[0-9]+')
    ->name('accessory_edit_route');
Route::put('accessory/{id}', 'RentalAccessoryController@update')
    ->where('id', '[0-9]+')
    ->name('accessory_update_route');
Route::delete('accessory/{id}', 'RentalAccessoryController@destroy')
    ->where('id', '[0-9]+')
    ->name('accessory_delete_route');
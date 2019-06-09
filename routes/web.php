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
Auth::routes(['register' => false]);

Route::get('/', 'SquadsController@index')->name('squads');
Route::post('squads/mysquads', 'SquadsController@mysquads')->name('squads-mysquads');

Route::namespace('Admin')->middleware('auth')->group(function () {
    Route::get('squads', 'SquadsController@index')->name('admin-squads');
    Route::post('squads/store', 'SquadsController@store')->name('admin-squads-store');
    Route::post('squads/delete', 'SquadsController@delete')->name('admin-squads-delete');
});

// @todo move to command
Route::get('/syncCharacters', 'SyncController@characters');


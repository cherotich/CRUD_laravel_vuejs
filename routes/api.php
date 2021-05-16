<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Save contacts
Route::post('save_contact','contactController@save_contact');
//get contacts
Route::get('getContacts','contactController@getContacts');

//Delete contact
Route::delete('deleteContact/{id}', 'contactController@deleteContact');
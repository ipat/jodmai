<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
  return "LOGIN";
});

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('home', ['uses' => 'UserController@mainpage', 'as' => 'home']);

// All routes about mail
Route::get('mail/create', ['uses' => 'MailController@create', 'as' => 'create-mail']);
Route::get('mail/create/{mailTypeId}/{addressId}', ['uses' => 'MailController@createMailType', 'as' => 'create-mail-type']);
Route::post('mail/create/{mailTypeId}/{addressId}', ['uses' => 'MailController@handleCreateMailType', 'as' => 'handle-create-mail-type']);
Route::get('mail/mailtypes/{id}', ['uses' => 'MailController@getMailTypes', 'as' => 'get-mail-types']);

// All routes about user
Route::get('user/address', ['uses' => 'UserController@getUserAddresses', 'as' => 'get-user-addresses']);
Route::post('user/address/create', ['uses' => 'UserController@postCreateUserAddress', 'as' => 'create-user-address']);

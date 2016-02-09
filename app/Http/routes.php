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
Route::get('blog', ['uses' => 'UserController@blog', 'as' => 'blog']);
Route::get('blog/{id}', ['uses' => 'UserController@blogDetails', 'as' => 'blog-details']);
Route::get('addCredit', ['uses' => 'UserController@addCredit', 'as' => 'add-credit']);
Route::get('yourMail', ['uses' => 'UserController@yourMail', 'as' => 'your-mail']);
Route::get('addCoupon', ['uses' => 'UserController@addCoupon', 'as' => 'add-coupon']);
Route::post('addCoupon', ['uses' => 'UserController@handleAddCoupon', 'as' => 'handle-add-coupon']);

// All routes about mail
Route::get('mail/details/{id}', ['uses' => 'MailController@mailDetails', 'as' => 'mail-details']);
Route::get('mail/create', ['uses' => 'MailController@create', 'as' => 'create-mail']);
Route::get('mail/create/{mailTypeId}/{receiverAddressId}/{senderAddressId}', ['uses' => 'MailController@createMailType', 'as' => 'create-mail-type']);
Route::post('mail/create/{mailTypeId}/{receiverAddressId}/{senderAddressId}', ['uses' => 'MailController@handleCreateMailType', 'as' => 'handle-create-mail-type']);
Route::get('mail/mailtypes/{id}', ['uses' => 'MailController@getMailTypes', 'as' => 'get-mail-types']);


Route::get('admin', ['uses' => 'AdminController@mainpage', 'as' => 'admin-home']);
Route::get('admin/blog', ['uses' => 'AdminController@adminBlog', 'as' => 'admin-blog']);
Route::get('admin/blog/edit/{id}', ['uses' => 'AdminController@editBlog', 'as' => 'edit-blog']);
Route::post('admin/blog/edit/{id}', ['uses' => 'AdminController@handleEditBlog', 'as' => 'handle-edit-blog']);
Route::post('admin/blog/delete/{id}', ['uses' => 'AdminController@deleteBlog', 'as' => 'delete-blog']);
Route::get('admin/createBlog', ['uses' => 'AdminController@createBlog', 'as' => 'create-blog']);
Route::post('admin/createBlog', ['uses' => 'AdminController@handleCreateBlog', 'as' => 'handle-create-blog']);

// Payment Route
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'IndexController@postPayment',
));

// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'IndexController@getPaymentStatus',
));

// All routes about user
Route::get('user/address', ['uses' => 'UserController@getUserAddresses', 'as' => 'get-user-addresses']);
Route::get('user/sender-address', ['uses' => 'UserController@getSenderAddresses', 'as' => 'get-sender-addresses']);
Route::post('user/address/create', ['uses' => 'UserController@postCreateUserAddress', 'as' => 'create-user-address']);
Route::post('user/sender-address/create', ['uses' => 'UserController@postCreateSenderAddress', 'as' => 'create-sender-address']);

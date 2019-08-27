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
Route::get('gift-construct', 'ProjectController@index')->name('gift-construct');
Route::get('/gift-construct/{id}', 'ProjectController@show')->name('show_gift');
Route::delete('/gift-construct/{id}', 'ProjectController@destroy')->name('delete_gift');
Route::get('/gift-construct/{id}/edit', 'ProjectController@edit')->name('edit_gift');
Route::post('/gift-construct/{id}/edit', 'ProjectController@update')->name('update_gift');

Route::get('/createProjects', 'ProjectController@index')->name('project');
Route::get('createProject', 'ProjectController@create')->name('create');
Route::post('createProject', 'ProjectController@store')->name('create_project');
Route::get('gift-construct/{id}', 'ProjectController@show')->name('show_project');
Route::delete('createProject/{id}', 'ProjectController@destroy')->name('delete_project');

Route::get('/leads', 'LeadController@index')->name('leads');
//Route::get('lead', 'LeadController@create')->name('create');
Route::post('leads', 'LeadController@store')->name('create_lead');
//Route::get('leads', 'LeadController@show')->name('show_lead');





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'HomeController@index')->name('account');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/{id}', 'ProfileController@show')->name('show_profile');
Route::post('/profile', 'ProfileController@update')->name('update_profile');
Route::get('/change-password', 'ChangePasswordController@index')->name('password-page');
Route::post('/change-password', 'ChangePasswordController@changePassword')->name('change-password');



Route::get('/referral', function () {
	return view('pages.referral');
});

Route::get('/auth', function () {
	return view('auth.auth');
});

Route::get('/payment', function () {
	return view('pages.payment');
});


Route::get('/pay', function () {
    return view('pages.pay');
});


Route::get('/pay1', 'Payment@checkoutInfo')->name('refundPayment');

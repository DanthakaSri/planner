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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Adminauth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Adminauth\LoginController@login');

Route::post('admin-password/email', 'Adminauth\ForgotPasswordController@sendResetLinkEmail')->name('admin.passwords.email');
Route::get('admin-password/reset', 'Adminauth\ForgotPasswordController@showLinkRequestForm')->name('admin.passwords.request');

Route::post('admin-password/reset', 'Adminauth\ForgotPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Adminauth\ResetPasswordController@showResetForm')->name('admin.passwords.reset');
Route::get('admin/register', 'Adminauth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Adminauth\RegisterController@register');

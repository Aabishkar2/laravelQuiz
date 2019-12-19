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
Route::any('/login', 'Auth\LoginController@showLoginForm')->name('user.login');
Route::any('/checklogin', 'Auth\LoginController@login')->name('user.checklogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/dashboard', 'User\DashboardController@index')->name('user.dashboard');

Route::get('/profile', 'User\ProfileController@index')->name('user.profile.index');
Route::post('/profile/post', 'User\ProfileController@update')->name('user.profile.update');

Route::any('/details', 'User\AboutController@index')->name('user.about.index');
Route::any('/details/post', 'User\AboutController@update')->name('user.about.update');

Route::any('/social', 'User\SocialController@index')->name('user.social.index');
Route::any('/social/post', 'User\SocialController@update')->name('user.social.update');

Route::any('/workinghour', 'User\WorkingHourController@index')->name('user.working_hour.index');
Route::any('/workinghour/post', 'User\WorkingHourController@update')->name('user.working_hour.update');

Route::any('/gallery', 'User\GalleryController@index')->name('user.gallery.index');
Route::any('/gallery/post', 'User\GalleryController@update')->name('user.gallery.update');

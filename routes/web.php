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
Route::any('/sets/add/{id}', 'User\DashboardController@addSet')->name('admin.sets.add');
Route::any('/sets/update/{id}', 'User\DashboardController@updateSet')->name('admin.sets.update');
Route::any('/sets/question/add/{setId}', 'User\DashboardController@addQuestion')->name('admin.sets.addquestion');
Route::any('/sets/question/update/{setId}', 'User\DashboardController@updateQuestion')->name('admin.sets.updatequestion');

Route::any('/test/{token}/{setId}/{qno}', 'User\DashboardController@testSet')->name('user.testset');
Route::any('/test/submission/{token}', 'User\DashboardController@submission')->name('user.test.submission');

Route::any('/sets/generatetoken/{setId}', 'User\DashboardController@generateToken')->name('user.sets.generatetoken');

Route::any('/sets/saveCount', 'User\DashboardController@counter')->name('user.sets.counter');





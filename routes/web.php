<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
    return redirect()->route('register');
});

// Route::get('/', 'RegisterController@showRegistrationForm')->name('/');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/print-pass', 'HomeController@printPass')->name('print-pass');
Route::get('/business-match', 'HomeController@index')->name('business-match');
Route::get('/make-favourite', 'HomeController@makeFav')->name('make-favourite');

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');



Route::get('/dashboard', 'AdminController@index')->name('dashboard')->middleware('auth:admin');
Route::get('/application/{id}', 'AdminController@application')->name('application')->middleware('auth:admin');
Route::get('/view-indiv/{id}', 'AdminController@viewIndv')->name('view-indiv')->middleware('auth:admin');

Route::get('/matching-admin', 'AdminController@matchingAdmin')->name('matching-admin')->middleware('auth:admin');



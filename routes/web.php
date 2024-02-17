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

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');


Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/application/{id}', 'AdminController@application')->name('application');
Route::get('/view-indiv/{id}', 'AdminController@viewIndv')->name('view-indiv');



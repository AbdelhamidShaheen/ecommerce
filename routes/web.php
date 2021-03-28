<?php

use Illuminate\Support\Facades\Route;



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

$Locale=App::currentLocale();
Route::get('/', function () {
    return redirect()->route('home');
});
Route::prefix($Locale)->group(function () {
   Route::get('/home',"HomeController@Index")->name('home');
   Route::get('/signup',"UserController@SignUp")->name('signup');
   Route::post('/signup',"UserController@PostSignUp")->name('postsignup');
   Route::get('/signin',"UserController@SignIn")->name('signin');
   Route::post('/signin',"UserController@PostSignIn")->name('postsignin');
});

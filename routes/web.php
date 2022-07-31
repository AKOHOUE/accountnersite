<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Proteges\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FrontendController;

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
 Route::resource('blogs', BlogsController::class)->middleware('auth');

 Route::get('/','App\Http\Controllers\FrontendController@home')->name('front.home');
 Route::get('about', 'App\Http\Controllers\FrontendController@about')->name('front.about');
 Route::get('services', 'App\Http\Controllers\FrontendController@services')->name('front.services');
 Route::get('prot', 'App\Http\Controllers\FrontendController@prot')->name('front.prot');
 Route::get('contact', 'App\Http\Controllers\FrontendController@contact')->name('front.contact');
 Route::get('compte', 'App\Http\Controllers\FrontendController@compte')->name('front.compte');


 Route::get('login', 'App\Http\Controllers\FrontendController@login')->name('front.login');


 Route::get('reset', 'App\Http\Controllers\FrontendController@reset')->name('front.reset');
 
 Route::post('customRegistration', 'App\Http\Controllers\FrontUsersController@customRegistration')->name('front.customRegistration');
 Route::post('customLogin', 'App\Http\Controllers\FrontUsersController@customLogin')->name('front.customLogin');

 Route::post('connexion', 'App\Http\Controllers\FrontUsersController@loginFrontPost')->name('front.loginFrontPost');
 Route::get('logout', 'App\Http\Controllers\FrontUsersController@logout')->name('front.logout');

 Route::get('monCompte', 'App\Http\Controllers\FrontUsersController@monCompte')->name('front.monCompte');


 
 



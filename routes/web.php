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



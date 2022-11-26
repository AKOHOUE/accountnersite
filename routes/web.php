<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Proteges\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

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
 Route::post('emprunter', 'App\Http\Controllers\FrontUsersController@emprunter')->name('front.emprunter');
 Route::get('empruntForm', 'App\Http\Controllers\FrontUsersController@empruntForm')->name('front.empruntForm');

 
 Route::post('customLogin', 'App\Http\Controllers\FrontUsersController@customLogin')->name('front.customLogin');

 Route::post('connexion', 'App\Http\Controllers\FrontUsersController@loginFrontPost')->name('front.loginFrontPost');
 Route::get('logout', 'App\Http\Controllers\FrontUsersController@logout')->name('front.logout');

 Route::get('monCompte', 'App\Http\Controllers\FrontUsersController@monCompte')->name('front.monCompte');


 Route::get('login', 'App\Http\Controllers\FrontendController@login')->name('front.login');


 Route::get('registrationAdmin', 'App\Http\Controllers\CustomAuthController@registrationAdmin')->name('back.registrationAdmin');
 Route::get('adminConnexion', 'App\Http\Controllers\CustomAuthController@adminConnexion')->name('back.adminConnexion');
 Route::post('adminRegistration', 'App\Http\Controllers\CustomAuthController@adminRegistration')->name('back.adminRegistration');
 Route::post('adminLogin', 'App\Http\Controllers\CustomAuthController@adminLogin')->name('back.adminLogin');
 Route::get('adminlogout', 'App\Http\Controllers\CustomAuthController@adminlogout')->name('back.adminlogout');


 Route::get('dashboard', 'App\Http\Controllers\CustomAuthController@dashboard')->name('back.dashboard');
 Route::get('clients', 'App\Http\Controllers\CustomAuthController@clients')->name('back.clients');
 Route::get('clientsActifs', 'App\Http\Controllers\CustomAuthController@clientsActifs')->name('back.clientsActifs');
 Route::get('clientsInactifs', 'App\Http\Controllers\CustomAuthController@clientsInactifs')->name('back.clientsInactifs');
 Route::get('depotsClients', 'App\Http\Controllers\CustomAuthController@depotsClients')->name('back.depotsClients');
 Route::get('virementsClients', 'App\Http\Controllers\CustomAuthController@virementsClients')->name('back.virementsClients');
 Route::get('operationsClients', 'App\Http\Controllers\CustomAuthController@operationsClients')->name('back.operationsClients');
 Route::get('profileAdmin', 'App\Http\Controllers\CustomAuthController@profileAdmin')->name('back.profileAdmin');
 Route::get('contacts', 'App\Http\Controllers\CustomAuthController@contacts')->name('back.contacts');

 
 Route::post('demandeOpsVirement', 'App\Http\Controllers\OpsController@demandeOpsVirement')->name('front.demandeOpsVirement');

 Route::post('demandeOpsDepot', 'App\Http\Controllers\OpsController@demandeOpsDepot')->name('front.demandeOpsDepot');

 

 Route::post('virementCode1', 'App\Http\Controllers\OpsController@virementCode1')->name('front.virementCode1');

 Route::post('virementCode2', 'App\Http\Controllers\OpsController@virementCode2')->name('front.virementCode2');
 Route::post('virementCode3', 'App\Http\Controllers\OpsController@virementCode3')->name('front.virementCode3');
 Route::post('depotCode1', 'App\Http\Controllers\OpsController@depotCode1')->name('front.depotCode1');

 Route::post('depotCode2', 'App\Http\Controllers\OpsController@depotCode2')->name('front.depotCode2');
 Route::post('depotCode3', 'App\Http\Controllers\OpsController@depotCode3')->name('front.depotCode3');

 Route::get('depot', 'App\Http\Controllers\OpsController@depot')->name('front.depot');

 Route::get('transfert', 'App\Http\Controllers\OpsController@transfert')->name('front.transfert');

 Route::get('{id}/editClient', 'App\Http\Controllers\CustomAuthController@editClient')->name('back.editClient');
 Route::get('{id}/detailClient', 'App\Http\Controllers\CustomAuthController@detailClient')->name('back.detailClient');
 Route::post('{id}/modificationClient', 'App\Http\Controllers\CustomAuthController@modificationClient')->name('back.modificationClient');
 Route::get('{id}/deleteClient', 'App\Http\Controllers\CustomAuthController@deleteClient')->name('back.deleteClient');

 Route::get('suiviOps', 'App\Http\Controllers\CustomAuthController@suiviOps')->name('back.suiviOps');
 Route::get('{id}/opt', 'App\Http\Controllers\CustomAuthController@opt')->name('back.opt');

 Route::post('{id}/opsUpdate', 'App\Http\Controllers\CustomAuthController@opsUpdate')->name('back.opsUpdate');

 Route::get('{id}/deleteOps', 'App\Http\Controllers\CustomAuthController@deleteOps')->name('back.deleteOps');
 

 
 
 Route::get('{id}/activerVClient', 'App\Http\Controllers\CustomAuthController@activerVClient')->name('back.activerVClient');
 Route::post('{id}/activerClient', 'App\Http\Controllers\CustomAuthController@activerClient')->name('back.activerClient');
 
 Route::get('{id}/depotsClient', 'App\Http\Controllers\CustomAuthController@depotsClient')->name('back.depotsClient');
 Route::post('{id}/depotClient', 'App\Http\Controllers\CustomAuthController@depotClient')->name('back.depotClient');

 Route::get('{id}/desactiverVClient', 'App\Http\Controllers\CustomAuthController@desactiverVClient')->name('back.desactiverVClient');
 Route::post('{id}/desactiverClient', 'App\Http\Controllers\CustomAuthController@desactiverClient')->name('back.desactiverClient');
 
 Route::get('{id}/passwordVueClient', 'App\Http\Controllers\CustomAuthController@passwordVueClient')->name('back.passwordVueClient');
 Route::post('{id}/passwordClient', 'App\Http\Controllers\CustomAuthController@passwordClient')->name('back.passwordClient');
 
 Route::post('me', 'App\Http\Controllers\CustomAuthController@me')->name('back.me');


 Route::resource('contactsUi', ContactController::class);


 
 
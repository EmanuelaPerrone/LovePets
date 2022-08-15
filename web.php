<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AssocController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contattiController;
use App\Http\Controllers\segnalazioniController;



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

Auth::routes();

Route::view('/', 'welcome')->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Cosa fare
Route::get('/cosaFare', [contattiController::class, 'cosaFare'])->name('cosaFare');
// Contatti
Route::get('/contatti', [contattiController::class, 'contatti'])->name('contatti');
// Adozioni
Route::get('/adozioni', [contattiController::class, 'showAdozioniSloggato'])->name('adozioni');
// Appelli
Route::get('/appelli', [segnalazioniController::class, 'appelliSloggato'])->name('appelli');
// FAQ
Route::get('/faq', [contattiController::class, 'faq'])->name('faq');



// Login:
// Google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
// Facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
// Instagram
Route::get('login/instagram', [App\Http\Controllers\Auth\LoginController::class, 'redirectToInstagram'])->name('login.instagram');
Route::get('login/instagram/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleInstagramCallback']);

// Login e registrazione Utente
Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:user'])->group(function(){
         Route::view('/login','auth.user.login')->name('login');
         Route::view('/register','auth.user.register')->name('register');
         Route::post('/create',[UserController::class,'create'])->name('create');
         Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:user'])->group(function(){
         Route::view('/home','auth.user.home')->name('home');
         Route::view('/','auth.user.welcome')->name('welcome');
         Route::view('/cosaFare','auth.user.cosaFare')->name('cosaFare');
         Route::get('/contatti',[contattiController::class, 'contattiUT'])->name('contatti');
         Route::get('/appelliUT',[segnalazioniController::class,'appelliUT'])->name('appelli');
         Route::get('/adozioni', [contattiController::class, 'showAdoz'])->name('adozioni');
         Route::view('/faq', 'auth.user.faq')->name('faq');
         Route::view('/segnalazione','auth.user.segnalazione')->name('segnalazione');
         Route::post('add', [segnalazioniController::class,'add']);
         Route::post('logout',[UserController::class,'logout'])->name('logout');
    });

});


// Login e registrazione Associazione
Route::prefix('associazione')->name('associazione.')->group(function(){

    Route::middleware(['guest:associazione'])->group(function(){
         Route::view('/login','auth.associazione.login')->name('login');
         Route::view('/register','auth.associazione.register')->name('register');
         Route::post('/create',[AssocController::class,'create'])->name('create');
         Route::post('/check',[AssocController::class,'check'])->name('check');
    });

    Route::middleware(['auth:associazione'])->group(function(){
         Route::view('/home','auth.associazione.home')->name('home');
         Route::view('/aggiungiAdozione','auth.associazione.aggiungiAdozione')->name('aggiungiAdozione');
         Route::get('/appelli',[segnalazioniController::class,'appelli'])->name('appelli');
         Route::get('/modificaSegn/{id}',[segnalazioniController::class,'modificaSegn'])->name('modificaSegn');
         Route::get('/cancellaSegn/{id}',[segnalazioniController::class,'cancellaSegn'])->name('cancellaSegn');
         Route::get('/cancella/{id}',[segnalazioniController::class,'cancellaAdoz'])->name('cancellaAdoz');
         Route::view('/','auth.associazione.welcome')->name('welcome');
         Route::get('/adozioni', [contattiController::class, 'showAdozioni'])->name('adozioni');
         Route::view('/cosaFare','auth.associazione.cosaFare')->name('cosaFare');
         Route::view('/faq', 'auth.associazione.faq')->name('faq');
         Route::get('/contatti',[contattiController::class, 'assocContatti'])->name('contatti');
         Route::post('aggiuntaAdoz', [segnalazioniController::class,'aggiuntaAdoz'])->name('aggiuntaAdoz');
         Route::post('/logout',[AssocController::class,'logout'])->name('logout');
         
    });

});

// Rotta segnalazione solo se autenticato
Route::group(['middleware' => ['auth']], function(){
     Route::get('/segnalazione', [segnalazioniController::class, 'formSegnalazione'])->name('segnalazione');
     Route::post('add', [segnalazioniController::class,'add']);
});

//Route::resource('/appelli', segnalazioniController::class);


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

Auth::routes();

Route::view('/', 'welcome')->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Cosa fare
Route::get('/cosaFare', [App\Http\Controllers\contattiController::class, 'cosaFare'])->name('cosaFare');
// Contatti
Route::get('/contatti', [App\Http\Controllers\contattiController::class, 'contatti'])->name('contatti');
// Adozioni
Route::get('/adozioni', [App\Http\Controllers\contattiController::class, 'showAdozioniSloggato'])->name('adozioni');
// Appelli
Route::get('/appelli', [App\Http\Controllers\segnalazioniController::class, 'appelliSloggato'])->name('appelli');
// FAQ
Route::get('/faq', [App\Http\Controllers\contattiController::class, 'faq'])->name('faq');
Route::get('/segnalazioni/personali', [App\Http\Controllers\segnalazioniController::class, 'segnalazioniPersonaliSL'])->name('segnalazioniUT');



// Login Google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


// Login e registrazione Utente
Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:user'])->group(function(){
         Route::view('/login','auth.user.login')->name('login');
         Route::view('/register','auth.user.register')->name('register');
         Route::post('/create', [App\Http\Controllers\Auth\UserController::class,'create'])->name('create');
         Route::post('/check', [App\Http\Controllers\Auth\UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:user'])->group(function(){
         Route::view('/home','auth.user.home')->name('home');
         Route::view('/','auth.user.welcome')->name('welcome');
         Route::view('/cosaFare','auth.user.cosaFare')->name('cosaFare');
         Route::get('/contatti',[App\Http\Controllers\contattiController::class, 'contattiUT'])->name('contatti');
         Route::get('/appelliUT',[App\Http\Controllers\segnalazioniController::class,'appelliUT'])->name('appelli');
         Route::get('/adozioni', [App\Http\Controllers\contattiController::class, 'showAdoz'])->name('adozioni');
         Route::get('/segnalazioni/personali', [App\Http\Controllers\segnalazioniController::class, 'segnalazioniUT'])->name('segnalazioniUT');
         Route::get('/messaggioUT', [App\Http\Controllers\segnalazioniController::class, 'messaggioUT'])->name('messaggioUT');
         Route::get('/cancellaSegn/{id}',[App\Http\Controllers\segnalazioniController::class,'cancellaSegn'])->name('cancellaSegn');
         Route::view('/faq', 'auth.user.faq')->name('faq');
         Route::view('/segnalazione','auth.user.segnalazione')->name('segnalazione');
         Route::post('add', [App\Http\Controllers\segnalazioniController::class,'add']);
         Route::post('logout',[App\Http\Controllers\Auth\UserController::class,'logout'])->name('logout');
    });

});


// Login e registrazione Associazione
Route::prefix('associazione')->name('associazione.')->group(function(){

    Route::middleware(['guest:associazione'])->group(function(){
         Route::view('/login','auth.associazione.login')->name('login');
         Route::view('/register','auth.associazione.register')->name('register');
         Route::post('/create',[App\Http\Controllers\Auth\AssocController::class,'create'])->name('create');
         Route::post('/check',[App\Http\Controllers\Auth\AssocController::class,'check'])->name('check');
    });

    Route::middleware(['auth:associazione'])->group(function(){
         Route::get('/home',[App\Http\Controllers\Auth\AssocController::class,'homeAS'])->name('home');
         Route::get('/welcome',[App\Http\Controllers\Auth\AssocController::class,'welAS'])->name('welcome');
         Route::get('/aggiungiAdozione',[App\Http\Controllers\Auth\AssocController::class,'aggiungiAdozione'])->name('aggiungiAdozione');         
         Route::get('/appelli',[App\Http\Controllers\segnalazioniController::class,'appelli'])->name('appelli');         
         Route::get('/cancellaSegn/{id_segnalazione}',[App\Http\Controllers\segnalazioniController::class,'cancellaSegn'])->name('cancellaSegn');
         Route::get('/cancella/{id}',[App\Http\Controllers\segnalazioniController::class,'cancellaAdoz'])->name('cancellaAdoz');                 
         Route::get('/adozioni', [App\Http\Controllers\contattiController::class, 'showAdozioni'])->name('adozioni');         
         Route::get('/segnalazioni/personali', [App\Http\Controllers\segnalazioniController::class, 'segnalazioniAssoc'])->name('segnalazioniAssoc');
         Route::get('/stato', [App\Http\Controllers\segnalazioniController::class, 'cambiaStato'])->name('cambiaStato');
         Route::get('/aggiorna', [App\Http\Controllers\Auth\AssocController::class, 'aggiornaUT'])->name('aggiornaUT');
         Route::get('/cosaFare',[App\Http\Controllers\Auth\AssocController::class,'cosaFareAS'])->name('cosaFare');
         Route::get('/faq',[App\Http\Controllers\Auth\AssocController::class,'faqAS'])->name('faq');
         Route::get('/contatti',[App\Http\Controllers\contattiController::class, 'assocContatti'])->name('contatti');
         Route::post('aggiuntaAdoz', [App\Http\Controllers\segnalazioniController::class,'aggiuntaAdoz'])->name('aggiuntaAdoz');
         Route::post('logout',[App\Http\Controllers\Auth\AssocController::class,'logout'])->name('logout');
         
    });

});

// Rotta segnalazione solo se autenticato
Route::group(['middleware' => ['auth']], function(){
     Route::get('/segnalazione', [App\Http\Controllers\segnalazioniController::class, 'formSegnalazione'])->name('segnalazione');
     Route::post('add', [App\Http\Controllers\segnalazioniController::class,'add'])->name('add');
});

//Route::resource('/appelli', segnalazioniController::class);


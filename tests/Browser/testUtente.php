<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class testUtente extends DuskTestCase
{
   // use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * @return void
     */

  /*   public function registrazione_utente()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/user/register')
                    ->assertSee('Registrazione Utente')
                    ->type('nome', 'Stefano')
                    ->type('cognome', 'Pioli')
                    ->type('email', 's.pioli@gmail.com')
                    ->type('telefono','3357638725')
                    ->type('password','12345678')
                    ->type('cpassword','12345678')
                    ->check('terms')
                    ->press('Registrati')
                    ->assertPathIs('/home')
                    ->assertSee('Il mio profilo');
        });
    }   */

   /* public function registrazione_utente_con_password_sbagliata()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/user/register')
                    ->assertSee('Registrazione Utente')
                    ->type('nome', 'Stefano')
                    ->type('cognome', 'Pioli')
                    ->type('email', 's.pioli@gmail.com')
                    ->type('telefono','3357638725')
                    ->type('password','123')
                    ->type('cpassword','123')
                    ->check('terms')
                    ->press('Registrati')
                    ->assertSee("Il campo password deve essere almeno di 8 caratteri.")
                    ->assertPathIs('/user/register');
        });
    }  */
  
   /*  public function login_utente()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/user/login')
                    ->assertSee('Login Utente')
                    ->type('email', 's.pioli@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')
                    ->assertPathIs('/user/home');
        });
    } */

    /* public function login_utente_sbagliata()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/user/login')
                    ->assertSee('Login Utente')
                    ->type('email', 's.pioli@gmail.com')
                    ->type('password','password_sbagliata')
                    ->press('Login')
                    ->assertSee('Password errata, riprovare.')
                    ->assertPathIs('/user/login');
        });
    } */


  /*  public function segnalazione()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/user/login')
                    ->assertSee('Login Utente')
                    ->type('email', 's.pioli@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')
                    ->assertPathIs('/user/home')
                    ->clickLink('Segnalazioni')
                    ->clickLink('Effettua una segnalazione')
                    ->attach('file', __DIR__.'\img\gatto.png')
                    ->select('animale', 'Gatto')
                    ->select('tipoSegnalazione', 'Ritrovamento di animale randagio')
                    ->select('zona', 'Bari')
                    ->check('posizione')
                    ->check('anonimo')
                    ->press('Invia')
                    ->assertDialogOpened('Sei sicuro di voler inviare questa segnalazione?')
                    ->acceptDialog()
                    ->pause(1000)
                    ->assertSee('Segnalazione inviata con successo! Ti ringraziamo del contributo.');
        });
    }  */

    protected static $migrationRun = false;

     public function setUp(): void{
         parent::setUp();

         if(!static::$migrationRun){
             $this->artisan('migrate');
             $this->artisan('db:seed');
             static::$migrationRun = true;
         }
     }
}

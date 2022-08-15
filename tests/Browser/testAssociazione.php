<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Associazione;

class testAssociazione extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    
  /* public function registrazione_associazione()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/associazione/register')
                    ->assertSee('Registrazione Associazione')
                    ->type('nome', 'Associazione Taranto')
                    ->type('cf', '72834938372')
                    ->type('email', 'associazioneTA@gmail.com')
                    ->type('telefono','3357638725')
                    ->select('sede', 'Taranto')
                    ->type('anno', '2008')
                    ->type('soci', '5')
                    ->select('zonaCompetenza', 'Puglia')
                    ->check('animali[]','Gatto')
                    ->type('password','12345678')
                    ->type('cpassword','12345678')
                    ->check('terms')
                    ->press('Registrati')
                    ->assertSee('Richiesta di registrazione inviata con successo. Verrai contattato quando la richiesta verrà elaborata.');
        });
    }  */

   /* public function registrazione_associazione_con_password_sbagliata()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/associazione/register')
                    ->assertSee('Registrazione Associazione')
                    ->type('nome', 'Associazione Taranto')
                    ->type('cf', '72834938372')
                    ->type('email', 'associazioneTA@gmail.com')
                    ->type('telefono','3357638725')
                    ->select('sede', 'Taranto')
                    ->type('anno', '2008')
                    ->type('soci', '5')
                    ->select('zonaCompetenza', 'Puglia')
                    ->check('animali[]','Gatto')
                    ->type('password','123')
                    ->type('cpassword','123')
                    ->check('terms')
                    ->press('Registrati')
                    ->assertSee('Il campo password deve essere almeno di 8 caratteri.')
                    ->assertPathIs('/associazione/register');
        });
    } */  

  /* public function login_associazione()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/associazione/login')
                    ->assertSee('Login Associazione')
                    ->type('email', 'associazioneTA@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')                    
                    ->assertPathIs('/associazione/home')
                    ->assertSee('Il mio profilo');
        });
    } */
    
  /*  public function login_associazione_errato()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/associazione/login')
                    ->assertSee('Login Associazione')
                    ->type('email', 'email_sbagliata@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')                    
                    ->assertPathIs('/associazione/login')
                    ->assertSee('Email inesistente');
        });
    } */

  /*  public function aggiungi_adozione()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/associazione/login')
                    ->assertSee('Login Associazione')
                    ->type('email', 'associazioneTA@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')    
                    ->assertPathIs('/associazione/home')                
                    ->clickLink('Adozioni')
                    ->clickLink('Aggiungi adozione')
                    ->attach('file', __DIR__.'\img\gatto.png')
                    ->type('nome','Olimpia')
                    ->type('descr', 'Gattina affettuosa e giocherellona')
                    ->select('taglia', 'Piccola')
                    ->type('eta', '2 anni')
                    ->type('contatti','associazioneTA@gmail.com')
                    ->press('Invia')
                    ->assertDialogOpened('Sei sicuro di voler aggiungere questo appello di adozione?')
                    ->acceptDialog()
                    ->pause(1000)
                    ->assertSee('Adozione aggiunta! Ti ringraziamo del contributo.');
        });
    } */

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

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Associazione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Segnalazione;
use App\Models\Adozione;
use Nexmo\Laravel\Facade\Nexmo;
use App\Mail\MessaggioUtente;
use App\Mail\PresaSegnalazione;
use App\Mail\EmailSegnalazione;


class AssocController extends Controller
{
    
    function create(Request $request){
          //Validate inputs
          $request->validate([
            'nome'=>'required|string',
            'cf'=>'required',
            'email'=>'required|email|unique:associaziones,email',
            'telefono'=>'required|integer',
            'sede'=>'required|string',
            'anno'=>'required|integer',
            'soci'=>'required|integer',
            'zonaCompetenza'=>'required|string',
            'animali'=>'required',
            'password'=>'required|min:8',
            'cpassword'=>'required|min:8|same:password'
        ]);

          $assoc = new Associazione();
          $assoc->nome = $request->nome;
          $assoc->cf = $request->cf;
          $assoc->email = $request->email;
          $assoc->telefono = $request->telefono;
          $assoc->sede = $request->sede;
          $assoc->anno = $request->anno;
          $assoc->soci = $request->soci;
          $assoc->zonaCompetenza = $request->zonaCompetenza;
          $assoc->animali = join(',', $request->animali);
          $assoc->password = \Hash::make($request->password);
         // $assoc->valida = 0;
          $save = $assoc->save();
          $assoc->attachRole('2');

          if( $save ){          
            return redirect()->back()->with('success','Richiesta di registrazione inviata con successo. Verrai contattato quando la richiesta verrà elaborata.');
          }else{
            return redirect()->back()->with('fail','Qualcosa è andato storto. Riprovare.');
          }
  }

  public function cosaFareAS(){
    if(Auth::user()){
            
      $anim = Auth::user()->animali;
      $animali = explode(',', $anim);
      $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
      $notifica = count($not);

       return view('auth.associazione.cosaFare', compact(['not', 'notifica']));

       }else{
           return redirect()->back();
     }
  }

  public function faqAS(){
    if(Auth::user()){
            
      $anim = Auth::user()->animali;
      $animali = explode(',', $anim);
      $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
      $notifica = count($not);

       return view('auth.associazione.faq', compact(['not', 'notifica']));

       }else{
           return redirect()->back();
     }
  }

  public function homeAS(){
    if(Auth::user()){
            
      $anim = Auth::user()->animali;
      $animali = explode(',', $anim);
      $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
      $notifica = count($not);

       return view('auth.associazione.home', compact(['not', 'notifica']));

       }else{
           return redirect()->back();
     }
  }

  public function aggiungiAdozione(){
    if(Auth::user()){
            
      $anim = Auth::user()->animali;
      $animali = explode(',', $anim);
      $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
      $notifica = count($not);

       return view('auth.associazione.aggiungiAdozione', compact(['not', 'notifica']));

       }else{
           return redirect()->back();
     }
  }
  
    public function welAS()
    {
        if(Auth::user()){
            
          $anim = Auth::user()->animali;
          $animali = explode(',', $anim);
          $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
        $notifica = count($not);

         return view('auth.associazione.welcome', compact(['not', 'notifica']));
 
         }else{
             return redirect()->back();
       }
    }

    function aggiornaUT(Request $request)
    {
      $segnalazione = Segnalazione::all();
                   
         $id_main = $request->input('id_segnalazione');
         $id_assoc = $request->input('id_associazione');
         $email_utente = $request->input('email_utente');
         $telefono_utente = $request->input('telefono_utente');
         $messaggio = $request->input('messaggio');
         $data_segnalazione = $request->input('data_segnalazione');

         $email_assoc = DB::table('associaziones')->select('email')->where('id', '=', $id_assoc)->get();

         if($telefono_utente){
          Nexmo::message()->send([
             'to' => '+39 '.$telefono_utente,
             'from' => '+39 3341020171',
             'text' => "L'associazione che ha preso in carico la tua segnalazione ti ha inviato un messaggio: ".$messaggio
          ]);  
          return redirect()->back()->with('success','SMS inviato con successo.');
         }

         elseif($email_utente){
          $details = [
              'title' => 'Aggiornamento sulla tua segnalazione',
              'body' => "L'associazione che ha preso in carico la tua segnalazione ti ha inviato un messaggio: ".$messaggio,
              'email_utente' => $email_utente,
              'email_assoc' => $email_assoc
           ];
           $data = [
              'title' => 'Aggiornamento segnalazione',
              'body' => "Hai inviato un messaggio all'utente ".$email_utente." con scritto: ".$messaggio,                    
              'email_assoc' => $email_assoc
           ];
           Mail::to($details['email_utente'])->send(new EmailSegnalazione($details));
           Mail::to($data['email_assoc'])->send(new EmailSegnalazione($data));
           return redirect()->back()->with('successEmail','Email inviata con successo.');
      }          

    }


    function check(Request $request)
    {   
        $request->validate([
           'email'=>'required|email|exists:associaziones,email',
           'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'Email inesistente.'
        ]);
                                                                                                            //, 'valida'=>1
        if (Auth::guard('associazione')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('associazione.home');
        }else{
            return redirect()->route('associazione.login')->with('fail','Password errata o account non attivo.');
        }
    }

    function logout(){
        Auth::guard('associazione')->logout();
        return redirect('/');
    }
}
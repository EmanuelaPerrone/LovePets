<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Segnalazione;
use App\Models\Adozione;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessaggioUtente;
use App\Mail\PresaSegnalazione;
use App\Mail\EmailSegnalazione;

class segnalazioniController extends Controller
{
    public function formSegnalazione()
    {
        return view('auth.user.segnalazione');
    }

    public function appelli()
    {
        if(Auth::user()){
                       
        $anim = Auth::user()->animali;
        $animali = explode(',', $anim);
        $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
        $notifica = count($not);
        $segnalazione = DB::table('users')->join('segnalaziones', 'users.id', '=', 'segnalaziones.user_id')->where('stato', '=', 'aperta')->whereIn('segnalaziones.animale', $animali)->orderby('segnalaziones.created_at', 'desc')->simplePaginate(3);
        
        $salva = DB::table('segnalaziones')->whereIn('segnalaziones.animale', $animali)->update(['nuova' => 0]);

        return view('auth.associazione.appelliSegnalazioni', compact('segnalazione'), compact(['not', 'notifica']));

        }else{
            return redirect()->back();
      }
    }

    public function cancellaSegn($id_segnalazione)
    {
        $dato = Segnalazione::find($id_segnalazione);
        $dato->delete();

        return redirect()->back()->with('cancellata', 'Segnalazione rimossa con successo.');
    }

    public function cancellaAdoz($id)
    {
        $data = Adozione::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function appelliUT()
    {

        $segnalazione = DB::table('segnalaziones')->orderby('segnalaziones.created_at', 'desc')->simplePaginate(3);

        return view('auth.user.appelliSegnalazioni', compact('segnalazione'));

    }

    public function segnalazioniPersonaliSL()
    {
        if(Auth::user()){
            
            $segnalazione = DB::table('users')->join('segnalaziones', 'users.id', '=', 'segnalaziones.user_id')->where('segnalaziones.user_id', '=', Auth::user()->id)->where('segnalaziones.anonimo', '=', NULL)->orderby('segnalaziones.stato', 'desc')->orderby('segnalaziones.created_at','desc')->simplePaginate(3);
 
             return view('auth.user.segnalazioniPersonali', compact('segnalazione'));
     
             }else{
                 return redirect()->back();
           }
    }


    public function appelliSloggato()
    {

        $segnalazione = DB::table('segnalaziones')->orderby('segnalaziones.created_at','desc')->simplePaginate(3);

        return view('appelliSegnalazioni', compact('segnalazione'));

    }

    public function segnalazioniUT()
    {
        if(Auth::user()){
            
           $segnalazione = DB::table('users')->join('segnalaziones', 'users.id', '=', 'segnalaziones.user_id')->where('segnalaziones.user_id', '=', Auth::user()->id)->where('segnalaziones.anonimo', '=', NULL)->orderby('segnalaziones.stato', 'desc')->orderby('segnalaziones.created_at','desc')->simplePaginate(3);

            return view('auth.user.segnalazioniPersonali', compact('segnalazione'));
    
            }else{
                return redirect()->back();
          }
    }


    public function messaggioUT(Request $request)
    {
        $id_main = $request->input('id_segnalazione');
         $assoc_id = $request->input('assoc_id');   
         $email_utente = $request->input('email_utente');  
         $messaggioUT =  $request->input('messaggioUT');
         $data_segnalazione = $request->input('data_segnalazione');

         $email_assoc = DB::table('associaziones')->select('email')->where('id', '=', $assoc_id)->get();

         $details = [
          'title' => 'Aggiornamento segnalazione',
          'body' => "L'utente che ha effettuato questa segnalazione ti ha inviato un aggiornamento sulla segnalazione effettuata in data: ".$data_segnalazione.". Messaggio: ".$messaggioUT,
          'email_assoc' => $email_assoc,                    
       ];

        $data = [
            'title' => 'Aggiornamento segnalazione',
            'body' => "Hai inviato un messaggio di aggiornamento all'associazione che ha preso in carico la tua segnalazione effettuata in data: ".$data_segnalazione.". Messaggio inviato: ".$messaggioUT,
            'email_utente' => $email_utente,          
        ];
    
       Mail::to($details['email_assoc'])->send(new MessaggioUtente($details));
       Mail::to($data['email_utente'])->send(new MessaggioUtente($data));
        
       return redirect()->back()->with('successEmail','Messaggio inviato con successo.');
                
    }



    public function cambiaStato(Request $request)
    {
        $segnalazione = Segnalazione::all();
                   
         $id_main = $request->input('id_segnalazione');
         $id_assoc = $request->input('id_associazione');
         $email_utente = $request->input('email_utente');
         $telefono_utente = $request->input('telefono_utente');
         $anonimo = $request->input('anonimo');
         $messaggioAS = $request->input('messaggioAS');
         $data_segnalazione = $request->input('data_segnalazione');
         $id_role = $request->input('stato');                  
          
         $email_assoc = DB::table('associaziones')->select('email')->where('id', '=', $id_assoc)->get();

          if($id_role == 'presa in carico'){
            if($anonimo){
                $salva = DB::table('segnalaziones')->where('id_segnalazione', $id_main)->update(['stato' => $id_role, 'assoc_id' => $id_assoc]);
            }else {
                $salva = DB::table('segnalaziones')->where('id_segnalazione', $id_main)->update(['stato' => $id_role, 'assoc_id' => $id_assoc]);

                if($telefono_utente){
                    Nexmo::message()->send([
                       'to' => '+39 '.$telefono_utente,
                       'from' => '+39 3341020171',
                       'text' => "La segnalazione da te effettuata in data: ".$data_segnalazione." è stata presa in carico da un'associazione."
                    ]);  
                    return redirect()->back()->with('stato', $id_role)->with('success','SMS di presa in carico inviato con successo.');
                   }
                   
                   elseif($email_utente){
                      $details = [
                        'title' => 'Segnalazione presa in carico',
                        'body' => "La segnalazione da te effettuata in data: ".$data_segnalazione." è stata presa in carico da un'associazione.",
                        'email_utente' => $email_utente,          
                      ];
        
                     Mail::to($details['email_utente'])->send(new PresaSegnalazione($details));        
                   }
                    return redirect()->back()->with('stato', $id_role)->with('successEmail','Email di presa in carico inviata con successo.');
           }
        }


          elseif($id_role == 'chiusa'){
            $salva = DB::table('segnalaziones')->where('id_segnalazione', $id_main)->update(['stato' => 'chiusa', 'assoc_id' => $id_assoc]); 

            if($telefono_utente){
             Nexmo::message()->send([
                'to' => '+39 '.$telefono_utente,
                'from' => '+39 3341020171',
                'text' => "La tua segnalazione è stata chiusa e l'animale segnalato è stato portato in salvo. Ti ringraziamo ancora del contributo.-LovePets"
             ]);  
             return redirect()->back()->with('stato', $id_role)->with('success','SMS inviato con successo.');
            }
            elseif($email_utente){
                $details = [
                    'title' => 'Aggiornamento sulla tua segnalazione',
                    'body' => "La tua segnalazione è stata chiusa e l'animale che avevi segnalato è stato portato in salvo. Ti ringraziamo ancora del contributo.",
                    'email_utente' => $email_utente
                 ];
                 Mail::to($details['email_utente'])->send(new EmailSegnalazione($details));
                 return redirect()->back()->with('stato', $id_role)->with('successEmail','Email inviata con successo.');
            }else{
                return redirect()->back()->with('stato', $id_role);
            }
                        
        }        
          else{            
            $salva = DB::table('segnalaziones')->where('id_segnalazione', $id_main)->update(['stato' => 'aperta', 'assoc_id' => 0]); 
            return redirect()->back()->with('stato', $id_role);
          }
      
         
    }



    public function segnalazioniAssoc()
    {
        if(Auth::user()){
            $anim = Auth::user()->animali;
            $animali = explode(',', $anim);
            $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
            $notifica = count($not);
            
            $segnalazione = DB::table('associaziones')->join('segnalaziones', 'associaziones.id', '=', 'segnalaziones.assoc_id')->join('users', 'segnalaziones.user_id', '=', 'users.id')->where('segnalaziones.assoc_id', '=', Auth::user()->id)->orderby('segnalaziones.stato', 'desc')->orderby('segnalaziones.created_at','desc')->simplePaginate(3);
    
            return view('auth.associazione.segnalazioniPersonali', compact('segnalazione'), compact(['not', 'notifica']));
    
            }else{
                return redirect()->back();
          }
    }


    function add(Request $request)
    {

        $segnalazione = new Segnalazione();

        if($file=$request->file){
        $fotoname=time().'.'.$file->getClientoriginalExtension();
        $request->file->move('foto_segnalazioni', $fotoname);
        $segnalazione->file=$fotoname;
        }

        $segnalazione->animale=$request->animale;
        $segnalazione->tipoSegnalazione=$request->tipoSegnalazione;
        $segnalazione->zona=$request->zona;
        $segnalazione->note=$request->note;
        $segnalazione->latitude=$request->latitude;
        $segnalazione->longitude=$request->longitude;

        $segnalazione->anonimo=$request->anonimo;
        $segnalazione->contatto=$request->contatto;
        $segnalazione->stato= 'aperta';
        $segnalazione->nuova=1;
        $segnalazione->user_id = auth()->user()->id;

        $save = $segnalazione->save();

    if($save){
        return redirect()->back()->with('success','Segnalazione inviata con successo! Ti ringraziamo del contributo.');
    }else{
        return redirect()->back()->with('fail','Qualcosa è andato storto. Riprovare.');
    }
  
    }

    public function aggiuntaAdoz(Request $request)
    {
       $adozione = new Adozione();  

        $file=$request->file;
        $fotoname=time().'.'.$file->getClientoriginalExtension();
        $request->file->move('foto_adozioni', $fotoname);
        $adozione->file=$fotoname;

        $adozione->nome=$request->nome;
        $adozione->descr=$request->descr;
        $adozione->taglia=$request->taglia;

        $adozione->eta=$request->eta;
        $adozione->contatti=$request->contatti;
        $adozione->user_id = auth()->user()->id;

        $save = $adozione->save();

    if($save){
        return redirect()->back()->with('success','Adozione aggiunta! Ti ringraziamo del contributo.');
     }else{
        return redirect()->back()->with('fail','Qualcosa è andato storto. Riprovare.');
     }
    } 
    
}


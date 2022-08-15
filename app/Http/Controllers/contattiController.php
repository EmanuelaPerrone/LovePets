<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Adozione;
use Illuminate\Support\Facades\Auth;

class contattiController extends Controller
{
    public function assocContatti()
    {
        $anim = Auth::user()->animali;
        $animali = explode(',', $anim);
        $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
        $notifica = count($not);
        $contatto = DB::table('associaziones')->get();
        
        return view('auth.associazione.contatti', compact('contatto'), compact(['not', 'notifica']));
    }

    public function contatti()
    {
        $contatto = DB::table('associaziones')->get();
        
        return view('contatti', compact('contatto'));
    }

    public function contattiUT()
    {
        $contatto = DB::table('associaziones')->get();
        
        return view('auth.user.contattiUT', compact('contatto'));
    }

    public function showAdoz(){

        $adozione = DB::table('adoziones')->simplePaginate(3);

        return view('auth.user.adozioni', compact('adozione'));
    }

    public function showAdozioniSloggato(){

        $adozione = DB::table('adoziones')->simplePaginate(3);

        return view('adozioni', compact('adozione'));
    }

    public function showAdozioni()
    {
        if(Auth::user()){

        $anim = Auth::user()->animali;
        $animali = explode(',', $anim);
        $not = DB::table('segnalaziones')->where('segnalaziones.nuova', '=', 1)->whereIn('segnalaziones.animale', $animali)->get();
        $notifica = count($not);   

        $adozione = DB::table('adoziones')->simplePaginate(3);

        return view('auth.associazione.adozioni', compact('adozione'), compact(['not', 'notifica']));

        }else{
            return redirect()->back();
      }
    }

    public function cosaFare()
    {
        return view('cosaFare');
    }
    public function faq()
    {
        return view('faq');
    }

}

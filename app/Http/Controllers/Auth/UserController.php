<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\emailBenvenuto;

class UserController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
          'nome'=>'required|string',
          'cognome'=>'required',
          'email'=>'required|email|unique:users,email',
          'telefono'=>'required|integer',
          'password'=>'required|min:8',
          'cpassword'=>'required|min:8|same:password'
      ]);

        $user = new User();
        $user->nome = $request->nome;
        $user->cognome = $request->cognome;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->password = \Hash::make($request->password);                
        $save = $user->save();
        $user->attachRole('3');

        $user->notify(new emailBenvenuto());

        if( $save ){
          Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password]);          
          return redirect()->route('user.home');
        }else{
          return redirect()->back()->with('fail','Qualcosa è andato storto. Riprovare.');
        }
   }


   function check(Request $request){
    //Validate Inputs
    $request->validate([
       'email'=>'required|email|exists:users,email',
       'password'=>'required|min:5|max:30',
    ],[
        'email.exists'=>'Email inesistente.'
    ]);

    if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        return redirect()->route('user.home');
        
    }else{
        return redirect()->route('user.login')->with('fail','Password errata, riprovare.');
    }
    
}

function logout(){
    Auth::guard('user')->logout();
    return redirect('/');
}




}

@extends('layouts.app')

@section('title', 'LovePets | Registrazione Utente')

@section('content')
<div class="container" style="padding-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <ol class="breadcrumb ">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"> <a href="#"> Registrazione</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('user.register') }}"> Utente</a></li>
  </ol>
            <div class="card" style="border-color: #223C7B;">
                <div class="card-header text-white mb-3" style="background-color: #26448A; font-size: 18px;"><i class="fas fa-user"></i> {{ __('Registrazione Utente') }}</div>

                  <div class="card-body">
                    <form method="POST" action="{{ route('user.create') }}">
                    @if (Session::get('success'))
                        <div class="alert alert-success"><i class="fas fa-check-circle"></i> 
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> 
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                        @csrf

                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Nome*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="nome" type="text" placeholder="es. Mario" pattern="[A-Z a-z]*" title="Il campo nome non può contenere numeri." class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="name" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cognome" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Cognome*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="cognome" type="text" placeholder="es. Rossi" pattern="[A-Z a-z]*" title="Il campo cognome non può contenere numeri." class="form-control @error('cognome') is-invalid @enderror" name="cognome" value="{{ old('cognome') }}" required autocomplete="name" autofocus>

                                @error('cognome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Indirizzo E-Mail*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="es. mariorossi@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Telefono*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="telefono" maxlength="10" placeholder="es. 3346762536" pattern="[0-9]{10}" title="Il campo telefono non può contenere lettere e deve essere di 10 cifre." type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="name" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Password*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cpassword" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Conferma Password*') }}</strong></label>
                            <div class="col-md-6">
                            <input id="cpassword-field" type="password" placeholder="Password" class="form-control @error('cpassword') is-invalid @enderror" name="cpassword" required autocomplete="cpassword">
                            <span toggle="#cpassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            @error('cpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-0">                            
                            <div class="col-md-6 offset-md-4">
                            <div class="form-action" style="margin-bottom: 10px;">
			        <input type="checkbox" name='terms' required id="privacy" value="Privacy Accettata" class="form-check-input" required/>       
                   <a href="https://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2003-06-30;196!vig=" target="_blank" > Ho letto e accetto l'Informativa sulla Privacy </a>  		  
			      </div>
                  <div class="col-md-8 offset-md-4" style="margin-left: 0px;">
                            * campo obbligatorio.
                            </div>
                                <button type="submit" class="btn" style="background-color: #2b4c9a; color: white; margin-bottom: 10px; margin-top: 10px;">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-4">
                            <a href="{{ route('user.login') }}" style="padding-left: 0;"><u>Hai già un account? {{ __('Accedi') }}</u></a>            
                            </div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
  cursor: pointer; 
  margin-right: 7px;
}
</style>
<script>
      $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
    </script>
@endsection

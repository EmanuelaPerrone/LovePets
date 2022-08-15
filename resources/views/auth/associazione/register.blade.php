@extends('layouts.app')

@section('title', 'LovePets | Registrazione Associazione')

@section('content')

<div class="container" style="padding-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <ol class="breadcrumb ">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"> <a href="#"> Registrazione</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('associazione.register') }}"> Associazione</a></li>
  </ol>
           <div class="card" style="border-color: #223C7B;">
           <div class="card-header text-white mb-3" style="background-color: #26448A; font-size: 18px;"><i class="fas fa-users"></i> {{ __('Registrazione Associazione') }}</div>

               <div class="card-body">
                 <form action="{{ route('associazione.create') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-warning"><i class="fas fa-exclamation"></i>
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
                                <input id="nome" type="text" placeholder="es. OIPA" pattern="[A-Z a-z]*" title="Il campo nome non può contenere numeri." class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="name" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cf" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Codice Fiscale*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="cf" type="text" maxlength="11" class="form-control @error('cf') is-invalid @enderror" pattern="[0-9]{11}" title="Il campo codice fiscale non può contenere lettere e deve essere di 11 cifre." placeholder="es. 33829187482" name="cf" value="{{ old('cf') }}" required autocomplete="cf" autofocus>

                                @error('cf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Indirizzo E-Mail*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="es. oipa@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="telefono" maxlength="10" type="tel" class="form-control @error('telefono') is-invalid @enderror" pattern="[0-9]{10}" title="Il campo telefono non può contenere lettere e deve essere di 10 cifre." placeholder="es. 3347826328" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sede" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Sede principale*') }}</strong></label>
                            <div class="col-md-6">
                               <select id="sede" class="form-select" name="sede" value="{{ old('sede') }}" required autofocus>
                                 <option selected disabled value="">Seleziona la sede </option>  
                                 <option value="Roma">Roma</option>
                                 <option value="Taranto">Taranto</option>
                                 <option value="Bari">Bari</option>
                                 <option value="Milano">Milano</option>
                                 <option value="Torino">Torino</option>
                                 <option value="Bologna">Bologna</option>
                                 <option value="Napoli">Napoli</option>
                                 <option value="Firenze">Firenze</option>
                                 <option value="Cagliari">Cagliari</option>
                                 <option value="Palermo">Palermo</option>
                                </select> 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="anno" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Anno di costituzione*') }}</strong></label>

                            <div class="col-md-6">
                                <input id="anno" type="tel" maxlength="4" class="form-control @error('anno') is-invalid @enderror" pattern="[0-9]{4}" title="Il campo anno di costituzione non può contenere lettere e deve essere di 4 cifre." placeholder="es. 1997" name="anno" value="{{ old('anno') }}" required autocomplete="anno" autofocus>

                                @error('anno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="soci" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Numero soci*') }}</strong></label>
                            <div class="col-md-6">
                                <input id="soci" type="text" class="form-control @error('soci') is-invalid @enderror" pattern="[0-9]*" title="Il campo numero soci non può contenere lettere." placeholder="es. 4" name="soci" value="{{ old('soci') }}" autocomplete="soci" autofocus>

                                @error('soci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="zonaCompetenza" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Zona di competenza*') }}</strong></label>
                            <div class="col-md-6">
                               <select id="zonaCompetenza" class="form-select" name="zonaCompetenza" value="{{ old('zonaCompetenza') }}" required autofocus>
                                 <option selected disabled value="">Seleziona la zona di competenza </option>  
                                 <option value="Territorio Nazionale">Territorio Nazionale</option>
                                 <option value="Abruzzo">Abruzzo</option>
                                 <option value="Basilicata">Basilicata</option>
                                 <option value="Calabria">Calabria</option>
                                 <option value="Campania">Campania</option>
                                 <option value="Emilia Romagna">Emilia Romagna</option>
                                 <option value="Friuli-Venezia-Giulia">Friuli-Venezia-Giulia</option>
                                 <option value="Lazio">Lazio</option>
                                 <option value="Liguria">Liguria</option>
                                 <option value="Lombardia">Lombardia</option>
                                 <option value="Marche">Marche</option>
                                 <option value="Molise">Molise</option>
                                 <option value="Piemonte">Piemonte</option>
                                 <option value="Puglia">Puglia</option>
                                 <option value="Sardegna">Sardegna</option>
                                 <option value="Sicilia">Sicilia</option>
                                 <option value="Toscana">Toscana</option>
                                 <option value="Trentino Alto Adige">Trentino Alto Adige</option>
                                 <option value="Umbria">Umbria</option>
                                 <option value="Valle D'Aosta">Valle D'Aosta</option>
                                 <option value="Veneto">Veneto</option>
                                </select> 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="animali" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Animali a cui ti rivolgi*') }}<br>(Effettua minimo una scelta)</strong></label>
                            <div class="col-md-6" style="padding-top: 10px;">
                            <input type="checkbox" class="form-check-input" name="animali[]" value="Cane"> Cani<br>
                            <input type="checkbox" class="form-check-input" name="animali[]" value="Gatto"> Gatti<br>
                            <input type="checkbox" class="form-check-input" name="animali[]" value="Roditore"> Roditori<br>
                            <input type="checkbox" class="form-check-input" name="animali[]" value="Volatile"> Volatili<br> 
                            <input type="checkbox" class="form-check-input" id="altro"  onclick="altroAnimali()" value="Altro"> Altro...<br> 
                            <input type="text" class="form-control" placeholder="Altri animali" id="altro2" name="animali[]" pattern="[A-Z a-z]*" title="Non puoi inserire cifre numeriche." style="display: none; text-transform: capitalize;">
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
			                 <input type="checkbox" class="form-check-input" name="terms" required id="privacy" value="Privacy Accettata" required/>       
                              <a href="https://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2003-06-30;196!vig=" target="_blank" > Ho letto e accetto l'Informativa sulla Privacy </a>  		  
			                 </div>
                             <div class="col-md-8 offset-md-4" style="margin-left: 0px; margin-bottom: 10px;">
                            * campo obbligatorio.
                            </div>
                                <button type="submit" class="btn" style="background-color: #2b4c9a; color: white; padding-top: 10px; padding-bottom: 10px;">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                    
                            <div class="col-md-8 offset-md-4">
                            <a href="{{ route('associazione.login') }}" style="padding-left: 0;"><u>Hai già un account? {{ __('Accedi') }}</u></a>            
                            </div>
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
        function altroAnimali() {
        // Get the checkbox
        var checkBox = document.getElementById("altro");
        // Get the output text
        var text = document.getElementById("altro2");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
        }

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

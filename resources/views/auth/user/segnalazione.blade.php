
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <!-- Font awesome -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"/>
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap js/jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/plug-ins/1.11.3/i18n/it_it.json"></script>
    <!-- CSS -->
  
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        $(document).ready(function () {
           $('.third-button').on('click', function () {
             $('.animated-icon3').toggleClass('open');
             });
         });

         $(document).ready( function () {
    $('#myTable').DataTable();
} );
              
    </script>
    <style>
      .active{
        color: grey;
      }
    </style>
    <title>LovePets | Segnalazione</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #2b4c9a;">
            <div class="container">
            @if(is_null(Auth::user()->cognome))
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-paw fa-lg"></i>
                @else
                <a class="navbar-brand" href="{{ route('user.welcome') }}"><i class="fas fa-paw fa-lg"></i>
                @endif
                 <img src="/img/logoPiccolo.png" alt="logoPiccolo" class="img-fluid">
                </a>
                <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <div class="animated-icon3"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
      @if(is_null(Auth::user()->cognome))
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/') }}" style="color: white;  padding-right: 13px; padding-left: 13px;"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/cosaFare') }}" style="color: white; padding-right: 13px; padding-left: 13px;"><i class="fas fa-list-ul"></i> Cosa puoi fare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contatti') }}" style="color: white; padding-right: 13px; padding-left: 13px;"><i class="fas fa-phone"></i> Contatti utili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/adozioni') }}" style="color: white; padding-right: 13px; padding-left: 13px;"><i class="fas fa-heart"></i> Adozioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/appelli') }}" style="color: white; padding-right: 13px; padding-left: 13px;"><i class="fas fa-bullhorn"></i> Segnalazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/faq') }}" target="_blank" style="color: white; padding-right: 13px; padding-left: 13px;"><i class="fas fa-question"></i> Aiuti e FAQ</a>
        </li>
      </ul>
      @else
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('user.welcome') }}" style="color: white;"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.cosaFare') }}" style="color: white;"><i class="fas fa-list-ul"></i> Cosa puoi fare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.contatti') }}" style="color: white;"><i class="fas fa-phone"></i> Contatti utili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.adozioni') }}" style="color: white;"><i class="fas fa-heart"></i> Adozioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.appelli') }}" style="color: white;"><i class="fas fa-bullhorn"></i> Segnalazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.faq') }}" target="_blank" style="color: white;"><i class="fas fa-question"></i> Aiuti e FAQ</a>
        </li>
      </ul>
      @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.login') }}"><i class="fas fa-user"></i> Utente</a>
                          <hr style="align: center; color: #223C7B; margin-left: 10px; margin-right: 10px;">
                          <a class="dropdown-item" href="{{ route('associazione.login') }}"><i class="fas fa-users"></i> Associazione</a>
						  </div>
                        </li>
                        
                        @if (Route::has('register'))
                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user-plus"></i> {{ __('Registrazione') }}</a>
                         <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.register') }}"><i class="fas fa-user"></i> Utente</a>
                          <hr style="align: center; color: #223C7B; margin-left: 10px; margin-right: 10px;">
                          <a class="dropdown-item" href="{{ route('associazione.register') }}"><i class="fas fa-users"></i> Associazione</a>
						  </div>
                        </li>
                        @endif
                        @else
                    <!--<img src="{{ Auth::user()->avatar }}" alt="avatar" style="heigth: 38px; width: 38px;">-->

                    @if(is_null(Auth::user()->cognome))
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ url('/home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>                          
                          <a class="dropdown-item" href="{{ route('segnalazioniUT') }}"><i class="fas fa-bullhorn"></i> Le mie segnalazioni</a>                        
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </div>
					</li>
                    @else
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>                          
                          <a class="dropdown-item" href="{{ route('user.segnalazioniUT') }}"><i class="fas fa-bullhorn"></i> Le mie segnalazioni</a>                        
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </div>
					</li>
                    @endif
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>  
                        @endguest                
                    </ul>
                </div>
            </div>
        </nav>
    <main>
     <div class="container" style="padding-top: 20px;">
       <div class="row justify-content-center">
         <div class="col-md-8">
         @if(is_null(Auth::user()->cognome))
         <nav id="breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
             <ol class="breadcrumb">
              <li class="breadcrumb-item">Sei qui: <a href="{{ url('/') }}"> Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/home') }}"> Login Utente</a></li>
              <li class="breadcrumb-item active"> <a href="#"> Segnalazione</a></li>
             </ol>
            </nav>
         @else
         <nav id="breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
             <ol class="breadcrumb">
              <li class="breadcrumb-item">Sei qui: <a href="{{ route('user.welcome') }}"> Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('user.home') }}"> Login Utente</a></li>
              <li class="breadcrumb-item active"> <a href="#"> Segnalazione</a></li>
             </ol>
            </nav>
         @endif            
            <div class="card" style="border-color: #223C7B;">
                <div class="card-header text-white mb-3" style="background-color: #26448A; font-size: 18px;"><i class="fas fa-bullhorn"></i> {{ __('Segnalazione') }}</div>

                  <div class="card-body">
                    <form method="POST" action="add" class="myForm" onsubmit="return confirm('Sei sicuro di voler inviare questa segnalazione?')" enctype="multipart/form-data">
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
                       

                        <div class="form-group">
                          <label id="label"><strong>Informazioni segnalazione</strong></label>  
                          <div class="row mb-3">
                            <label for="animale" class="col-md-4 col-form-label text-md-end"><strong>Immagine</strong></label>
                            <div class="col-md-6">Inserisci un'immagine in formato png, jpg o jpeg di grandezza non superiore a 500x500                      
                           <img src="#" id="imgshow" style="width: 250px; height: 150px; margin-bottom: 5px;">
                           <input type="file" id="getFile" name="file" alt="Immagine non presente" accept="image/*">
                             </div>
                           </div>
                                            
                        <script>
                        $('document').ready(function () {
                          $("#getFile").change(function () {
                           if (this.files && this.files[0]) {
                          
                           var reader = new FileReader();
                           reader.onload = function (e) {
                          $('#imgshow').attr('src', e.target.result);
                         }
                          reader.readAsDataURL(this.files[0]);
                          }
                          });
                        });
                        </script>                    

                        <div class="row mb-3">
                            <label for="animale" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Animale*') }}</strong></label>
                            <div class="col-md-6">
                            <select id="animale" class="form-select" name="animale" value="{{ old('animale') }}" required autofocus>
                               <option selected disabled value="">Seleziona animale</option>  
                               <option value="Cane">Cane</option>
                               <option value="Gatto">Gatto</option>
                               <option value="Roditore">Roditore</option>
                               <option value="Volatile">Volatile</option>
                             </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tipoSegnalazione" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Tipo di segnalazione*') }}</strong></label>
                            <div class="col-md-6">
                                <select id="tipoSegnalazione" class="form-select" name="tipoSegnalazione" value="{{ old('tipoSegnalazione') }}" required autofocus>
                                 <option selected disabled value="">Seleziona il tipo di segnalazione</option>  
                                 <option value="Ritrovamento di animale randagio">Ritrovamento di animale randagio</option>
                                 <option value="Maltrattamento di animali">Maltrattamento di animali</option>
                                 <option value="Ritrovamento di animale smarrito">Ritrovamento di animale smarrito (se presenta il collarino)</option>
                                 <option value="Smarrimento di animale">Smarrimento di animale</option>
                                </select>  
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zona" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Zona segnalazione*') }}</strong></label>
                            <div class="col-md-6">
                               <select id="zona" class="form-select" name="zona" value="{{ old('zona') }}" required autofocus>
                                 <option selected disabled value="">Seleziona la zona</option>  
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
                                <input type="checkbox" name="posizione" class="btn" style="background-color: #2b4c9a; color: white;" onclick="getLocation();"/> Condividi la mia posizione attuale<br>
                               
                                <div class="alert alert-warning" style="padding-top: 10px; padding-bottom: 10px; padding-left: 15px; padding-right: 15px; margin-top: 5px; margin-bottom: 5px;">
                                 <i class="fas fa-info-circle"></i> Se la condividi, sarà visualizzabile solo alle associazioni
                                </div>

                                <input type="hidden" name="latitude" value="">
                                <input type="hidden" name="longitude" value="">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="zona" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Note (facoltative)') }}</strong></label>
                            <div class="col-md-6">
                            <textarea id="text" maxlength="200" type="textarea" placeholder="Ho trovato il gattino affamato..." style="width: 200px;" name="note" autocomplete="note" autofocus></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label id="label"><strong>Preferenze</strong></label> 
                        <div class="row mb-3">
                            <label for="modalitaContatto" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Vuoi restare anonimo?') }}</strong></label>
                            <div class="col-md-6" style="padding-top: 8px;">                              
                            <input type="checkbox" class="anonimo" id="check" name="anonimo" value="1"> Invia segnalazione anonima
                            </div>                                                   
                        </div>
                    
                        @if(is_null(Auth::user()->cognome))
                        <div class="row mb-3">
                            <label for="modalitaContatto" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Contatto*') }}</strong></label>
                            <div class="col-md-6" style="padding-top: 8px;">                              
                            <input type="radio" class="cont" id="radio" value="Non vuole essere aggiornato" name="contatto" checked required> Non voglio essere aggiornato su questa segnalazione<br>
                            <input type="radio" class="cont" id="radio" value="Per Email" name="contatto"> Voglio essere aggiornato per email    
                            </div>                        
                        </div>
                        @else
                        <div class="row mb-3">
                            <label for="modalitaContatto" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Contatto*') }}</strong></label>
                            <div class="col-md-6" style="padding-top: 8px;">                              
                            <input type="radio" class="cont" id="radio" value="Non vuole essere aggiornato" name="contatto" checked required> Non voglio essere aggiornato su questa segnalazione<br>
                            <input type="radio" class="cont" id="radio" value="Per Email" name="contatto"> Voglio essere aggiornato per email<br>             
                            <input type="radio" class="cont" id="radio" value="Per Telefono" name="contatto"> Voglio essere aggiornato tramite SMS
                            </div>                        
                        </div>
                        @endif
                    </div>
                    
                        <script>                                                                         
                        document.getElementById('check').onclick = function() {                        

                        // vedo se la checkbox è spuntata
                        var check = this.checked; // vero o falso

                        // prendo la lista di radio button con id=radio
                        var radios = this.form.elements['radio'];

                        // for nella lista di radio button
                        for (var i=0, len=radios.length; i<len; i++) {
                            var r = radios[i]; // radio button corrente

                            if ( check ) { // checkbox true

                                if ( r.value === 'std' ) { 
                                    r.checked = false; 
                                } else { 
                                    r.checked = false; // uncheck
                                    r.disabled = true; // disabilita
                                    $('.cont').css('cursor', 'not-allowed');
                                }

                            } else { // checkbox non spuntata
                                r.disabled = false; // radio buttons abilitati
                                $('.cont').css('cursor', 'default');
                            }

                        }
                        }
                        </script>

                        <div class="col-md-8 offset-md-4">
                            * campo obbligatorio.
                            </div><br>
                        <div class="row mb-0">                            
                            <div class="col-md-6 offset-md-4">
                                <button name="Invia" type="submit" class="btn" style="background-color: #2b4c9a; color: white;">
                                    {{ __('Invia') }}
                                </button>
                            </div>
                          </div>
                        </div>
                        
                    </form>
                    <script>
                          function getLocation(){  
                            if(navigator.geolocation){
                                navigator.geolocation.getCurrentPosition(showPosition);
                            }
                          }
                          function showPosition(position){
                              document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                              document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
                          }
                        </script>
                </div>
            </div>
        </div>
    </div>


        </main>
    </div>

<footer id="bottom" class="row text-left p-3">
<div class="col-12 col-md-4"></div>
 <div class="col-12 col-md-8">
  <div class="row">
   <div class="col-12 col-md-4">
   <ul><strong>Per contattarci:
     <li>Emanuela Perrone - e.perrone19@studenti.uniba.it</li>
     <li>Cristina De Florio - c.deflorio9@studenti.uniba.it</li>
     <li>Christian Sardella - c.sardella6@studenti.uniba.it</li></strong>
    </ul>
  </div>
  <div class="col-12 col-md-4">
  <div><strong>© 2022 Copyright: E.C.C</div></strong>
  </div>
  <div class="col-12 col-md-4"></div>
</div>
</div>
</div>
</body>
</html>
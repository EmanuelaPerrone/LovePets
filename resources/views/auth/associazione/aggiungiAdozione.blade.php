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
            
.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 43px;
  height: 50px;
  color: white;
  background: #2a4b9a;
  border: none;
  outline: none;
  border-radius: 50%;
}

.icon-button:hover {
  cursor: pointer;
  color: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: 5px;
  right: 1px;
  width: 21px;
  height: 20px;
  background: red;
  color: #ffffff;
  display: inline-block;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  
}

.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
}
    </style>
    <title>LovePets | Aggiungi Adozione</title>
    <link rel="stylesheet" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                <a class="navbar-brand" href="{{ route('associazione.welcome') }}"><i class="fas fa-paw fa-lg"></i> 
                 <img src="/img/logoPiccolo.png" alt="logoPiccolo" class="img-fluid">
                </a>
                <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <div class="animated-icon3"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('associazione.welcome') }}" style="color: white;"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('associazione.cosaFare') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-list-ul"></i> Cosa puoi fare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('associazione.contatti') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-phone"></i> Contatti utili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('associazione.adozioni') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-heart"></i> Adozioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('associazione.appelli') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-bullhorn"></i> Segnalazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('associazione.faq') }}" target="_blank" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-question"></i> Aiuti e FAQ</a>
        </li>
      </ul>
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
                        </li>
                        
                        @if (Route::has('register'))
                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user-plus"></i> {{ __('Registrazione') }}</a>
                         <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.register') }}"><i class="fas fa-user"></i> Utente</a>
                          <hr style="align: center; color: #223C7B; margin-left: 10px; margin-right: 10px;">
                          <a class="dropdown-item" href="{{ route('associazione.register') }}"><i class="fas fa-users"></i> Associazione</a>
                        </li>
                        @endif
                        @else
                    <!--<img src="{{ Auth::user()->avatar }}" alt="avatar" style="heigth: 38px; width: 38px;">-->

                    @if(Auth::user() && (Auth::user()->hasRole('user')))
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>                          
                          <a class="dropdown-item" href="{{ route('user.segnalazioniUT') }}"><i class="fas fa-bullhorn"></i> Le mie segnalazioni</a>                          
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </li>
                    @endif
                    @if(Auth::user() && (Auth::user()->hasRole('associazione')))

                    <div class="container">
                     <div class="dropdown" style="display: inline-block;">
                      <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; border: none; padding-top: 10px; padding-bottom: 0px;">
                      <span class="material-icons">notifications</span>
                      @foreach ($not as $nots)
                     <span class="icon-button__badge"> {{ $notifica }} </span>
                     @endforeach
                     </button>            
                     @if($notifica == 0)
                     <div class="dropdown-menu">   
                          <p class="text-center" style="margin-top: 5px; margin-bottom: 5px;">Nessuna notifica.</p>        
                       </div>
                     @else
                     <div class="dropdown-menu">   
                      @foreach($not as $nots)                     
                          <p class="text-center" style="margin-top: 5px; margin-bottom: 5px;">C'è una nuova segnalazione!</p>        
                          <hr style="align: center; color: #223C7B; margin-left: 10px; margin-right: 10px;">                              
                          @endforeach        
                       </div>
                     @endif                      
                      </div>
                    </div>    

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('associazione.home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>   
                          <a class="dropdown-item" href="{{ route('associazione.segnalazioniAssoc') }}"><i class="fas fa-bullhorn"></i> Segnalazioni prese in carico</a>                                         
                          <a class="dropdown-item" href="{{ route('associazione.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
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
        <nav id="breadcrumb" style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color: white;">
    <li class="breadcrumb-item">Sei qui: <a href="{{ route('associazione.home') }}"> Home</a></li>
    <li class="breadcrumb-item"><a href="#"> Login Associazione</a></li>
    <li class="breadcrumb-item"> <a href="{{ route('associazione.adozioni') }}"> Adozioni</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('associazione.aggiungiAdozione') }}"> Aggiungi Adozione</a></li>
  </ol>
</nav>
            <div class="card" style="border-color: #223C7B;">
                <div class="card-header text-white mb-3" style="background-color: #26448A; font-size: 18px;"><i class="fas fa-heart"></i> {{ __('Aggiungi Adozione') }}</div>

                  <div class="card-body">
                    <form method="POST" action="aggiuntaAdoz" enctype="multipart/form-data">
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
                            <label for="file" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Immagine*') }}</strong></label>
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
                            <label for="nome" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Nome*') }}</strong></label>
                            <div class="col-md-6">
                                <input id="text" type="text" placeholder="es. Leone" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('email') }}" required autocomplete="nome" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="descr" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Breve descrizione*') }}</strong></label>
                            <div class="col-md-6">
                                <textarea id="text" maxlength="200" type="textarea" placeholder="Breve descrizione" class="form-control @error('descr') is-invalid @enderror" name="descr" value="{{ old('descr') }}" required autocomplete="nome" autofocus></textarea>

                                @error('descr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="taglia" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Taglia*') }}</strong></label>
                            <div class="col-md-6">
                               <select id="taglia" class="form-select" name="taglia" value="{{ old('taglia') }}" required autofocus>
                                 <option selected disabled value="">Seleziona la taglia dell'animale</option>  
                                 <option value="Piccola">Piccola</option>
                                 <option value="Media">Media</option>
                                 <option value="Grande">Grande</option>
                                </select> 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="eta" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Età*') }}</strong></label>
                            <div class="col-md-6">
                                <input id="text" type="text" placeholder="es. 5 anni" class="form-control @error('eta') is-invalid @enderror" name="eta" value="{{ old('eta') }}" required autocomplete="eta" autofocus>

                                @error('eta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contatti" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Per ulteriori contatti') }}</strong></label>
                            <div class="col-md-6">
                                <input id="text" type="text" placeholder="Telefono/Email" class="form-control @error('contatti') is-invalid @enderror" name="contatti" value="{{ old('contatti') }}" autocomplete="contatti" autofocus>

                                @error('contatti')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
                            * campo obbligatorio.
                            </div><br>

                        <div class="row mb-0">                            
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn" onclick="return confirm('Sei sicuro di voler aggiungere questo appello di adozione?')" style="background-color: #2b4c9a; color: white;">
                                    {{ __('Invia') }}
                                </button>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
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
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
      .not-allowed {
        cursor: not-allowed;
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
    <title>LovePets | Segnalazioni prese in carico</title>
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
        <header class="masthead" style="background-image: url('/img/segnalazione.jpg');  padding-top: 4rem; padding-bottom: 4rem;">
          <div class="container position-relative px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                   <div class="col-md-10 col-lg-8 col-xl-7">
                      <div class="post-heading">
                      <div class="banner-text text-center">    
                      <h1>Segnalazioni che hai preso in carico</h1>
                          <h2 class="subheading">Di seguito trovi tutte le segnalazioni che hai preso in carico</h2>
                      </div>
                       </div>
                  </div>
              </div>
          </div>
</header>
<div class="main">
  <ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ route('associazione.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Login Associazione</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('associazione.segnalazioniAssoc') }}"> Segnalazioni prese in carico</a></li>
  </ol>
  @if (Session::get('stato'))
  <div class="alert alert-success" style="margin-left: 10px;margin-right: 10px;"><i class="fas fa-check"></i> 
    Segnalazione {{ Session::get('stato') }}
  </div>
  @endif
  @if (Session::get('success'))
  <div class="alert alert-success" style="margin-left: 10px;margin-right: 10px;"><i class="fas fa-mobile-alt fa-lg"></i>
    {{ Session::get('success') }}
  </div>
  @endif
  @if (Session::get('successEmail'))
  <div class="alert alert-success" style="margin-left: 10px;margin-right: 10px;"><i class="far fa-envelope fa-lg"></i>
    {{ Session::get('successEmail') }}
  </div>
  @endif
  
  <div class="banner-text text-center">
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per zona, stato, data..." title="Filtra per zona, stato, data...">
  </div>
  <ul id="myUL" class="cards">
  @foreach($segnalazione as $segnalazioni)
   <li class="cards_item">
    <div class="card" style="border: 1px solid grey; ">
     <div class="card_image">       
       <img src="{{ asset('foto_segnalazioni/'.$segnalazioni->file) }}" class="img-fluid" height="200px"></div>
       @if(is_null($segnalazioni->file)) {{ __('Immagine non presente') }} @endif
      <div class="card_content"><br>
      <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;">
         <label id="label"><strong>Informazioni generali</strong></label>  
      <div class="card-text"><strong>Animale segnalato:</strong> {{ $segnalazioni->animale }}</div>
        
        <br><strong>Tipo segnalazione:</strong> {{ $segnalazioni->tipoSegnalazione }}
        <br><br><strong>Zona segnalazione:</strong> {{ $segnalazioni->zona }}<br>
        @if(is_null($segnalazioni->latitude)) 
        <strong>L'utente non ha condiviso la sua posizione.</strong>
        @else
        <strong>Latitudine:</strong> {{ $segnalazioni->latitude }}<br><strong>Longitudine:</strong> {{ $segnalazioni->longitude }} @endif <br><br>
       
    </div>

    <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;padding-bottom: 30px;">
         <label id="label"><strong>Contatti</strong></label>
         @if (!is_null($segnalazioni->anonimo))
        <br><strong>Segnalazione effettuata da:</strong> anonimo

        @elseif( $segnalazioni->contatto == 'Per Email')
        <br> <strong>Segnalazione effettuata da:</strong> {{ $segnalazioni->nome }} {{ $segnalazioni->cognome }}
        <br><br><strong>Contatto:</strong> {{ $segnalazioni->email }}       
        
        <form method="get" action="{{ route('associazione.aggiornaUT') }}">          
         <input type="hidden" value="{{ $segnalazioni->id_segnalazione }}" name="id_segnalazione">
         <input type="hidden" value="{{ auth()->user()->id }}" name="id_associazione">   
         <input type="hidden" value="{{ $segnalazioni->email }}" name="email_utente"> 
         <br><div class="text-center"><strong>Aggiorna l'utente</strong></div>
         <textarea required name="messaggio" placeholder="Scrivi qui il tuo messaggio..." id="messaggio" class="form-control" style="margin-bottom: 10px; margin-top: 20px;"></textarea>
         <div class="text-center"><button class="btn" id="invia" onclick="return confirm('Sei sicuro di voler inviare questo messaggio?')" style="background-color: #2b4c9a;color:white;margin-top: 10px;padding-right: 7px;padding-left: 7px;padding-bottom: 3px;padding-top: 3px;"  type="submit">Invia</button></div>
        </form>
                
        @elseif( $segnalazioni->contatto == 'Per Telefono')
        <br><strong>Segnalazione effettuata da:</strong> {{ $segnalazioni->nome }} {{ $segnalazioni->cognome }}
        <br><br><strong>Contatto:</strong> {{ $segnalazioni->telefono }}

        <form method="get" action="{{ route('associazione.aggiornaUT') }}">          
         <input type="hidden" value="{{ $segnalazioni->id_segnalazione }}" name="id_segnalazione">
         <input type="hidden" value="{{ auth()->user()->id }}" name="id_associazione">   
         <input type="hidden" value="{{ $segnalazioni->telefono }}" name="telefono_utente">                 
         <br><div class="text-center"><strong>Aggiorna l'utente</strong></div>
         <textarea required name="messaggio" placeholder="Scrivi qui il tuo messaggio..." id="messaggio" class="form-control" style="margin-bottom: 10px; margin-top: 20px;"></textarea>
         <div class="text-center"><button class="btn" id="invia" onclick="return confirm('Sei sicuro di voler inviare questo messaggio?')" style="background-color: #2b4c9a;color:white;margin-top: 10px;padding-right: 7px;padding-left: 7px;padding-bottom: 3px;padding-top: 3px;"  type="submit">Invia</button></div>
        </form>

        @elseif($segnalazioni->contatto == 'Non vuole essere aggiornato')
        <br><strong>Segnalazione effettuata da:</strong> {{ $segnalazioni->nome }} {{ $segnalazioni->cognome }}
        <br><br><strong>Contatto:</strong> Non vuole essere aggiornato<br>
        @elseif(is_null($segnalazioni->contatto))
        <br><strong>Segnalazione effettuata da:</strong> {{ $segnalazioni->nome }} {{ $segnalazioni->cognome }}
        <br><br><strong>Contatto:</strong> Non vuole essere aggiornato<br>
        @endif   
    </div>


    <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;">
         <label id="label"><strong>Informazioni aggiuntive</strong></label>
           

        @if(is_null($segnalazioni->note)) 
        <br><strong>Note: </strong>--        
        @else
        <br><strong>Note:</strong> {{ $segnalazioni->note }}
        @endif
        <br><br><strong>Data segnalazione:</strong> {{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}
        <br><br><strong>Stato segnalazione: </strong> 
        @if($segnalazioni->stato == 'presa in carico') 
        <strong style="color: green;">{{ $segnalazioni->stato }}</strong>
        @else
        {{ $segnalazioni->stato }}
        @endif
        
        @if((auth()->user()->id == $segnalazioni->assoc_id) && ($segnalazioni->stato == 'presa in carico'))
        <form method="get" action="{{ route('associazione.cambiaStato') }}">          
        <input type="hidden" value="{{ $segnalazioni->id_segnalazione }}" name="id_segnalazione">
        <input type="hidden" value="{{ auth()->user()->id }}" name="id_associazione">        
        <input type="hidden" value="{{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}" name="data_segnalazione">
        <select class="form-select" id="stato" name="stato" value="aperta" style="margin-top: 6px;">
          <option selected class="not-allowed" disabled value="aperta" >Modifica stato segnalazione</option>  
          <option disabled value="presa in carico">Prendi in carico</option>
          <option value="aperta">Riapri segnalazione</option>
          @if(is_null($segnalazioni->anonimo) && ( $segnalazioni->contatto == 'Non vuole essere aggiornato'))
          <option value="chiusa">Chiudi segnalazione</option>                        
          @elseif(is_null($segnalazioni->anonimo) && ($segnalazioni->contatto == 'Per Telefono'))
          <option value="chiusa">Chiudi segnalazione (l'utente verrà informato in automatico)</option>
          <input type="hidden" value="{{ $segnalazioni->telefono }}" name="telefono_utente">
          @elseif(is_null($segnalazioni->anonimo) && ($segnalazioni->contatto == 'Per Email'))
          <option value="chiusa">Chiudi segnalazione (l'utente verrà informato in automatico)</option>
          <input type="hidden" value="{{ $segnalazioni->email }}" name="email_utente">
          @endif

          @if(!is_null($segnalazioni->anonimo))       
          <option value="chiusa">Chiudi segnalazione</option>
          @endif

        </select>
        <div class="text-center"><button class="btn" id="conferma" style="background-color: #2b4c9a;color:white;margin-top: 10px;padding-right: 7px;padding-left: 7px;padding-bottom: 3px;padding-top: 3px;"  type="submit">Conferma</button></div>
      </form>
        @elseif($segnalazioni->stato == 'chiusa')<br>@endif
        <br>      
        </div>
        <div class="text-center">{{ \Carbon\Carbon::parse($segnalazioni->created_at)->diffForHumans() }}</div>
      </div>
     </div>
     
    </li>
  @endforeach
   </ul>
   <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">   
  {{ $segnalazione->links() }}
    </div>
  </div>
  
  <script>       

    function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();

    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("div")[0];
      txtValue = a.textContent || a.innerText;
    
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
          }
        }
    }
  </script>

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

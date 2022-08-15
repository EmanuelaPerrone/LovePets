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
    <title>LovePets | Le mie segnalazioni</title>

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
                <a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-paw fa-lg"></i> 
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

                    @if(is_null(Auth::user()->cognome))
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ url('/home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>                          
                          <a class="dropdown-item" href="{{ route('segnalazioniUT') }}"><i class="fas fa-bullhorn"></i> Le mie segnalazioni</a>                        
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->nome }}</a>
                        <div class="dropdown-menu" id="dropd">
                          <a class="dropdown-item" href="{{ route('user.home') }}"><i class="fas fa-address-card"></i> Il mio profilo</a>                          
                          <a class="dropdown-item" href="{{ route('user.segnalazioniUT') }}"><i class="fas fa-bullhorn"></i> Le mie segnalazioni</a>                        
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </li>
                    @endif
                    @if(Auth::user() && (Auth::user()->hasRole('associazione')))
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
                      <h1>Le mie segnalazioni</h1>
                          <h2 class="subheading">Di seguito trovi tutte le segnalazioni che hai effettuato</h2>
                          @if(is_null(Auth::user()->cognome))
                          <a class="btn btn-lg" href="{{ route('segnalazione') }}" style="background-color: #2b4c9a; color:white;">Effettua una segnalazione</a>
                          @else
                          <a class="btn btn-lg" href="{{ route('user.segnalazione') }}" style="background-color: #2b4c9a; color:white;">Effettua una segnalazione</a>
                          @endif                            
                      </div>
                       </div>
                  </div>
              </div>
          </div>
</header>
<div class="main">
@if(is_null(Auth::user()->cognome))
<ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Login Utente</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('segnalazioniUT') }}"> Le mie segnalazioni</a></li>
  </ol>
@else
  <ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ route('user.welcome') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Login Utente</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('user.segnalazioniUT') }}"> Le mie segnalazioni</a></li>
  </ol>
  @endif
  @if (Session::get('cancellata'))
  <div class="alert alert-success" style="margin-left: 10px;margin-right: 10px;"><i class="fas fa-check"></i>
    {{ Session::get('cancellata') }}
  </div>
  @endif
  @if (Session::get('successEmail'))
  <div class="alert alert-success" style="margin-left: 10px;margin-right: 10px;"><i class="fas fa-check"></i>
    {{ Session::get('successEmail') }}
  </div>
  @endif
  
  <div class="banner-text text-center">
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per zona o stato o data..." title="Filtra per zona o stato o data...">
  </div>
  <ul id="myUL" class="cards">
  @foreach($segnalazione as $segnalazioni)
   <li class="cards_item">
    <div class="card" style="border: 1px solid grey;">
     <div class="card_image">       
       <img src="{{ asset('foto_segnalazioni/'.$segnalazioni->file) }}" class="img-fluid" height="200px"></div>
       @if(is_null($segnalazioni->file)) {{ __('Immagine non presente') }} @endif
      <div class="card_content" style="padding-bottom: 3px;"><br>
      <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;">
        <label id="label"><strong>Informazioni generali</strong></label>           
        <br><strong>Animale segnalato:</strong> {{ $segnalazioni->animale }}</font><br><br><strong>Tipo segnalazione:</strong> {{ $segnalazioni->tipoSegnalazione }}
        <br><br><strong>Zona segnalazione:</strong> {{ $segnalazioni->zona }}<br><br>
    </div>

    <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;">
      <label id="label"><strong>Informazioni aggiuntive</strong></label>
        @if(is_null($segnalazioni->note)) 
        <br><strong>Note:</strong> --        
        @else
        <br><strong>Note:</strong> {{ $segnalazioni->note }}
        @endif
        <br><br><strong>Data segnalazione:</strong> {{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}
        <br><br><strong>Stato segnalazione: </strong> 
        @if($segnalazioni->stato == 'presa in carico') 
        <strong style="color: green;">{{ $segnalazioni->stato }}</strong><br><br>
        @else
        {{ $segnalazioni->stato }}<br><br>
        @endif            
    </div>
                  
        @if($segnalazioni->stato == 'presa in carico')
        <div class="text-center" style="border: 1px solid grey;">
        <div style="padding: 20px;"><strong><i class="fas fa-info-circle"></i> Questa segnalazione è stata presa in carico da un'associazione.<br>Puoi inviarle un messaggio:<br></strong></div>
          <form onsubmit="return confirm('Sei sicuro di voler inviare questo messaggio?')" action="{{ route('user.messaggioUT') }}">   
          <input type="hidden" value="{{ $segnalazioni->email }}" name="email_utente" id="email_utente">
          <input type="hidden" value="{{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}" name="data_segnalazione" id="data_segnalazione">    
          <input type="hidden" value="{{ $segnalazioni->id_segnalazione }}" id="id_segnalazione" name="id_segnalazione">          
          <input type="hidden" value="{{ $segnalazioni->assoc_id }}" name="assoc_id" id="assoc_id">         
          <textarea name="messaggioUT" placeholder="Scrivi qui il tuo messaggio..." required id="messaggioUT" style="width: 200px; margin-bottom: 10px;"></textarea>
          <br><button class="btn" type="submit" style="margin-bottom: 5px; background-color: #2b4c9a; color: white; margin-bottom: 20px;"><i class="fas fa-share"></i> Invia</button></form>         
        </div>                      
        @endif
      </div>
      <div class="text-center">{{ \Carbon\Carbon::parse($segnalazioni->created_at)->diffForHumans() }}</div><br>
     </div>
    </li>
  @endforeach
   </ul>
   <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">   
  {{ $segnalazione->links() }}
    </div>
  </div>
  
  <script>
    function disableButton() {
      document.getElementById("MyElement").classList.add('disabled');
    }
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

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
    <title>LovePets | Aiuti e FAQ</title>
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
          <a class="nav-link" aria-current="page" href="{{ route('associazione.welcome') }}" style="color: white; padding-right: 15px; padding-left: 15px;"><i class="fas fa-home"></i> Home</a>
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
        <header class="masthead" style="background-image: url('/img/faq.jpg'); padding-top: 4rem; padding-bottom: 4rem;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <div class="banner-text text-center">
                            <h1>Aiuti e FAQ</h1>
                            <h2 class="subheading">Una guida all'utilizzo del nostro sito e le risposte alle domande più frequenti</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>
<div class="main">
<ol class="breadcrumb justify-content-center" style="margin-right: 10px; margin-left: 10px;">
    <li class="breadcrumb-item">Sei qui: <a href="{{ route('associazione.welcome') }}">Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('associazione.faq') }}"> Aiuti e FAQ</a></li>
  </ol></div>

  <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="banner-text text-center" style="color: #2a4b9a">
         <h1>Cos'è<span> LovePets </span></h1> </div>
         <h4>Il sito LovePets è stato realizzato con lo scopo di aiutare gli animali in difficoltà, vittime di maltrattamenti o animali randagi.
             LovePets mette a disposizione la possibilità di registrarsi per poter accedere a tutte le sue funzionalità, come utente o come associazione.
             Come utente, avrai la possibilità di effettuare segnalazioni, vedere le segnalazioni da te fatte o anche contattare le associazioni che prendono in carico la tua 
             segnalazione. 
             In quanto associazione invece portrai gestire le segnalazioni nella tua zona e secondo gli animali di tuo interesse, prenderle in carico, chiuderle o anche 
             contattare gli utenti a seconda della loro preferenza di contatto.
         </h4>
      
                    <div class="banner-text text-center" style="color: #2a4b9a">
					   <h1 class="section-heading" style="font-size: 30px;"><i class="fas fa-user"></i> Per l'utente</h1></div>
					   	   <h4><i class="fas fa-bullhorn fa-xs"></i><strong> Effettuare una segnalazione</strong></h4>
                        <h5>Un comune cittadino può effettuare una segnalazione relativa al ritrovamento di animale randagio, ritrovamento di animale smarrito (se presenta il collarino), smarrimento di animale o di maltrattamento di animali. L'utente deve essere loggato sul sito, dopodiché cliccando sull’apposita voce del menù, basterà compilare il form e dopo aver cliccato il tasto “Invia” verrà visualizzato il messaggio di conferma, se la segnalazione è andata a buon fine, altrimenti di errore con i relativi campi errati. È possibile, inoltre, effettuare una segnalazione anonima, spuntando l’apposita casella presente nel form. Nel caso in cui non si effettui una segnalazione anonima, è possibile definire se si vuole essere contattati per aggiornamenti ed eventualmente con quale modalità (se mediante e-mail o sms). 
						Questa pagina è fruibile sia da ospiti che da registrati; l’utente non loggato può soltanto visualizzare le segnalazioni effettuate da altri utenti. 
						</h5>
						<div class="banner-text text-center">
						  <img class="img-fluid" src="/img/1.png" alt="img" style="padding-right: 30px; padding-bottom: 30px;">
						  <img class="img-fluid" src="/img/2.png" alt="img" /></div>
                        <br>
						 <h4><i class="fas fa-heart fa-xs"></i><strong> Visualizzare le adozioni ed inviare richieste</strong></h4>
                        <h5>Per cercare la lista degli animali da poter adottare, basterà cliccare sulla voce “adozioni” presente nel menù. La richiesta di adozione potrà essere effettuata solo se l’utente è registrato e quindi loggato sul sito. Cliccando sul pulsante “Invia richiesta di adozione” la richiesta verrà inoltrata, con visualizzazione del messaggio “Richiesta inviata”. Questa pagina è fruibile sia da ospiti che da registrati; l’utente non loggato può soltanto visualizzare le adozioni presenti ma non può inviare richieste. .</h5>
                        <div class="banner-text text-center">
						  <img class="img-fluid" src="/img/3.png" alt="img" style="padding-right: 30px; padding-bottom: 30px;">
						  <img class="img-fluid" src="/img/4.png" alt="img" /></div>
                        <br>
                        <span class="caption text-muted"></span>



                        <div class="banner-text text-center" style="color: #2a4b9a">
						 <h1 class="section-heading" style="font-size: 30px;"><i class="fas fa-users"></i> Per l'associazione</h1></div>

					   	   <h4><i class="fas fa-bullhorn fa-xs"></i><strong> Prendere in carico una segnalazione e visualizzarla nella propria area personale</strong></h4>
                        <h5>Dall'area segnalazioni è possibile prendere in carico la segnalazione cliccando su “modifica stato segnalazione” e, successivamente, su “prendi in carico”. Le segnalazioni prese in carico dalle associazioni sono presenti nelle rispettive sezioni “segnalazioni prese in carico” presenti successivamente al click sul nome della stessa. Da qui l’associazione può, mediante un click sulla voce “modifica stato segnalazione”, riaprire la segnalazione, chiuderla e/o aggiornare l’utente mediante il pulsante “Chiudi segnalazione” o “Aggiorna utente”. L’aggiornamento può avvenire tramite mail o sms, in base alla scelta effettuata dall’utente al momento della segnalazione stessa. </h5>
						  <div class="banner-text text-center">
						  <img class="img-fluid" src="/img/5.gif" alt="img" style="padding-right: 30px; padding-bottom: 30px;">
						  <img class="img-fluid" src="/img/6.gif" alt="img" /></div>
                        <br>
                        <span class="caption text-muted"></span>

						 <h4><i class="fas fa-heart fa-xs"></i><strong> Aggiungi adozioni</strong></h4>
                        <h5>Come associazione, una volta loggato, puoi aggiungere una o più possibilità di adozione di animali, cliccando la voce “Adozioni” dal menù e il pulsante “Aggiungi adozione”. Si procederà quindi all’inserimento dei dati richiesti sul form e una volta cliccato il tasto “invia”, il sistema mostrerà il messaggio di corretto inserimento.  Nel caso alcuni campi obbligatori non siano stati compilati o dei campi non siano stati compilati correttamente, il sistema fornirà una notifica di errore e si potrà procede all’inserimento o alla correzione. </h5>
                        <div class="banner-text text-center">
						  <img class="img-fluid" src="/img/7.png" alt="img" style="padding-right: 30px; padding-bottom: 30px;">
						  <img class="img-fluid" src="/img/8.png" alt="img" /></div>
                        <br>
                        <span class="caption text-muted"></span>
                        <hr style="height: 2px;">
                        <div class="banner-text text-center" style="color: #2a4b9a; padding-top: 15px;">
						  <h1 class="section-heading">Le F.A.Q. più frequenti su LovePets</h1></div><hr style="height: 2px;">
							<h5><strong>1) Devo essere per forza registrato/a al sito per effettuare una segnalazione?</strong></h5>
						  	<h5>Si, per effettuare una segnalazione su LovePets devi prima registrarti.</h5>

                            <h5><strong>2) Posso effettuare una segnalazione anonima?</strong></h5>
                            <h5>Si, anche se per effettuare una segnalazione devi necessariamente registrarti al sito, potrai comunque effettuare una segnalazione anonima spuntando la casella "Invia segnalazione anonima" nel form di segnalazione, che non verrà attribuita al tuo account.</h5>

							<h5><strong>3) Posso adottare animali tramite LovePets?</strong></h5>
						  	<h5>Certo, registrandoti ed accedendo con i tuoi dati puoi inoltrare una richiesta di adozione. Verrai successivamente contattato dai volontari che hanno in stallo l’animale.</h5>

							<h5><strong>4) Nel caso in cui trovassi un animale che ha bisogno di soccorso, oltre ad inoltrare la segnalazione su LovePets, cosa devo fare?</strong></p>
						  	<h5>Hai a disposizione una sezione del sito chiamata "Cosa puoi fare", che ti da tutte le informazioni su come comportarti in caso di necessità.</h5>                    

                            <h5><strong>5) Come associazione posso gestire le segnalazioni prese in carico?</strong></h5>
                            <h5>Si, le associazioni hanno una sezione dedicata alle segnalazioni prese in carico in cui possono: riaprirle ad altre associazioni, chiuderle, o contattare l'utente che l'ha effettuata per ricevere altre informazioni.</h5>

                            <h5><strong>6) Posso accedere al sito attraverso i social? Posso condividere post di esso?</strong></h5>
                            <h5>LovePets mette a disposizione dei soli utenti la possibilità di accedere attraverso Google+ ma non di pubblicare post di esso.</h5>
                    </div>
                </div>
            </div>
        </article>
        
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


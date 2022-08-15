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
      
 .site-heading h2 {
  display: block;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.site-heading h2 span {
  color: #2a4b9a;
}

.site-heading h4 {
  display: inline-block;
  padding-bottom: 20px;
  position: relative;  
  z-index: 1;
}

.site-heading h4::before {
  background: #2a4b9a none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 2px;
  left: 50%;
  margin-left: -25px;
  position: absolute;
  width: 50px;
}

.site-heading h2 span {
  color: #2a4b9a;
}

.site-heading {
  margin-bottom: 60px;
  overflow: hidden;
  margin-top: -5px;
}	  
.box {
	border-radius: 150px;
	background:#fff;
	position:relative;
	overflow: hidden;
	text-align:center;
}
.box:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 0px;
    height: 100%;
    border-radius: 150px;
    box-shadow: inset 0 0 25px rgba(0,0,0,0.30);
    transition: all 0.3s ease;
    background-image: linear-gradient(to right, #3c70a4 0%, #64b2cd 100%);
}
.box:hover:before {
    width: 100%;
}
.box:hover .image-wrapper {
	padding:0;	
}
.box:hover .box-desc {
	color:#fff;
}
.box:hover .social li a {
	background:#fff;
	background-image: none;
	color:#000;
}
.box:hover .social li a:hover {
	background:#1d1d1d;
	color:#fff;
}
.image-wrapper {
    position: relative;
	max-width: 210px;
    max-height: 210px;
	margin:0 auto;
    overflow: hidden;
    border-radius: 50%;
    padding: 15px;
    transition: all 0.5s ease;
    box-shadow: inset 0px 0px 20px rgba(0,0,0,0.20);
}
.image-wrapper img {
    border-radius: 50%;
    transition: all 500ms ease;
}
.box-desc {
	position:relative;
}
ul.social {
	padding:0;
}
ul.social li {
	display:inline-block;
	list-style-type:none;
}
ul.social li a {
	position:relative;
	width: 36px;
    height: 36px;
	background-image: linear-gradient(to right, #3c70a4 0%, #64b2cd 100%);
	display:inline-block;
	line-height:36px;
	border-radius:50%;
	color:#fff;
	transition: all .5s ease;
}
    </style>
    <title>LovePets | Homepage</title>

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
                <a class="navbar-brand" href="{{ route('user.welcome') }}"><i class="fas fa-paw fa-lg"></i> 
                 <img src="/img/logoPiccolo.png" alt="logoPiccolo" class="img-fluid">
                </a>
                <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <div class="animated-icon3"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('user.welcome') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.cosaFare') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-list-ul"></i> Cosa puoi fare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.contatti') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-phone"></i> Contatti utili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.adozioni') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-heart"></i> Adozioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.appelli') }}" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-bullhorn"></i> Segnalazioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.faq') }}" target="_blank" style="color: white;padding-right: 15px; padding-left: 15px;"><i class="fas fa-question"></i> Aiuti e FAQ</a>
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
                          <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
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
		<header class="masthead" style="background-image: url('/img/banner.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
					<div class="banner-logo text-center">
              <img src="/img/logoEsteso.png" alt="LOGOLovePets" class="responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Bentornato {{ Auth::user()->nome }}!</h1>
              <a href="{{ route('user.segnalazione') }}" class="btn btn-lg" style="background-color: #2b4c9a; color:white;">Effettua una segnalazione</a>         
            </div>
                    </div>
                </div>
            </div>
</header>
    <main>
    <div class="container">
	<div class="row vh-60" style="margin-bottom: 40px;">
	  <div class="site-heading text-center">
         <h2>Le nostre <span>sezioni</span></h2>
         <h4>Quello che puoi trovare su LovePets</h4>
       </div>
	   
		<div onclick = "window.location = '{{ route('user.cosaFare') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="/img/cosafare.png" alt="..." />
				</div>
				<div class="box-desc">
					<h5><i class="fas fa-list-ul"></i><strong> Cosa puoi fare</strong></h5>
					<p>Quello che puoi fare in<br>particolari situazioni</p>
				</div>
			</div>
		</div>

		<div onclick = "window.location = '{{ route('user.contatti') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="/img/contact.png" alt="..." />
				</div>
				<div class="box-desc">
					<h5><i class="fas fa-phone"></i><strong> Contatti utili</strong></h5>
					<p>Alcuni contatti che possono aiutarti<br>in caso di necessità</p>
				</div>
			</div>
		</div>

		<div onclick = "window.location = '{{ route('user.adozioni') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="/img/adozioni.png" alt="..." />
				</div>
				<div class="box-desc">
					<h5><i class="fas fa-heart"></i><strong> Adozioni</strong></h5>
					<p>Visualizza appelli di adozioni ed<br>adotta un piccolo amico</p>
				</div>
			</div>
		</div>

		<div onclick = "window.location = '{{ route('user.appelli') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
			<div class="box shadow-sm p-4" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="image-wrapper mb-3">
					<img class="img-fluid" src="/img/segn.png" alt="..." />
				</div>
				<div class="box-desc">
					<h5><i class="fas fa-bullhorn"></i><strong> Segnalazioni</strong></h5>
					<p>Effettua segnalazioni e<br>resta aggiornato</p>
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

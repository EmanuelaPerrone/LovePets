@extends ('layouts.app')

@section('title', 'LovePets | Homepage')

@section('content')
<style>
	
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
<header class="masthead" style="background-image: url('/img/banner.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
					<div class="banner-logo text-center">
              <img src="/img/logoEsteso.png" alt="LOGOLovePets" class="responsive">
            </div>
            <div class="banner-text text-center">
				@if (Auth::user())
				<h1 class="white">Bentornato {{ Auth::user()->nome }}!</h1>
				@else
              <h1 class="white">Benvenuto!</h1>
			  @endif
              <a href="{{ route('segnalazione') }}" class="btn btn-lg" style="background-color: #2b4c9a; color:white;">Effettua una segnalazione</a>         
            </div>
                    </div>
                </div>
            </div>
			
</header> 
  <div class="container">
	<div class="row vh-60" style="margin-bottom: 40px;">
	  <div class="site-heading text-center">
         <h2>Le nostre <span>sezioni</span></h2>
         <h4>Quello che puoi trovare su LovePets</h4>
       </div>
	   
		<div onclick = "window.location = '{{ url('/cosaFare') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
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

		<div onclick = "window.location = '{{ url('/contatti') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
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

		<div onclick = "window.location = '{{ url('/adozioni') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
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

		<div onclick = "window.location = '{{ url('/appelli') }}'" style = "cursor: pointer" class="col-sm-6 col-lg-3 my-auto">
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

@endsection
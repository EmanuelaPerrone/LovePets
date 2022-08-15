@extends('layouts.app')

@section('title', 'LovePets | Appelli segnalazioni')

<!-- VA MESSA SOTTO IL DIV  "<div class="col-md-8">"
 <nav id="breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Sei qui: <a href="{{ url('/') }}"> Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ url('/appelli') }}"> Segnalazioni</a></li>
  </ol>
</nav> -->

@section('content')
<header class="masthead" style="background-image: url('img/segnalazione.jpg'); padding-top: 3rem; padding-bottom: 3rem;">
          <div class="container position-relative px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                   <div class="col-md-10 col-lg-8 col-xl-7">
                      <div class="post-heading">
                      <div class="banner-text text-center">
                          <h1>Segnalazioni</h1>
                          <h2 class="subheading">In questa sezione puoi effettuare segnalazioni
                            o trovarne alcune effettuate da altri utenti </h2>
                            @guest
                            <a class="btn btn-lg" href="{{ route('user.login') }}" style="background-color: #2b4c9a; color:white;">Accedi per effettuare una segnalazione</a>
                            @endguest
                            @if(Auth::user())
                            <a class="btn btn-lg" href="{{ route('segnalazione') }}" style="background-color: #2b4c9a; color:white;">Effettua una segnalazione</a>
                            @endif
                         </div>
                       </div>
                  </div>
              </div>
          </div>
</header>
<div class="main">
<ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ url('/appelli') }}"> Segnalazioni</a></li>
  </ol>
  <div class="banner-text text-center">
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per zona, stato, data..." title="Filtra per zona, stato, data...">
  </div>
  <ul id="myUL" class="cards">
              
  @foreach($segnalazione as $segnalazioni)
  <li class="cards_item">
    <div class="card">
      <div class="card_image"><img src="{{ asset('foto_segnalazioni/'.$segnalazioni->file) }}" class="img-fluid" height="200px"></div>
      <div class="card_content"> <br>
      <div class="form-group" style="border-color: grey; padding-left: 20px; padding-right: 20px;">
         <label id="label"><strong>Informazioni generali</strong></label>              
        <br><strong>Animale segnalato: </strong>{{ $segnalazioni->animale }}
        <br><br><strong>Tipo segnalazione:</strong> {{ $segnalazioni->tipoSegnalazione }}
        <br><br><strong>Zona segnalazione:</strong> {{ $segnalazioni->zona }} <br><br>
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
       <div class="text-center">{{ \Carbon\Carbon::parse($segnalazioni->created_at)->diffForHumans() }}</div>
      </div>
    </div>
  </li>
  @endforeach
</ul>
<div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">   
  {{ $segnalazione->links() }}
    </div>
<script>
            function myFunction() {
               var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();

                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("p")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            } else {
            li[i].style.display = "none";
            }
            }
            }
            </script>
</div>

@endsection
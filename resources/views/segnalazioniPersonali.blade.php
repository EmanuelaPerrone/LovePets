@extends('layouts.app')

@section('title', 'LovePets | AAA mie segnalazioni')

@section('content')
  <header class="masthead" style="background-image: url('/img/segnalazione.jpg');  padding-top: 4rem; padding-bottom: 4rem;">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                <div class="banner-text text-center">    
                <h1>Le mie segnalazioni</h1>
                    <h2 class="subheading">Di seguito trovi tutte le segnalazioni che hai effettuato</h2>
                </div>
                  </div>
            </div>
        </div>
    </div>
</header>
<div class="main">
  <ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Login Utente</a></li>
    <li class="breadcrumb-item active"> <a href="#"> Le mie segnalazioni</a></li>
  </ol>
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
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per zona, stato, data..." title="Filtra per zona, stato, data...">
  </div>
  <ul id="myUL" class="cards">
  @foreach($segnalazione as $segnalazioni)
   <li class="cards_item">
    <div class="card">
     <div class="card_image">       
       <img src="{{ asset('foto_segnalazioni/'.$segnalazioni->file) }}" class="img-fluid" height="200px"></div>
       @if(is_null($segnalazioni->file)) {{ __('Immagine non presente') }} @endif
      <div class="card_content">
       <p class="card-text"> <font size="6">{{ $segnalazioni->animale }}</font><br><br><strong>Tipo segnalazione:</strong> {{ $segnalazioni->tipoSegnalazione }}
        <br><br><strong>Zona del ritrovamento:</strong> {{ $segnalazioni->zona }}

        @if(is_null($segnalazioni->note)) 
        <br><br><strong>Informazioni aggiuntive:</strong> --        
        @else
        <br><br><strong>Informazioni aggiuntive:</strong> {{ $segnalazioni->note }}
        @endif
        <br><br><strong>Data segnalazione:</strong> {{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}
        <br><br><strong>Stato segnalazione: </strong> 
        @if($segnalazioni->stato == 'presa in carico') 
        <strong style="color: green;">{{ $segnalazioni->stato }}</strong><br><br>
        @else
        {{ $segnalazioni->stato }}<br><br>
        @endif
        
         <div class="text-center">{{ \Carbon\Carbon::parse($segnalazioni->created_at)->diffForHumans() }}</div></p>        
        
                  
        @if($segnalazioni->stato == 'presa in carico')
        <div class="text-center" style="border: 1px solid grey; border-radius: 5px;">
        <div style="padding: 20px;"><strong><i class="fas fa-info-circle"></i> Non puoi rimuovere la segnalazione in quanto un'associazione l'ha presa in carico.<br>Puoi inviarle un messaggio:<br></strong></div>
          <form onsubmit="return confirm('Sei sicuro di voler inviare questo messaggio?')" action="{{ route('user.messaggioUT') }}">   
          <input type="hidden" value="{{ $segnalazioni->email }}" name="email_utente" id="email_utente">
          <input type="hidden" value="{{ date('d-m-Y, H:i', strtotime($segnalazioni->created_at)) }}" name="data_segnalazione" id="data_segnalazione">    
          <input type="hidden" value="{{ $segnalazioni->id_segnalazione }}" id="id_segnalazione" name="id_segnalazione">          
          <input type="hidden" value="{{ $segnalazioni->assoc_id }}" name="assoc_id" id="assoc_id">         
          <textarea name="messaggioUT" placeholder="Scrivi qui il tuo messaggio..." required id="messaggioUT" style="width: 200px; margin-bottom: 10px;"></textarea>
          <br><button class="btn" type="submit" style="margin-bottom: 5px; background-color: #2b4c9a; color: white; margin-bottom: 20px;"><i class="fas fa-share"></i> Invia</button></form>         
        </div>
               
        @elseif($segnalazioni->stato == 'aperta')
        <div class="banner-text text-center">    
        <a class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa segnalazione?')" href="{{ route('user.cancellaSegn', $segnalazioni->id_segnalazione ) }}" style="margin-bottom: 5px;"><i class="fas fa-trash-alt"></i> Rimuovi segnalazione</a>  
        </div>
        @endif
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
  @endsection



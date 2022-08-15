@extends('layouts.app')

@section('title', 'LovePets | Adozioni')

<!-- VA MESSA SOTTO IL DIV  "<div class="col-md-8">"
 <nav id="breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Sei qui: <a href="{{ url('/') }}"> Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ url('/adozioni') }}"> Adozioni</a></li>
  </ol>
</nav> -->


@section('content')

<header class="masthead" style="background-image: url('/img/b.jpg'); padding-top: 4rem; padding-bottom: 4rem;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <div class="banner-text text-center">
                            <h1>Adotta un Cercafamiglia</h1>
                            <h2 class="subheading">Adottare un Cercafamiglia non è solo migliorarti la vita, adottarlo vuol dire avere per sempre un amico che non ti tradirà mai, disposto a dare la sua vita per te, in cambio del tuo amore...</h2>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <div class="main">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">Sei qui:  <a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active"> <a href="{{ url('/adozioni') }}"> Adozioni</a></li>
              </ol>
              <div class="banner-text text-center">
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per zona, stato, data..." title="Filtra per zona, stato, data...">
              </div>
              <ul id="myUL" class="cards">
              
                @foreach($adozione as $adozioni)
                <li class="cards_item">
                  <div class="card">
                    <div class="card_image"><img src="{{ asset('foto_adozioni/'.$adozioni->file) }}" class="img-fluid" height="200px"></div>
                    <div class="card_content">                  
                    <p class="card-text">{{ $adozioni->descr }}<br><br><strong>Taglia:</strong> {{ $adozioni->taglia }}<br><br><strong>Età:</strong> {{ $adozioni->eta }}
                    <br><br><strong>Per ulteriori informazioni:</strong> {{ $adozioni->contatti }}<br><br><strong>Data aggiunta appello:</strong> {{ date('d-m-Y, H:i', strtotime($adozioni->created_at)) }} <div class="text-center">{{ \Carbon\Carbon::parse($adozioni->created_at)->diffForHumans() }}</div></p> 
                    @if(Auth::user())
                    <div class="banner-text text-center"> 
                     <button class="btn" style="background-color: #2b4c9a; color: white;"><i class="fas fa-share"></i> Invia richiesta di adozione</button>
                    </div>
                    @endif
                  </div>
                  </div>
                </li>
                @endforeach
              </ul>              
              <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">   
               {{ $adozione->links() }}
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
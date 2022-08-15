@extends('layouts.app')

@section('title', 'LovePets | Cosa puoi fare')

@section('content')
<header class="masthead" style="background-image: url('/img/cane.jpg'); padding-top: 4rem; padding-bottom: 4rem;">
 <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="post-heading">
             <div class="banner-text text-center">
                <h1>Cosa fare quando si trova un cane o un gatto abbandonato</h1>
                <h2 class="subheading">A chi non è mai capitato di imbattersi in un cane o un gatto senza casa? Cosa fare per soccorrere l'animale e cosa non fare...</h2>
             </div>
            </div>
        </div>
    </div>
</div>
</header>
<ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui: <a href="{{ route('welcome') }}">Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('cosaFare') }}"> Cosa puoi fare</a></li>
  </ol>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
					   <h2 class="section-heading">Se trovi un cane</h2>
                        <p>Avvicinati all'animale con calma. Non camminare in maniera diretta verso di lui: il cane potrebbe interpretare questo gesto come una minaccia, spaventarsi e scappare o diventare aggressivo. Stai accucciato e presta attenzione ai suoi segnali: denti scoperti, ringhi, pelo irto devono metterti in guardia. Nei casi più difficili, se il cane è molto impaurito e diffidente, è meglio non avvicinarsi e far intervenire gli esperti del canile, della ASL o di una delle tante associazioni di tutela degli animali presenti in tutta Italia. Se invece si lascia avvicinare puoi rifocillarlo con un poco di acqua e di cibo. Il cibo, spesso, è anche un ottimo modo per fare "amicizia" e per far capire all'animale che non vogliamo fargli del male.</p>
						<p>Poi chiama la Polizia Locale, oppure il servizio veterinario dell'ASL, o l'Ente Protezione Animali (Enpa) o una delle associazioni di volontari che si occupano di animali abbandonati e informali del ritrovamento. Una volta che l'avranno recuperato, il cane sarà portato nel canile e rimarrà in osservazione per circa 10 giorni. Al termine dei quali, se non verrà trovato il legittimo proprietario, sarà disponibile per l'adozione.</p>
						<p>Controlla che non abbia il tatuaggio, guardando nell'interno coscia o all'interno del padiglione auricolare (spesso è difficile da vedere a causa del pelo, quindi meglio lasciar fare al veterinario).</p>
                        <h2 class="section-heading">Se trovi un gatto</h2>
                        <p>Se si tratta di un gatto che si è perso o è stato abbandonato ed è abituato al contatto con l'uomo non dovresti avere grandi difficoltà ad avvicinarlo. Se proprio è timido prova a offrirgli un po' di cibo. Se invece si tratta di un gatto randagio oppure di un gatto molto spaventato, riuscire a prenderlo potrebbe essere molto difficile. In questo caso è meglio rivolgersi a una delle numerose associazioni per la tutela degli animali (vedi riquadro), che hanno le competenze e le attrezzature necessarie per recuperarlo senza eccessivi traumi.</p>
                        <a href="#!"><img class="img-fluid" src="/img/gatto.jpg" alt="..." /></a>
                        <p>Se l'animale si trova in pericolo o rappresenta un pericolo, la prima cosa da fare è chiamare le forze dell'ordine (vigili, polizia, carabinieri, a seconda di dove ci si trova). Se invece si può gestire la situazione si può portare l'animale dal veterinario, soprattutto se è ferito.</p>
                        <p>Quando l'avrai avvicinato, puoi chiamare un'associazione di volontariato che si occuperà di lui; oppure portarlo dal veterinario, che controllerà il suo stato di salute e ti darà le indicazioni su come occuparti di lui.</p> </p>
                    </div>
                </div>
            </div>
        </article>
@endsection
@extends('layouts.app')

@section('title', 'LovePets | Aiuti e FAQ')

@section('content')
<header class="masthead" style="background-image: url('/img/faq.jpg'); padding-top: 4rem; padding-bottom: 4rem;">
 <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="post-heading">
             <div class="banner-text text-center">
                <h1>AIUTI E FAQ</h1>
                <h2 class="subheading">Una guida all'utilizzo del nostro sito e le risposte alle domande più frequenti</h2>
             </div>
            </div>
        </div>
    </div>
</div>
</header>
<ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item">Sei qui: <a href="{{ route('welcome') }}">Home</a></li>
    <li class="breadcrumb-item active"> <a href="{{ route('faq') }}"> Aiuti e FAQ</a></li>
  </ol>
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
       
       
@endsection
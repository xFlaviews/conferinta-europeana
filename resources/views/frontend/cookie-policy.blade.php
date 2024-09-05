@extends('frontend.layouts.app')

@section('title', __('Coockie Policy'))

@section('content')
    <section class="min-vh-100 mb-5 mt-7 p-5 container-fluid">
        <div>
            <h1>
                {{ __('Coockie Policy') }}
            </h1>
            <p>
                Il presente sito web utilizza cookie tecnici per garantire il corretto funzionamento delle procedure e
                migliorare l'esperienza di uso delle applicazioni online. Il presente documento fornisce informazioni
                sull'uso dei cookie e di tecnologie similari, su come sono utilizzati dal sito e su come gestirli.
            </p>
            <h2>
                Definizione
            </h2>
            <p>
                I cookie sono piccoli file di testo che i siti visitati dagli utenti inviano ai loro terminali, ove vengono
                memorizzati per essere poi ritrasmessi agli stessi siti alla visita successiva. I cookie delle c.d. "terze
                parti" vengono, invece, impostati da un sito web diverso da quello che l'utente sta visitando. Questo perché
                su ogni sito possono essere presenti elementi (immagini, mappe, suoni, specifici link a pagine web di altri
                domini, ecc.) che risiedono su server diversi da quello del sito visitato.
            </p>
            <h2>
                Tipologie di cookie
            </h2>
            <p>
                In base alle caratteristiche e all'utilizzo dei cookie si possono distinguere diverse categorie:

                - Cookie tecnici. I cookie tecnici sono quelli utilizzati al solo fine di "effettuare la trasmissione di una
                comunicazione su una rete di comunicazione elettronica, o nella misura strettamente necessaria al fornitore
                di un servizio della società dell'informazione esplicitamente richiesto dall'abbonato o dall'utente a
                erogare tale servizio" (cfr. art. 122, comma 1, del Codice).Essi non vengono utilizzati per scopi ulteriori
                e sono normalmente installati direttamente dal titolare o gestore del sito web. Possono essere suddivisi in
                cookie di navigazione o di sessione, che garantiscono la normale navigazione e fruizione del sito web;
                cookie analytics, assimilati ai cookie tecnici laddove utilizzati direttamente dal gestore del sito per
                raccogliere informazioni, in forma aggregata, sul numero degli utenti e su come questi visitano il sito
                stesso; cookie di funzionalità, che permettono all'utente la navigazione in funzione di una serie di criteri
                selezionati al fine di migliorare il servizio reso allo stesso. Per l'installazione di tali cookie non è
                richiesto il preventivo consenso degli utenti, mentre resta fermo l'obbligo di dare l'informativa ai sensi
                dell'art. 13 del Codice, che il gestore del sito, qualora utilizzi soltanto tali dispositivi, potrà fornire
                con le modalità che ritiene più idonee.

                - Cookie di profilazione. I cookie di profilazione sono volti a creare profili relativi all'utente e vengono
                utilizzati al fine di inviare messaggi pubblicitari in linea con le preferenze manifestate dallo stesso
                nell'ambito della navigazione in rete. In ragione della particolare invasività che tali dispositivi possono
                avere nell'ambito della sfera privata degli utenti, la normativa europea e italiana prevede che l'utente
                debba essere adeguatamente informato sull'uso degli stessi ed esprimere così il proprio valido consenso. Ad
                essi si riferisce l'art. 122 del Codice laddove prevede che "l'archiviazione delle informazioni
                nell'apparecchio terminale di un contraente o di un utente o l'accesso a informazioni già archiviate sono
                consentiti unicamente a condizione che il contraente o l'utente abbia espresso il proprio consenso dopo
                essere stato informato con le modalità semplificate di cui all'articolo 13, comma 3" (art. 122, comma 1, del
                Codice). Il presente sito non utilizza cookie di profilazione.
            </p>
            <h2>
                Google Analytics
            </h2>
            <p>
                Il sito include anche componenti trasmesse da Google Analytics, un servizio di analisi del traffico web
                fornito da Google, Inc. ("Google"). Tali cookie sono usati al solo fine di monitorare e migliorare le
                prestazioni del sito. Per ulteriori informazioni, si rinvia al link di seguito indicato:

                https://www.google.it/policies/privacy/partners/

                L'utente può disabilitare in modo selettivo l'azione di Google Analytics installando sul proprio browser la
                componente di opt-out fornito da Google. Per disabilitare l'azione di Google Analytics, si rinvia al link di
                seguito indicato:

                https://tools.google.com/dlpage/gaoptout
            </p>
            <h2>
                Durata dei cookie
            </h2>
            <p>
                Alcuni cookie (cookie di sessione) restano attivi solo fino alla chiusura del browser o all'esecuzione
                dell'eventuale comando di logout. Altri cookie "sopravvivono" alla chiusura del browser e sono disponibili
                anche in successive visite dell'utente. Questi cookie sono detti persistenti e la loro durata è fissata dal
                server al momento della loro creazione. In alcuni casi è fissata una scadenza, in altri casi la durata è
                illimitata.
            </p>
            <h2>
                Gestione dei cookie
            </h2>
            <p>
                L'utente può decidere se accettare o meno i cookie utilizzando le impostazioni del proprio browser.
                Attenzione: con la disabilitazione totale o parziale dei cookie tecnici potrebbe compromettere l'utilizzo
                ottimale del sito.
                La disabilitazione dei cookie "terze parti" non pregiudica in alcun modo la navigabilità.
                L'impostazione può essere definita in modo specifico per i diversi siti e applicazioni web. Inoltre i
                browser consentono di definire impostazioni diverse per i cookie "proprietari" e per quelli di "terze
                parti". A titolo di esempio, in Firefox, attraverso il menu Strumenti->Opzioni->Privacy, è possibile
                accedere ad un pannello di controllo dove è possibile definire se accettare o meno i diversi tipi di cookie
                e procedere alla loro rimozione. In internet è facilmente reperibile la documentazione su come impostare le
                regole di gestione dei cookies per il proprio browser, a titolo di esempio si riportano alcuni indirizzi
                relativi ai principali browser:
                <br>
                <br>
                Chrome: <a href="https://support.google.com/chrome/answer/95647?hl=it">https://support.google.com/chrome/answer/95647?hl=it</a>
                <br>
                Firefox: <a href="https://support.mozilla.org/it/kb/Gestione%20dei%20cookie">https://support.mozilla.org/it/kb/Gestione%20dei%20cookie</a>
                <br>
                Internet Explorer: <a href="https://windows.microsoft.com/it-it/windows7/how-to-manage-cookies-in-internet-explorer-9">https://windows.microsoft.com/it-it/windows7/how-to-manage-cookies-in-internet-explorer-9</a>
                <br>
                Opera: <a href="https://help.opera.com/Windows/10.00/it/cookies.html">https://help.opera.com/Windows/10.00/it/cookies.html</a>
                <br>
                Safari: <a href="https://support.apple.com/kb/HT1677?viewlocale=it_IT">https://support.apple.com/kb/HT1677?viewlocale=it_IT</a>
            </p>
        </div>
    </section>
@endsection

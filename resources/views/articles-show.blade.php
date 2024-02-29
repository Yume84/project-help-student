<body class="font-sans antialiased bg-light-blue">
    <x-home-layout>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">{{ $article->title }} </h2>
            <div class="text-lg text-left mt-4 mb-6">La carte vitale est un peu comme une carte qui permet d'accéder aux soins médicaux en France.<br>
                Grâce à elle on peut se faire rembourser une partie des frais lorsqu'on va chez le docteur, à l'hôpital ou pour acheter des médicaments à la pharmacie.<br>
                Elle contient des informations importantes sur la personne, comme son nom et son numéro d'identification.<br>
                Ce numéro est important. Ton employeur ou ton futur employeur utilise votre numéro de sécurité sociale, les médecins, les hôpitaux et tous les professionnels de santé (infirmières, pharmaciens etc).<br>
                C'est un élément indispensable pour rembourser tes frais de santé, percevoir tes indemnités journalières, verser tes allocations familiales ou encore calculer ta retraite.
            </div>
        </x-help-case>

        <!-- Documents requis -->
        <x-help-case>

            <!-- Titre -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 mt-2 rounded-lg">Documents requis</h2>

            <!-- Informations -->
            <div class="text-lg text-left mt-4 mb-6 total-dark-blue">
                <li>Carte nationale d'identité ou passeport</li>
                <li>Titre de séjour</li>
          
                  <div class="liste-blue">
                    <p>Pour savoir si tu détiens le titre définitif ou te renseigner sur les formalités à accomplir pour l'obtenir, contacte le consulat de France dans ton pays ou reporte-toi aux informations disponibles sur la page 
                        <a href="https://www.campusfrance.org/fr" target="_blank">
                            <span class="lien">Campus France</span>
                        </a>
                    </p>
                  </div>
          
                <li>Attestation de scolarité pour l'année en cours</li>
                <li>Attestation d'autorisation parentale (pour les étudiants de moins de 16 ans)</li>
                <li>IBAN (International Bank Account Number) ou  relevé d'identité bancaire (RIB) pour tes remboursements</li>
                <li>Document d'état civil confirmant ton identité, au choix :</li>
          
                  <div class="liste-blue">
                    <p>Une copie intégrale de l'acte de naissance</p>
                    <p>Un extrait d'acte de naissance avec filiation (ou toute pièce établie par un consulat)</p>
                    <p>Un livret de famille</p>
                    <p>Un acte de mariage</p>
                  </div>
          
                <li>Des accords et conventions internationales peuvent prévoir d'autres justificatifs selon votre pays d'origine</li>
              </div>
          
        </x-help-case>

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">{{ $article->title }} </h2>
            <div class="text-lg text-left mt-4 mb-6">La carte vitale est un peu comme une carte qui permet d'accéder aux soins médicaux en France.<br>
                Grâce à elle on peut se faire rembourser une partie des frais lorsqu'on va chez le docteur, à l'hôpital ou pour acheter des médicaments à la pharmacie.<br>
                Elle contient des informations importantes sur la personne, comme son nom et son numéro d'identification.<br>
                Ce numéro est important. Ton employeur ou ton futur employeur utilise votre numéro de sécurité sociale, les médecins, les hôpitaux et tous les professionnels de santé (infirmières, pharmaciens etc).<br>
                C'est un élément indispensable pour rembourser tes frais de santé, percevoir tes indemnités journalières, verser tes allocations familiales ou encore calculer ta retraite.
            </div>
        </x-help-case>

    </div>

    <p>
        Contenu : {{ $article->content }}
    </p>

    <p>
        Langue : {{ $article->lang_id }}
    </p>

    <p>
        URL : {{ $article->slug}}
    </p>

</x-home-layout>
</body>

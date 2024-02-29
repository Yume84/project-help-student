<body class="font-sans antialiased bg-light-blue">
    <x-home-layout>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">{{ $article->title }} </h2>
            <div class="text-lg text-left mt-4">La carte vitale est un peu comme une carte qui permet d'accéder aux soins médicaux en France.<br>
                Grâce à elle on peut se faire rembourser une partie des frais lorsqu'on va chez le docteur, à l'hôpital ou pour acheter des médicaments à la pharmacie.<br>
                Elle contient des informations importantes sur la personne, comme son nom et son numéro d'identification.<br>
                Ce numéro est important. Ton employeur ou ton futur employeur utilise votre numéro de sécurité sociale, les médecins, les hôpitaux et tous les professionnels de santé (infirmières, pharmaciens etc).<br>
                C'est un élément indispensable pour rembourser tes frais de santé, percevoir tes indemnités journalières, verser tes allocations familiales ou encore calculer ta retraite.
            </div>
        </x-help-case>

        <!-- Documents requis -->
        <x-help-case>

            <!-- Titre -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-2 rounded-lg">Documents requis</h2>

            <!-- Informations -->
            <div class="text-lg text-left mt-4 total-dark-blue">
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

        <!-- Obtention -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Comment obtenir la carte vitale ?</h2>
            <div class="text-lg text-left mt-4">Il faut s'inscrire à un système appelé "sécurité sociale" qui te fournit un numéro de sécurité sociale.<br>
                Une fois ce numéro obtenu, tu peux obtenir une carte vitale pour aller chez le médecin et être remboursé pour une partie des frais médicaux.
            </div>

            <!-- Image -->
            <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="my-8 h-30 w-full object-cover"/>
           
            <!-- Tu n'as pas de numéro de sécurité sociale -->
            <h3 class="text-blue text-left font-extrabold text-2xl mb-4">Tu n'as pas encore de numéro de sécurité sociale :</h3>

            <!-- Tu es né(e) dans un pays de l’Union Européenne ?-->
            <div class="mb-4">
                <!-- Papiers -->
                <x-help-dropdown>
        
                    <x-slot name="trigger"> <!-- Contenu visible -->
                        <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                            <span class="text-dark-blue font-semibold text-xl">Tu es né(e) dans un pays de l'Union Européenne ?</span>
        
                                <div class="ms-1"> <!-- Flèche -->
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>
        
                    <x-slot name="content"> <!-- Liste déroulante -->
                        <div class="m-8">

                            <!-- Informations -->
                            <div class="text-lg text-left mt-4">
                                <p>Tu dois te procurer la Carte Européenne d'Assurance Maladie (CEAM) :</p></br>
                                <li><a href="https://www.ameli.fr/val-d-oise/assure/adresses-et-contacts/votre-carte-vitale-carte-europeenne-d-assurance-maladie-ceam/" target="_blank"><span class="lien">En ligne</span></a> depuis ton compte Ameli.<br>
                                Si tu ne sais pas ce qu'est Ameli, clique <a href="https://www.ameli.fr/val-d-oise/assure/adresses-et-contacts/votre-carte-vitale-carte-europeenne-d-assurance-maladie-ceam/"><span class="lien">ici</span></a> pour suivre notre tutoriel.</li></br>
                                <li>Par téléphone :</li>
                                
                                <div class="liste-blue">
                                    <p>En France, du lundi au vendredi, de 8h30 à 17h30<br/>3646 (service gratuit + prix d'un appel)</p>
                                </div>

                                <div class="liste-blue">
                                    <p>Depuis Mayotte, du lundi au jeudi de 7 h 30 à 14 h 30<br/>+33 2 69 61 91 91</p>
                                </div>
                                
                                <div class="liste-blue">
                                    <p>Depuis l'étranger<br/>+33 1 84 90 36 46 (service gratuit + prix d'un appel)</p>
                                </div>
                            </div>

                        </div>
                    </x-slot>
        
                </x-help-dropdown>
            </div>

            <!-- Tu es né(e) dans un pays de hors de l'Union Européenne ?-->
            <div class="mb-8">
                <!-- Papiers -->
                <x-help-dropdown>
        
                    <x-slot name="trigger"> <!-- Contenu visible -->
                        <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                            <span class="text-dark-blue font-semibold text-xl">Tu es né(e) dans un pays hors de l'Union Européenne ?</span>
        
                                <div class="ms-1"> <!-- Flèche -->
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>
        
                    <x-slot name="content"> <!-- Liste déroulante -->
                        <div class="m-8">

                            <!-- Informations -->
                            <div class="text-lg text-left mt-4">
                                <p>Clique sur cette <a href="https://etudiant-etranger.ameli.fr/#/" target="_blank"><span class="lien">adresse</span></a> pour créer ton compte.</p><br/>
                                <p>En plus des justificatifs obligatoires, d'autres informations te seront demandées :</p>
                                
                                <div class="liste-blue">
                                    <li>Nom</li>
                                    <li>Prénom</li>
                                    <li>Date de naissance</li>
                                    <li>Pays de naissance</li>
                                    <li>Adresse email</li>
                                    <li>Adresse postale en France</li>
                                    <li>Numéro de téléphone</li>
                                    <li>Date de début des droits à l'Assurance Maladie (la date de début de la scolarité dans l'établissement d'enseignement supérieur)</li>
                                </div>

                                <p>Tu vas avoir un numéro de sécurité sociale provisoire qui va te donner accès à une attestation provisoire que tu pourras télécharger sur ton espace. Cette attestation te permettra de :</p>
                                <div class="liste-blue">
                                    <p>Déclarer un médecin traitant, cette procédure permet d'avoir un meilleur suivi médical et des soins mieux remboursés</p>
                                </div>

                                <div class="liste-blue">
                                    <p>D'adhérer à une complémentaire santé qui permet de compléter tes remboursements de l'Assurance Maladie et de diminuer ta reste à charge</p>
                                </div>
                            </div>

                        </div>
                    </x-slot>
        
                </x-help-dropdown>
            </div>

            <!-- Tu n'as pas de numéro de sécurité sociale -->
            <h3 class="text-blue text-left font-extrabold text-2xl mb-4">Tu as fourni tes pièces justificatives obligatoires :</h3>
            <div class="text-lg text-left mt-4">
                <li>Ton numéro de sécurité sociale va être certifié</li>
                <li>Tu peux alors télécharger l'attestation définitive sur ton <a href="https://etudiant-etranger.ameli.fr/#/" target="_blank"><span class="lien">espace Ameli</span></a></li>
                <li>Un formulaire vous sera envoyé afin de faire la demande pour obtenir la carte vitale physique</li>
            </div>
            
        </x-help-case>

        <!-- Conclusion -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Rappel</h2>
            <div class="text-lg text-left mt-4">Avant ta visite médicale, n'oublie pas de mettre à jour ta carte vitale. <br>
                Mettre à jour ta carte vitale chaque année et à chaque changement de situation est un réflexe indispensable. <br>
                Ta carte Vitale atteste de tes droits à l'assurance maladie et contient toutes les informations nécessaires au remboursement de tes soins. <br>
                Sa mise à jour régulière garantit ainsi que tu seras remboursé du bon montant et rapidement.
            </div>  
        </x-help-case>

    </div>

    <!--<p>
        Contenu : {{ $article->content }}
    </p>

    <p>
        Langue : {{ $article->lang_id }}
    </p>

    <p>
        URL : {{ $article->slug}}
    </p>-->

</x-home-layout>
</body>

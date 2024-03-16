<body class="font-sans antialiased bg-light-blue">
    <x-home-layout>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <!-- CARTE VITALE -->

        @if($article->slug === 'carte-vitale')

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

        @endif

        <!-- DEMANDE DE LOGEMENT -->

        @if($article->slug === 'demande-de-logement')

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">{{ $article->title }} </h2>
            <div class="text-lg text-left">
                <p class="mt-4">Une demande de logement peut parfois être laborieuse. Nous expliquons les étapes à suivre pour faire ta demande : formulaires à remplir, documents à fournir, ce qu'est un garant et surtout où rechercher lorsqu'on est étudiant.</p>
                <p class="mt-4">De multiples possibilités s'offrent à toi pour te loger durant tes études en France. Tu pourras choisir entre un logement dans le secteur public ou privé, en résidence étudiante ou en appartement, seul ou en colocation, dans une chambre chez l'habitant ou un logement indépendant. Ne t'inquiète pas, nous sommes là pour te guider à travers tous les types de logements disponibles pour les étudiants et pour t'accompagner dans tes recherches.</p>
                <p class="mt-4">Il est recommandé de commencer tes recherches dès que possible. N'hésite pas à réserver un logement, même temporaire, pour avoir une adresse où tu peux t'installer en arrivant. Tu auras ensuite le temps de chercher tranquillement un logement permanent.</p>
                <p class="mt-4">Pense également à contacter ton établissement. Certains, notamment les Grandes Écoles, proposent leurs propres logements ou disposent d'une plateforme dédiée à la recherche de logements pour leurs étudiants.</p>
            </div>
        </x-help-case>

        <!-- Logement -->
        <x-help-case>

            <h3 class="text-blue text-left font-extrabold text-2xl mb-6">En attendant, voici quelques sites qui pourraient t'aider dans ta recherche ! 🙂</h3>
                
            <!-- CROUS -->
            <div class="mb-4">
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">L'aide au logement CROUS</span>

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
                        <div class="text-lg text-left">
                            <p class="mt-4">Le CROUS (Centre Régional des Œuvres Universitaires et Scolaires) est un organisme public français qui vise à améliorer les conditions de vie et d'études des étudiants. Il propose divers services tels que la restauration universitaire, l'hébergement en résidences universitaires, l'aide financière (bourses sur critères sociaux), des services culturels et sociaux, ainsi que des actions en faveur de la vie étudiante. Le CROUS opère dans chaque région universitaire française et joue un rôle important dans le soutien aux étudiants, en particulier ceux issus de milieux modestes.</p>
                            <p class="mt-4">Il est possible de faire une demande de logement auprès du CROUS à partir de juillet sur la <a href="https://trouverunlogement.lescrous.fr/" target="_blank"><span class="lien">plateforme du CROUS</span></a>. Tu n'auras pas besoin de passer par la phase principale d'affectation, réservée exclusivement aux étudiants ayant rempli un dossier social étudiant.</p>
                            
                            <div class="liste-blue mb-4">
                                <p>⛔ Les chambres de CROUS sont très demandées par les étudiants en raison de leur loyer abordable (environ 450€ sur Paris et 350€ en région), de leur proximité avec les lieux d'études et de leur vie sociale animée. Le principal inconvénient est donc le nombre limité de places disponibles par rapport à la forte demande.</p>
                            </div>

                            <h3 class="text-blue text-left font-extrabold text-xl mb-4">Dans quel cas peux-tu être concerné ?</h3>

                            <div class="liste-blue">
                                <li>Tu dois être inscrit(e) dans une université public</li>
                                <li>Si tu fais un stage dans le cadre universitaireSi tu fais un stage dans le cadre universitaire</li>
                                <li>Si tu dois effectuer un moyen séjour (>30 jours)</li>
                            </div>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <!-- CROUS -->
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">D'autres moyens existent pour se loger</span>

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
                        <div class="text-lg text-left">
                            <li class="mt-4"><a href="https://www.lokaviz.fr/" target="_blank"><span class="lien">Lokaviz</span></a> est un site officiel du logement étudiant du réseau des œuvres universitaires et scolaires.</li>
                            <li class="mt-4">La cité internationale universitaire de Paris Située dans le 14e arrondissement de Paris, la Cité internationale universitaire de Paris (CIUP) est un vaste ensemble de <a href="https://www.ciup.fr/demander-hebergement/" target="_blank"><span class="lien">résidences universitaires</span></a>. Elle accueille près de 6 000 étudiants, chercheurs, artistes et sportifs de haut niveau venus du monde entier. Le loyer des chambres varie en fonction de leur confort, de l'âge des occupants et de la durée du séjour.</li>
                            
                            <div class="liste-blue mb-4">
                                <p>⛔ Pour y être logé, il faut être inscrit dans un établissement de la région parisienne et préparer au moins un diplôme de niveau Master 1.</p>
                            </div>

                            <li class="mt-4">Tu fais partie du plateau universitaire Paris Saclay ? L'université met à disposition l'ensemble des <a href="https://logement.campus-paris-saclay.fr/" target="_blank"><span class="lien">offres de logement</span></a> des différents bailleurs ayant une ou plusieurs résidences étudiantes sur ou à proximité du Plateau de Saclay.</li>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>

        </x-help-case>

        <!-- Garants -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Le garant</h2>
            <div class="text-lg text-left">
                <p class="mt-4">Tu prépares ton dossier locatif, tu te demandes quel est le rôle d'un garant et comment en trouver un ?</br>
                    Tes parents ne peuvent pas se porter volontaires ? Nous allons te donner tous les moyens pour finaliser ta demande de logement.
                </p>
                <h3 class="text-blue text-left font-extrabold text-2xl mt-4 mb-4">Qu'est-ce qu'un garant ?</h3>

                <p class="mt-4">Lorsque tu loues un logement, ton garant promet de payer le loyer si jamais tu ne pouvais pas le faire. Cela signifie que le garant est aussi responsable que toi pour le paiement. Si tu ne peux pas payer, le propriétaire peut demander l'argent au garant. Donc, choisir quelqu'un pour être ton garant est une décision importante.</p>
                <p class="mt-4">Tu l'as  compris, un garant est une personne engagée, dont le revenu est suffisant (au moins 3 fois supérieur au montant du loyer) pour assumer le paiement de ton loyer en cas de besoin. Bien souvent, les garants sont les parents du locataire mais tu peux faire appel à n'importe quel proche de confiance.</p>

                <div class="liste-blue mb-4">
                    <p class="mt-4">Si personne ne peut se porter volontaire pour toi, il existe des aides comme <a href="https://www.visale.fr/" target="_blank"><span class="lien">Visale</span></a> qui est un dispositif du groupe Action Logement. C'est un outil social français, dont le but est de favoriser l'accès au logement.</br>
                        Pour bénéficier de cette aide, le loyer doit être inférieur à 2000€ mensuel et être âgé de 18 à 30 ans.
                    </p>
                    <p class="mt-4">Pour tester son éligibilité remporte toi sur <a href="https://site.actionlogement.fr/eligibilite-visale/" target="_blank"><span class="lien">cette page</span></a>.</p>
                    <p class="mt-4">Pour faire la <a href="https://fo.visale.fr/#!/login/locataire" target="_blank"><span class="lien">demande</span></a>.</p>
                </div>
            </div>
        </x-help-case>

        @endif

        <!-- ACTE DE NAISSANCE -->

        @if($article->slug === 'acte-de-naissance')

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">{{ $article->title }}</h2>
            <div class="text-lg text-left">
                <p class="mt-4">Ce document juridique qui atteste ta naissance peut être demandé lors d'une demande de visa, pour l'obtention d'une pièce d'identité, pour l'obtention d'un permis de conduire…</p>
            </div>
        </x-help-case>

        <!-- Documents requis -->
        <x-help-case>

            <!-- Titre -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-2 rounded-lg">Documents requis</h2>

            <!-- Informations -->
            <div class="text-lg text-left mt-4 total-dark-blue">
                <li>Ton identité (nom, prénom, date de naissance) </li>
                <li>Ton adresse postale</li>
                <li>Ton lieu de naissance</li>
                <li>Le type d'acte souhaité (copie intégrale, extrait avec ou sans filiation ou extrait plurilingue)</li>
                <li>La raison de ta demande</li>
                <li>Les renseignements relatifs à tes parents (copie intégrale ou extrait avec filiation)</li>
                <p class="mt-4">Cette démarche est la même pour une demande d'acte de mariage ou d'acte de décès.</p>
              </div>
          
        </x-help-case>

        <!-- Comment obtenir son acte de naissance -->
        <x-help-case>

            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Comment obtenir son acte de naissance ?</h2>
            <div class="text-lg text-left mt-4 mb-4">La démarche à suivre pour obtenir ton acte de naissance dépend de ta nationalité.</div>
           
            <!-- Tu es un étranger né à l'étranger -->
            <div class="mb-4">
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu es un(e) étranger(e) né(e) à l'étranger ?</span>

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
                        <div class="text-lg text-left">
                            <p>Si tu es né(e) dans un pays autre que la France, tu peux effectuer ta demande auprès de l'ambassade ou du consulat de ton pays de naissance. En général, cette demande peut s'effectuer en ligne.</p>
                            <p class="mt-4">Il est également possible de se rendre directement au guichet de l'ambassade ou d'envoyer un courrier.</p>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <!-- Tu es un français né à l'étranger -->
            <div class="mb-8">
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu es un(e) français(e) né(e) à l'étranger ?</span>

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
                        <div class="text-lg text-left">
                            <p>Si tu es né(e) en France mais que tu résides à l'étranger, tu dois faire ta demande auprès du Service central d'état civil de Nantes.</p>
                            <p class="mt-4">Deux possibilités s'offrent à toi :</p>
                            <li class="mt-4">Tu peux réaliser la démarche en ligne en complétant le formulaire sur <a href="https://www.diplomatie.gouv.fr/fr/services-aux-francais/etat-civil-et-nationalite-francaise/" target="_blank"><span class="lien">cette page</span></a>.</li>
                            <li class="mt-4">Tu peux faire la demande par courrier à l'adresse postale suivante :</li>
                            
                            <div class="liste-blue mb-4">
                                <p>Service central d'état civil - Ministère Chargé des Affaires étrangères</p>
                                <p>11 rue de la Maison Blanche</p>
                                <p>44941 Nantes cedex 09</p>
                            </div>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <h3 class="text-blue text-left font-extrabold text-2xl mb-4">Combien cela coûte ?</h3>

            <div class="text-lg text-left mb-4">
                <p>L'obtention d'un acte de naissance est totalement <span class="font-bold">gratuite</span>.</p>
            </div>

        </x-help-case>

        <!-- Récupération -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Qui peut récupérer ton acte de naissance ?</h2>
            <div class="text-lg text-left">
                <p class="mt-4">L'obtention d'un acte de naissance - copie intégrale ou extrait avec filiation comprenant les mentions marginales - peut être récupérée par :</p>
                <div class="liste-blue mb-4">
                    <li>Toi-même si tu es majeur et concerné par l'acte de naissance</li>
                    <li>Ton représentant légal</li>
                    <li>Ton époux ou ton partenaire de Pacs</li>
                    <li>Tes parents ou tes grands-parents</li>
                    <li>Tes enfants ou tes petits-enfants</li>
                    <li>Un professionnel autorisé</li>
                </div>
                <p class="mt-4">Si tu demandes des extraits sans identification, tu peux les obtenir sans avoir à montrer de pièce d'identité.</p>
            </div>
        </x-help-case>

        <!-- Délai d'obtention -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Le délai d'obtention</h2>
            <div class="text-lg text-left">
                <p class="mt-4">Il faut compter un délai de 2 à 4 semaines en moyenne pour que tu reçoives le document officiel. Il est uniquement envoyé par voie postale, à l'adresse indiquée lors de la demande.</p>
                <p class="mt-4">Pour tout complément d'information, nous t'invitons à te rendre sur le site diplomatie.gouv.fr ou à poser votre question par mail, à <a href="mailto:courrier.scec@diplomatie.gouv.fr">courrier.scec@diplomatie.gouv.fr</a>.</p>
            </div>
        </x-help-case>

        @endif

        <!-- ACTE DE NAISSANCE -->

        @if($article->slug === 'demande-de-visa-avant-son-arrivee')

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">{{ $article->title }}</h2>
            <div class="text-lg text-left">
                <p class="mt-4">Si tu souhaites étudier en France, il existe différents types de visa, selon ta situation. Il te faudra alors choisir celui qui te conviendrait le mieux.</p>
                <p class="mt-4">Par ailleurs, si tu es un étudiant international originaire d'un des pays de l'Union européenne, de l'Espace économique européen ou de la Suisse, tu n'as pas besoin de visa pour étudier en France. En effet, ces territoires font partie de l'espace Schengen.</p>
            </div>
        </x-help-case>

        <!-- Quelques informations -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Quelques informations importantes</h2>
            <h3 class="text-blue text-left font-extrabold text-2xl mt-4 mb-4">Quel type de visa te faut-il ?</h3>
            <div class="text-lg text-left">
                <li class="mt-4"><span class="font-bold">Un visa de courte durée</span> te permet de passer des épreuves ou des concours en France. Dans ce cas là, il te faut un visa de courte durée. Si tu réussis tes examens, un autre visa de longue durée te sera accordé.</li>
                <li class="mt-4"><span class="font-bold">Un visa de longue durée</span> te permet d'étudier en France d'une période supérieure à 6 mois. Ces visas sont nommés (VLT-TS).<br>Ce type de visa te permettra d'étudier : </li>
                <div class="liste-blue mb-4">
                    <li>3 ans pour une Licence</li>
                    <li>2 ans pour un Master</li>
                    <li>4 ans pour un doctorat (passeport talent-chercheur)</li>
                </div>
            </div>

            <h3 class="text-blue text-left font-extrabold text-2xl mt-8 mb-4">Quand demander ton visa ?</h3>
            <div class="text-lg text-left">
                <p class="mt-4">Il faut que tu fasses la demande de visa moins 6 mois avant.</p>
            </div>

            <h3 class="text-blue text-left font-extrabold text-2xl mt-8 mb-4">En tant qu'étudiant(e), quelles conditions dois-tu valider ?</h3>
            <div class="text-lg text-left">
                <li>Etre âgé(e) d'au moins 18 ans</li>
                <li>Avoir déjà choisi sa formation ou son cursus</li>
                <p class="mt-4">Une liste des établissements est disponible sur Campus France</p>
                <div class="liste-blue mb-4">
                    <li>Pour les <a href="https://cataloguelm.campusfrance.org/licence/#/catalog?lang=fr" target="_blank"><span class="lien">Licences</span></a></li>
                    <li>Pour les <a href="https://cataloguelm.campusfrance.org/master/#/catalog?lang=fr" target="_blank"><span class="lien">Masters</span></a></li>
                </div>
            </div>

            <h3 class="text-blue text-left font-extrabold text-2xl mt-8 mb-4">Tu veux t'informer encore plus ?</h3>
            <div class="text-lg text-left">
                    <p>Pour cela, rends-toi sur cette <a href="https://france-visas.gouv.fr/en/web/france-visas/studies-training" target="_blank"><span class="lien">page</span></a>.</p>
            </div>
        </x-help-case>

        <!-- Documents requis -->
        <x-help-case>

            <!-- Titre -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-2 rounded-lg">Documents requis</h2>

            <!-- Informations -->
            <div class="text-lg text-left mt-4 total-dark-blue">
                <li>Ton passeport</li>
                <li>Tes pièces justificatives sur les informations de ton séjour (modalités de transport et d'hébergement)</li>
                <li>2 photos aux normes OACI</li>
                <p class="mt-4">En ligne :</p>
                <div class="liste-blue mb-4">
                    <li>Tous les documents (format A4) doivent être numérisés en couleur et uniquement en format PDF</li>
                    <li>Chaque document doit respecter une taille maximale de 2 MO et 6 MO pour une rubrique avec 10 documents maximum par rubrique</li>
                    <li>Les documents doivent être explicitement nommés. Par exemple : passeport.pdf</li>
                    <li>La numérisation des documents doit être faite dans de bonnes conditions avec un bon cadrage et un bon éclairage</li>
                </div>

              </div>
          
        </x-help-case>

        <!-- Visa de longue période -->

        <div class="mb-8">
        <x-help-case>

            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-8 rounded-lg">Les différents types de visa</h2>

            <div class="mb-8">
            <!-- Visa de longue période -->
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu souhaites faire une demande de visa de longue période</span>

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
                        <div class="text-lg text-left mb-4">
                            <p class="mt-4">Il existe une manière simple de faire sa demande. Il est possible de numériser ses documents et de suivre la prolongation directement sur le site. Voici les étapes pour un visa de longue durée :</p>
                            <li class="mt-4">Tu dois créer ton compte sur <a href="https://france-visas.gouv.fr" target="_blank"><span class="lien">france-visas.gouv.fr</span></a>.</li>
                            <li>Tu arrives sur une page ou tu peux suivre tes demandes en cours. Si c'est ta première demande, clique sur "Créer une nouvelle demande"</li>
                            <li>Une page s'affiche avec la durée du processus d'enregistrement et les documents dont tu vas avoir besoin. Appuie sur “Accéder” dès que tu es prêt.</li>
                            <li>Une fois toutes les étapes renseignées. Un récapitulatif me sera décerné.</li>
                            <li>Une fois les étapes validées, une icône apparaît pour télécharger ton formulaire Cerfa ainsi qu'une liste des justificatifs à fournir pour valider la demande de visa.</li>
                        </div>

                        <!-- Si tu souhaites numériser tes documents en ligne : -->
                        <div class="text-lg text-left liste-blue mb-4">
                            <p class="font-bold text-blue mt-4">Si tu souhaites numériser tes documents en ligne :</p>
                            <p>Tu dois télécharger un par un les documents demandés en respectant le format.</p>
                            <p>La dernière étape nécessite obligatoirement un rendez-vous au centre de visas.</p>
                            <p>Tu dois apporter le jour de ton rendez-vous :</p>
                            <li>Ton titre de voyage en cours de validité ainsi qu'une copie de la page d'identité et des pages comportant tes visas précédents</li>
                            <li>L'original du formulaire datés et signé et le justificatif de saisie de la demande France-Visas</li>
                            <li>Les justificatifs originaux et copie au format A4</li>
                        </div>

                        <!-- Si tu ne souhaites pas passer par la numérisation des documents en ligne -->
                        <div class="text-lg text-left liste-blue mb-6">
                            <p class="font-bold text-blue mt-4">Si tu ne souhaites pas passer par la numérisation des documents en ligne :</p>
                            <li>Tu dois cliquer sur “Poursuivre” sans avoir télécharger les documents. Un message va apparaître te demandant de confirmer tes choix et de poursuivre malgré le fait que tu n'as rien téléchargé.</li>
                            <li>Prends note que le jour du dépôt de ton dossier, tu devras venir avec les originaux et les photocopies des justificatifs demandés.</li>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <!-- Visa pour un long séjour mention étudiant -->

            <div class="mb-8">
                <!-- Mention étudiant -->
                <x-help-dropdown>
    
                    <x-slot name="trigger"> <!-- Contenu visible -->
                        <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                            <span class="text-dark-blue font-semibold text-xl">Tu souhaites faire une demande de visa pour un long séjour temporaire mention “étudiant”</span>
    
                                <div class="ms-1"> <!-- Flèche -->
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>
    
                    <x-slot name="content"> <!-- Liste déroulante -->
                        <div class="m-8">
    
                            <!-- Permet de -->
                            <div class="text-lg text-left mb-4">
                                <p class="mt-4">Il existe ce qu'on appelle le visa VLS-TS qui comprend un apprentissage entre une période de 4 à 12 mois. Il permet de :</p>
                                <div class="liste-blue mb-4">
                                    <li class="mt-4">Séjourner en France de 4 mois à 12 mois afin d'y suivre des études supérieures</li>
                                    <li>Voyager librement dans tous les pays de l'espace Schengen</li>
                                    <li>Bénéficier de la sécurité sociale après l'inscription dans un établissement d'enseignement supérieur et pendant son séjour afin de se faire rembourser une partie de ses frais de santé</li>
                                    <li>Aucune démarche n'est à accomplir pendant toute la durée de validité de ton visa car le VLS-TS ne se valide pas en préfecture à ton arrivée</li>
                                </div>
                            </div>

                            <!-- Ne permet pas de -->
                            <div class="text-lg text-left mb-4">
                                <p class="mt-4">Le visa VLS-TS ne te permet pas de:</p>
                                <div class="liste-blue mb-4">
                                    <li class="mt-4">Travailler pendant tes études</li>
                                    <li>Bénéficier de VISALE, la caution locative étudiante gratuite</li>
                                    <li>Recevoir une allocation logement de la CAF</li>
                                    <li>Prolonger ton séjour au-delà de la durée de validité du titre de séjour délivré</li>
                                </div>
                                <p class="mt-4">Seul ce visa permet une demande de carte de séjour afin de pouvoir rester en France. Cette demande peut concerner les stagiaires par exemple.</p>
                            </div>

                            <!-- Si tu ne souhaites pas passer par la numérisation des documents en ligne -->
                            <div class="text-lg text-left liste-blue mb-6">
                                <p class="font-bold text-blue mt-4">Si tu ne souhaites pas passer par la numérisation des documents en ligne :</p>
                                <li>Tu dois cliquer sur “Poursuivre” sans avoir télécharger les documents. Un message va apparaître te demandant de confirmer tes choix et de poursuivre malgré le fait que tu n'as rien téléchargé.</li>
                                <li>Prends note que le jour du dépôt de ton dossier, tu devras venir avec les originaux et les photocopies des justificatifs demandés.</li>
                            </div>

                            <!-- Comment faire la demande -->
                            <div class="text-lg text-left mb-6">
                                <p class="font-bold text-blue mt-4">Comment faire la demande ?</p>
                                <p>Clique sur <a href="https://www.service-public.fr/particuliers/vosdroits/R52684" target="_blank"><span class="lien">ce lien</span></a> pour faire la demande d'un visa VLS-TS.</p>
                            </div>

                        </div>
                    </x-slot>
    
                </x-help-dropdown>
            </div>

                <!-- Visa courte durée -->
                <x-help-dropdown>
                    
                    <x-slot name="trigger"> <!-- Contenu visible -->
                        <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                            <span class="text-dark-blue font-semibold text-xl">Tu souhaites faire une demande de visa de courte durée : le Visa Schengen</span>

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
                            <div class="text-lg text-left mb-4">
                                <p class="mt-4">Aussi appelé “le visa Schengen”, ce visa permet de rentrer sur le territoire pour une durée maximale de 90 jours (soit 3 mois).</p>
                                <div class="liste-blue mb-4">
                                    <p class="mt-4">⚠️ En fonction de ta nationalité ou de ta situation tu peux en être dispensé. Rapporte-toi à <a href="https://www.campusfrance.org/fr/le-visa-schengen-court-sejour" target="_blank"><span class="lien">cette page</span></a> pour connaître les modalités.</li>
                                </div>
                            </div>

                            <!-- Permet de -->
                            <div class="text-lg text-left mb-4">
                                <p class="mt-4">Le visa Schengen te permet de:</p>
                                <div class="liste-blue mb-4">
                                    <li class="mt-4">Suivre une courte formation</li>
                                    <li>D'ffectuer un stage</li>
                                    <li>Demander un renouvellement du même visa</li>
                                </div>
                            </div>

                            <!-- Ne permet de -->
                            <div class="text-lg text-left mb-4">
                                <p class="mt-4">En revanche, ce visa ne te permet pas de:</p>
                                <div class="liste-blue mb-4">
                                    <li class="mt-4">Rester dans l'espace Schengen les 90 jours écoulés sans renouvellement</li>
                                    <li>T'installer en France</li>
                                </div>
                            </div>

                            <!-- Comment faire la demande -->
                            <div class="text-lg text-left mb-6">
                                <p class="font-bold text-blue mt-4">Comment faire la demande ?</p>
                                <p>Faire une demande de visa Schengen est possible auprès des consulats ou autorités consulaires des pays de l'espace Schengen.</p>
                            </div>

                        </div>
                    </x-slot>

                </x-help-dropdown>
    
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-8 rounded-lg">Combien cela coûte ?</h2>
            
            <!-- Le coût -->
            <div class="text-lg text-left mb-6">
                <p class="mt-4">Le prix du visa varie selon le pays ou a été faite la demande.</p>
                <p>Des frais supplémentaires peuvent être demandés de la part des prestataires privés.</p>
                <p><a href="https://france-visas.gouv.fr/en/visa-wizard" target="_blank"><span class="lien">Obtiens plus d'informations</span></a>.</p>
            </div>

        </x-help-case>
        </div>

        <!-- Des doutes -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">Des doutes ?</h2>
            <div class="text-lg text-left">
                <p class="mt-4">Si tu n'as pas trouvé le visa qui te correspondrait le mieux, alors reporte-toi à <a href="https://www.campusfrance.org/fr/visas-et-cartes-de-sejour" target="_blank"><span class="lien">cette page</span></a>.</p>
                <p class="mt-4">Si tu as besoin d'aide dans ta démarche, inscris-toi sur notre application pour discuter avec les autres utilisateurs qui t'aideront volontiers ou rends-toi sur <a href="https://france-visas.gouv.fr/en/place-of-submission" target="_blank"><span class="lien">cette page</span></a>.</p>
            </div>
        </x-help-case>

        @endif

        <!-- Renouvellement visa -->


        @if($article->slug === 'demande-de-renouvellement-de-visa')

        <!-- Présentation -->
        <x-help-case>
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-2 rounded-lg">{{ $article->title }} </h2>
            <div class="text-lg text-left mt-4">Quels documents joindre à sa demande de renouvellement ?<br>
                Par quelle plateforme passer ou encore sous quelle condition peut-on obtenir une carte de séjour pluriannuelle ?<br>
                Cette fiche informative est là pour répondre à tes questions.
            </div>
        </x-help-case>

        <!-- Documents requis -->
        <x-help-case>

            <!-- Titre -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-2 rounded-lg">Documents requis</h2>

            <!-- Informations -->
            <div class="text-lg text-left mt-4 total-dark-blue">
                <p>Si ta demande est faite à la préfecture, tu dois amener :</p>
                <li>Un extrait d'acte de naissance avec filiation (ou une copie intégrale d’acte de naissance)</li>
                <li>Une attestation d'inscription pour l'année à venir</li>
                <li>Tes relevés de notes de l'année qui vient de passer</li>
                <li>Un document attestant que tu as les ressources financières nécessaires pour continuer tes études pendant un an en France (soit 615 par mois)</li>
                <li>Un justificatif de domicile de moins de 3 mois (facture d'électricité ou contrat de bail)</li>
                <li>Un justificatif d'Assurance Maladie (c'est une attestation de droits délivrée par la Caisse Primaire d'Assurance Maladie que tu peux télécharger depuis ton espace personnel sur <a href="https://ameli.fr" target="_blank"><span class="lien">ameli.fr</span></a>)</li>
                <li>3 photographies d'identité</li>
            </div>
          
        </x-help-case>

        <!-- Quelques informations -->
        <x-help-case>

            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-8 rounded-lg">Les différents types de visa</h2>
                
            <!-- Visa étudiant -->
            <div class="mb-4">
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu as un visa de type VLS-TS qui arrive à expiration ?</span>

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
                        <div class="text-lg text-left">
                            <p class="mt-4">Si tu souhaites rester en France pour continuer tes études alors que ton visa VLS-TS à expiré, tu as la possibilité de renouveler ton visa.</p>
                            <p class="mt-4">En principe, cette demande est faite après 1 an de séjour. Tu seras donc amené à faire une demande de carte de séjour pluriannuelle.</p>
                            <p class="mt-4">La carte de séjour pluriannuelle étudiant est délivrée pour la durée restant à courir du cycle d'études dans lequel l'étudiant est inscrit. Cette durée pourra donc varier de 1 à 4 ans. La carte de séjour pluriannuelle étudiant-programme de mobilité est d'une durée égale à celle du programme ou de la convention.</p>
                            <p class="mt-4">Contrairement à une carte de séjour temporaire, qui a une durée de validité limitée, la carte de séjour pluriannuelle autorise le titulaire à rester dans le pays pendant une période prolongée, généralement de plusieurs années. Elle peut être renouvelée périodiquement en fonction de certaines conditions.</p>
                            <p class="mt-4">Dans ce cas, la première carte de séjour pluriannuelle qui te sera délivrée sous certaines conditions aura une durée de validité correspondant au nombre d'années restant dans le cycle d'études dans lequel tu es inscrit.</p>
 
                            <h3 class="text-blue text-left font-extrabold text-xl mt-8 mb-4">Combien cela coûte ?</h3>
                            <p>Tu dois payer 225 € (taxe de 200 € + droit de timbre de 25 €) par timbres fiscaux.</p>
                            <p>Tu dois payer 225 € (taxe de 200 € + droit de timbre de 25 €) par timbres fiscaux.</p>

                            <h3 class="text-blue text-left font-extrabold text-xl mt-8 mb-4">Comment faire ta demande ?</h3>
                            <p>Tu dois déposer ta demande à la préfecture ou la sous-préfecture de ton domicile, dans les 2 mois précédant la date d'expiration de ta carte de séjour.</p>
                            <p>Tu peux <a href="https://administration-etrangers-en-france.interieur.gouv.fr/particuliers/#/" target="_blank"><span class="lien">faire ta demande de renouvellement en ligne</span></a>.</p>
                            <p>Tu peux te renseigner sur le site internet de ta préfecture ou <a href="https://www.service-public.fr/particuliers/vosdroits/F35799" target="_blank"><span class="lien">ici</span></a>.</p>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <div class="mb-4">
            <!-- Visa Schengen -->
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu as un visa de courte durée : le Visa Schengen ?</span>

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
                        <div class="text-lg text-left">
                            <p>Il n'est pas possible de faire un renouvellement sauf cas exceptionnel comme le cas de catastrophe naturelle…</p>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>

            <!-- Autres visa -->
            <div class="mb-4">
            <x-help-dropdown>

                <x-slot name="trigger"> <!-- Contenu visible -->
                    <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                        <span class="text-dark-blue font-semibold text-xl">Tu veux renouveller un titre de séjour “scientifique”, “stagiaire” ou visa C “concours” ?</span>

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
                        <div class="text-lg text-left">
                            <p>Tu dois prendre rendez-vous en préfecture pour déposer ta demande.</p>
                        </div>

                    </div>
                </x-slot>

            </x-help-dropdown>
            </div>
            
            <!-- Temps -->
            <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-2 mt-4 rounded-lg">Quand faire ta demande ?</h2>

            <div class="text-lg text-left">           
                <p class="mt-4">Il faut faire la demande 3 mois avant l'expiration de ton titre de séjour.</p>
            </div>

        </x-help-case>

        @endif

    </div>


    <!--<p>
        Contenu : {{ $article->content }}

    <p>
        Langue : {{ $article->lang_id }}
    </p>

    <p>
        URL : {{ $article->slug}}
    </p>-->

</x-home-layout>
</body>

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<form action="{{ route('tester-formulaire') }}" method="POST" id="formulaireChoix">
    @csrf

    <h3>Choisissez une option :</h3>

    <div class="choix-options">
        <input type="radio" id="demanderAide" name="choix" value="demanderAide" required>
        <label for="demanderAide" class="option">
            <div class="option-titre">Demander de l'aide</div>
        </label>

        <input type="radio" id="proposerAide" name="choix" value="proposerAide" required>
        <label for="proposerAide" class="option">
            <div class="option-titre">Proposer son aide</div>
        </label>
    </div>
</br>
</br>
    <div id="sectionDemanderAide" class="section-question">
        <!-- Les questions spécifiques pour "Demander de l'aide" -->
        <label for="raisonAide">Pour quoi as-tu besoin d'aide ?</label>

<div class="choix-categories">
    <input type="radio" id="inscription" name="categorie" value="inscription" required>
    <label for="inscription" class="option">
        <div class="option-titre">Inscriptions administratives</div>
    </label>

    <input type="radio" id="service" name="categorie" value="service" required>
    <label for="service" class="option">
        <div class="option-titre">Service public</div>
    </label>

    <input type="radio" id="both" name="categorie" value="both" required>
    <label for="both" class="option">
        <div class="option-titre">Les deux</div>
    </label>

    <input type="radio" id="idk" name="categorie" value="idk" required>
    <label for="idk" class="option">
        <div class="option-titre">Je ne sais pas</div>
    </label>
</div>    </div>

    <div id="sectionProposerAide" class="section-question">
        <!-- Les questions spécifiques pour "Proposer son aide" -->
        <label for="domaineAide">En quoi peux-tu aider ?</label>

        <div class="choix-categories">
    <input type="radio" id="inscription2" name="categorie2" value="inscription2" required>
    <label for="inscription2" class="option">
        <div class="option-titre">Inscriptions administratives</div>
    </label>

    <input type="radio" id="service2" name="categorie2" value="service2" required>
    <label for="service2" class="option">
        <div class="option-titre">Service public</div>
    </label>

    <input type="radio" id="both2" name="categorie2" value="both2" required>
    <label for="both2" class="option">
        <div class="option-titre">Les deux</div>
    </label>

    <input type="radio" id="idk2" name="categorie2" value="idk2" required>
    <label for="idk2" class="option">
        <div class="option-titre">Je ne sais pas</div>
    </label>
</div>    </div>

    <!-- Bouton de soumission -->
    <button type="submit">Soumettre</button>
</form>

<!-- Ajoutez ceci à la section script de votre vue -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var formulaire = document.getElementById('formulaireChoix');
        var sectionDemanderAide = document.getElementById('sectionDemanderAide');
        var sectionProposerAide = document.getElementById('sectionProposerAide');

        function afficherMasquerSections() {
            var choixUtilisateur = document.querySelector('input[name="choix"]:checked');
            sectionProposerAide.style.display = 'none';
            sectionDemanderAide.style.display = 'none';

            if (choixUtilisateur) {
                if (choixUtilisateur.value === 'demanderAide') {
                    sectionDemanderAide.style.display = 'block';
                    sectionProposerAide.style.display = 'none';
                } else if (choixUtilisateur.value === 'proposerAide') {
                    sectionDemanderAide.style.display = 'none';
                    sectionProposerAide.style.display = 'block';
                }
            }
        }

        formulaire.addEventListener('change', function(event) {
            if (event.target.name === 'choix') {
                afficherMasquerSections();
            }
        });

        // Appel initial pour afficher/masquer les sections en fonction du choix
        afficherMasquerSections();
    });
</script>


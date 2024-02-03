document.addEventListener('DOMContentLoaded', function () {
    const suivantButton = document.getElementById('suivant');

    // Empêcher la redirection au chargement de la page
    suivantButton.addEventListener('click', function (event) {
        // Si le bouton #suivant n'a pas la classe 'hovered', annuler l'événement
        if (!suivantButton.classList.contains('hovered')) {
            event.preventDefault();
        }
    });
});

//Sign-up-1.html

function toggleUtilisation(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option
    if (button.classList.contains('option')) {
        // Désélectionner les autres boutons .option
        document.querySelectorAll('.option').forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('selected');
            }
        });

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');
    }

    // Mettre à jour le style du bouton #suivant
    const auMoinsUneOptionSelectionnee = document.querySelector('.option.selected') !== null;
    suivantButton.classList.toggle('hovered', auMoinsUneOptionSelectionnee);

    // Remplacer le lien du bouton #suivant en fonction de l'option sélectionnée
    const proposeOption = document.getElementById('propose');
    if (proposeOption.classList.contains('selected')) {
        suivantButton.parentNode.href = 'sign-up-2-propose.html';
    } else {
        suivantButton.parentNode.href = 'sign-up-2-demande.html';
    }
}

//Sign-up-2-demande.html + Sign-up-2-propose.html

function toggleListeAide(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option ou une coche
    if (button.classList.contains('option')) {
        var optionIndex = Array.from(button.parentElement.children).indexOf(button);
        var listeId = '';

        // Assigne le bon ID en fonction de l'option sélectionnée
        if (optionIndex === 0) {
            listeId = 'scolarite';
        } else if (optionIndex === 1) {
            listeId = 'services';
        } else if (optionIndex === 2) {
            listeId = 'deux';
        }

        var liste = document.getElementById(listeId);

        // Désélectionne les autres boutons .option
        document.querySelectorAll('.option').forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('selected', 'hovered');
            }
        });

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');

        // Cache toutes les listes
        var toutesLesListes = document.querySelectorAll('.liste');
        toutesLesListes.forEach(function (item) {
            item.style.display = 'none';
        });

        // Réinitialise tous les boutons .coche
        document.querySelectorAll('.coche').forEach(coche => {
            coche.classList.remove('selected', 'clicked');
            const checkbox = coche.querySelector('input[type="checkbox"]');
            checkbox.checked = false;
        });

        // Affiche la liste correspondante
        if (button.classList.contains('selected')) {
            liste.style.display = 'flex';
        }
    }

    // Met à jour les styles du bouton .suivant en fonction de l'état des boutons .coche
    const auMoinsUnCocheSelectionne = document.querySelector('.coche.selected') !== null;
    suivantButton.classList.toggle('hovered', auMoinsUnCocheSelectionne);
}

function toggleCocherAide(button) {
    const checkbox = button.querySelector('input[type="checkbox"]');
    const suivantButton = document.getElementById('suivant');

    // Toggle la classe 'selected' pour le bouton .coche
    button.classList.toggle('selected');

    // Cochez ou décochez la case à cocher
    checkbox.checked = !checkbox.checked;

    // Ajoute ou retire la classe 'clicked' pour le bouton .coche
    button.classList.toggle('clicked', button.classList.contains('selected'));

    // Désactive le style hover après un clic sur le bouton .coche
    button.addEventListener('mouseleave', function () {
        button.classList.remove('hovered');
    });

   // Vérifie si au moins un bouton .coche est sélectionné
    const coches = document.querySelectorAll('.coche');
    const auMoinsUnCoché = Array.from(coches).some(coche => {
    const checkbox = coche.querySelector('input[type="checkbox"]');
    return checkbox.checked;
});

    // Applique le style hover au bouton #suivant si au moins un élément est sélectionné
    suivantButton.classList.toggle('hovered', auMoinsUnCoché);

}

function toggleSaitPas(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option
    if (button.classList.contains('option')) {
        // Désélectionner les autres boutons .option
        document.querySelectorAll('.option').forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('selected');
            }
        });

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');

        // Cache toutes les listes
        var toutesLesListes = document.querySelectorAll('.liste');
        toutesLesListes.forEach(function (item) {
            item.style.display = 'none';
        });

        // Réinitialise tous les boutons .coche
        document.querySelectorAll('.coche').forEach(coche => {
            coche.classList.remove('selected', 'clicked');
            const checkbox = coche.querySelector('input[type="checkbox"]');
            checkbox.checked = false;
        });
    }

    // Mettre à jour le style du bouton #suivant
    const auMoinsUneOptionSelectionnee = document.querySelector('.option.selected') !== null;
    suivantButton.classList.toggle('hovered', auMoinsUneOptionSelectionnee);
}

//Sign-up-3.html

function toggleListeLangue(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option ou une coche
    if (button.classList.contains('langue')) {
        var optionIndex = Array.from(button.parentElement.children).indexOf(button);
        var listeId = '';

        // Assigne le bon ID en fonction de l'option sélectionnée
        if (optionIndex === 0) {
            listeId = 'langue';
        }

        var liste = document.getElementById(listeId);

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');

        // Cache toutes les listes
        var toutesLesListes = document.querySelectorAll('.liste');
        toutesLesListes.forEach(function (item) {
            item.style.display = 'none';
        });

        // Affiche la liste correspondante
        if (button.classList.contains('selected')) {
            liste.style.display = 'flex';
        }
    }
}

function toggleCocherLangue(button) {
    const checkbox = button.querySelector('input[type="checkbox"]');

    // Toggle la classe 'selected' pour le bouton .coche
    button.classList.toggle('selected');

    // Cochez ou décochez la case à cocher
    checkbox.checked = !checkbox.checked;

    // Ajoute ou retire la classe 'clicked' pour le bouton .coche
    button.classList.toggle('clicked', button.classList.contains('selected'));

    // Désactive le style hover après un clic sur le bouton .coche
    button.addEventListener('mouseleave', function () {
        button.classList.remove('hovered');
    });

    updateSuivantButtonStyle(); // Appel de la fonction pour mettre à jour le style
}

function toggleNiveauLangue(button) {
    // Vérifier si le bouton est une option
    if (button.classList.contains('option')) {
        // Désélectionner les autres boutons .option
        document.querySelectorAll('.option').forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('selected');
            }
        });

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');
    }

    updateSuivantButtonStyle(); // Appel de la fonction pour mettre à jour le style
}

function updateSuivantButtonStyle() {
    const suivantButton = document.getElementById('suivant');

    const auMoinsUneOptionSelectionnee = document.querySelector('.option.selected') !== null;
    const auMoinsUneCocherSelectionne = document.querySelector('.coche.selected') !== null;

    // Mettez à jour le style uniquement si chaque catégorie a au moins un élément sélectionné
    const conditionHovered = auMoinsUneOptionSelectionnee && auMoinsUneCocherSelectionne;
    suivantButton.classList.toggle('hovered', conditionHovered);
}

function updateLienRetour() {
    // Récupérer le type de la page depuis les paramètres de la requête
    const urlParams = new URLSearchParams(window.location.search);
    const pageType = urlParams.get('type');

    // Modifier le lien de retour en fonction du type de page
    const lienRetour = document.getElementById('lien-retour');
    if (pageType === 'propose') {
        lienRetour.href = 'sign-up-2-propose.html';
    } else {
        lienRetour.href = 'sign-up-2-demande.html';
    }
}

// Appeler la fonction une fois que le DOM est chargé
document.addEventListener('DOMContentLoaded', function () {
    updateLienRetour();
});


//Sign-up-4.html

function toggleListeCampus(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option ou une coche
    if (button.classList.contains('campus')) {
        var optionIndex = Array.from(button.parentElement.children).indexOf(button);
        var listeId = '';

        // Assigne le bon ID en fonction de l'option sélectionnée
        if (optionIndex === 0) {
            listeId = 'campus';
        }

        var liste = document.getElementById(listeId);

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');

        // Cache toutes les listes
        var toutesLesListes = document.querySelectorAll('.liste');
        toutesLesListes.forEach(function (item) {
            item.style.display = 'none';
        });

        // Affiche la liste correspondante
        if (button.classList.contains('selected')) {
            liste.style.display = 'flex';
        }
    }
}

function toggleCampus(button) {
    const suivantButton = document.getElementById('suivant');

    // Vérifier si le bouton est une option
    if (button.classList.contains('option')) {
        // Désélectionner les autres boutons .option
        document.querySelectorAll('.option').forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('selected');
            }
        });

        // Toggle la classe 'selected' pour le bouton .option
        button.classList.toggle('selected');
    }

    // Mettre à jour le style du bouton #suivant
    const auMoinsUneOptionSelectionnee = document.querySelector('.option.selected') !== null;
    suivantButton.classList.toggle('hovered', auMoinsUneOptionSelectionnee);
}

//Sign-up-5.html

function openPopup() {
  document.getElementById('rgpdPopup').style.display = 'block';
}

function closePopup() {
  document.getElementById('rgpdPopup').style.display = 'none';
}

// Fermer le popup si l'utilisateur clique en dehors de celui-ci
window.onclick = function (event) {
  var popup = document.getElementById('rgpdPopup');
  if (event.target == popup) {
    popup.style.display = 'none';
  }
}

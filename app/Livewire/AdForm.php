<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;

class AdForm extends Component
{
    public $option;
    public $helps;

    protected function rules()
    {
        return [
            'option' => 'required',
            'helps' => 'required|array',
        ];
    }

    public function store()
    {
        $this->validate(); // Valider les données du formulaire

        // Sauvegarder dans la base de données
        $post = new Post();
        $post->option = $this->option;

        // Concaténer les identifiants des articles sélectionnés avec des virgules
        $post->helps = implode(',', $this->helps);

        $post->save();

        // Réinitialiser les propriétés après la sauvegarde
        $this->option = null;
        $this->helps = null;

        // Rediriger ou afficher un message de succès ici
    }

    public function render()
    {
        return view('livewire.mon-composant');
    }
}

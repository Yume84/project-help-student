<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    // Nom de la table associée au modèle
    protected $table = 'colleges';

    // Colonnes mass assignable
    protected $fillable = ['name', 'city', 'code_postal'];

    // Si votre clé primaire n'est pas 'id', spécifiez-la ici
    // protected $primaryKey = 'votre_colonne_de_clé_primaire';

    // Si vos colonnes 'created_at' et 'updated_at' ne sont pas utilisées, définissez ceci sur false
    public $timestamps = true;

    // Autres relations ou méthodes nécessaires

}

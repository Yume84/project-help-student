<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;

    public function user(): HasMany /*A vérifier*/
    {
        return $this->hasMany(User::class);
    }
}

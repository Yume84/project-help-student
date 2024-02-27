<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function language(){
        return $this->belongsTo(Language::class, 'lang_id', 'id');
    }

    public function user(): HasMany /*A vérifier*/
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\LocalizedScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LocalizedScope());
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function language(){
        return $this->belongsTo(Language::class, 'lang_id', 'id');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}

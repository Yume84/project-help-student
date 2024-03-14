<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

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

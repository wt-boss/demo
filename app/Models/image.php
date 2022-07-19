<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function artiste(){
        return $this->hasOne(Artiste::class);
    }
    public function imageArtiste(){
        return $this->hasOneThrough(Artiste::class , image::class);
    }
}

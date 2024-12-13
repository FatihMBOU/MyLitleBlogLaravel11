<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Relatie met Blog
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    // (Optioneel) Relatie met Comment, als gebruikers reacties kunnen plaatsen
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

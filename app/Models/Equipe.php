<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public function participant()
    {
        return $this->hasMany(Participant::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }
    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
    public function projet()
    {
        return $this->hasOne(Projet::class);
    }
}

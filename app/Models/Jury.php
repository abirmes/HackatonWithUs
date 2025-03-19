<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jury extends Model
{
    use HasFactory;

    public function projet()
    {
        return $this->belongsToMany(Projet::class);
    }

    public function memberJury()
    {
        return $this->hasMany(MemberJury::class);
    }
}

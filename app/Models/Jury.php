<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jury extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialite'
    ];

    public function feedbacks()
    {
        return $this->belongsToMany(Feedback::class);
    }

    public function memberJury()
    {
        return $this->hasMany(MemberJury::class);
    }
}

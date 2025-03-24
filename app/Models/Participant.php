<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends User
{
    use HasFactory;
    protected $fillable = [
        'equipe_id',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

}

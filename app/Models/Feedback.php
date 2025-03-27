<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'note',
        'comment'
    ];
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function juries()
    {
        return $this->belongsToMany(Jury::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'equipe_id',
    ];
    public function equipe()
    {
        return $this->belongsTo(Projet::class);
    }
    public function jury()
    {
        return $this->hasOne(Jury::class);
    }
}

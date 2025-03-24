<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = [
        'lien',
        'date',
        'regles',
    ];
    use HasFactory;
    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }
    public function organisateurs()
    {
        return $this->hasMany(Organisateur::class);
    }
    public function statistique()
    {
        return $this->hasOne(Statistic::class);
    }
    public function themes()
    {
        return $this->belongsToMany(Theme::class,"edition-theme");
    }
}

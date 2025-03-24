<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = [
        'theme',
        'lien',
        'date',
        'regles',
    ];
    use HasFactory;
    public function equipe()
    {
        return $this->hasMany(Equipe::class);
    }
    public function organisateur()
    {
        return $this->hasMany(Organisateur::class);
    }
    public function statistique()
    {
        return $this->hasOne(Statistic::class);
    }
    public function theme()
    {
        return $this->hasMany(Theme::class);
    }
}

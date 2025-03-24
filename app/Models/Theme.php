<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'categorie',
        'techs-requises'
    ];

    public function edition()
    {
        return $this->belongsToMany(Edition::class,"edition-theme");
    }
}

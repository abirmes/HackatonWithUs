<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_inscrits',
        'taux_sumi',
        'edition_id',
    ];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}

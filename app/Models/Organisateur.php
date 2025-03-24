<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisateur extends User
{
    use HasFactory;
    protected $fillable = [
        'edition_id',
    ];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}

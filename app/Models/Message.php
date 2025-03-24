<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'equipe_id',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'participant_id',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}

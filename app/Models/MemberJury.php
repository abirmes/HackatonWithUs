<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberJury extends User
{
    use HasFactory;

    protected $fillable = [
        'jury_id',
    ];

    public function jury()
    {
        return $this->belongsTo(Jury::class);
    }
}

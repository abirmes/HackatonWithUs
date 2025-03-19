<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberJury extends Model
{
    use HasFactory;

    public function jury()
    {
        return $this->belongsTo(Jury::class);
    }
}

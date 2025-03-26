<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends User
{
    use HasFactory;
    protected $fillable = [];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

    public function mapper(Participant $participant , User $user)
    {
        $participant->id = $user->id;
        $participant->name = $user->name;
        $participant->email = $user->email;
        $participant->password = $user->password;
        $role = Role::find($user->role->id);
        $participant->role()->associate($role);
    }

}

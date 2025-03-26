<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Models\Equipe;

class ParticipantController extends Controller
{    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreParticipantRequest $request) {}

    
    public function show(Participant $participant) {}

    
    public function edit(Participant $participant) {}

    
    public function update(UpdateParticipantRequest $request, Participant $participant) {}

    
    public function destroy(Participant $participant) {}


    public function enterEquipe(Participant $participant ,int $equipe_id) 
    {
        $equipe = Equipe::find($equipe_id);
        $participant->equipe()->associate($equipe); 
        $participant->save();
    }

}

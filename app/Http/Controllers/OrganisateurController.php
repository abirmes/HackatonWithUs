<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use App\Http\Requests\StoreOrganisateurRequest;
use App\Http\Requests\UpdateOrganisateurRequest;

class OrganisateurController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreOrganisateurRequest $request) {}

    
    public function show(Organisateur $organisateur) {}

    
    public function edit(Organisateur $organisateur) {}

    
    public function update(UpdateOrganisateurRequest $request, Organisateur $organisateur) {}

    
    public function destroy(Organisateur $organisateur) {}
    
}

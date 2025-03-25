<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;

class ProjetController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreProjetRequest $request) {}

    
    public function show(Projet $projet) {}

    
    public function edit(Projet $projet) {}

    
    public function update(UpdateProjetRequest $request, Projet $projet) {}

    
    public function destroy(Projet $projet) {}
}

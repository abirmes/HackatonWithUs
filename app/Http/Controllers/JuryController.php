<?php

namespace App\Http\Controllers;

use App\Models\Jury;
use App\Http\Requests\StoreJuryRequest;
use App\Http\Requests\UpdateJuryRequest;

class JuryController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreJuryRequest $request) {}

    
    public function show(Jury $jury) {}

    
    public function edit(Jury $jury) {}

    
    public function update(UpdateJuryRequest $request, Jury $jury) {}

    
    public function destroy(Jury $jury) {}
}

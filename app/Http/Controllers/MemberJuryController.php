<?php

namespace App\Http\Controllers;

use App\Models\MemberJury;
use App\Http\Requests\StoreMemberJuryRequest;
use App\Http\Requests\UpdateMemberJuryRequest;

class MemberJuryController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreMemberJuryRequest $request) {}

    
    public function show(MemberJury $memberJury) {}

    
    public function edit(MemberJury $memberJury) {}

    
    public function update(UpdateMemberJuryRequest $request, MemberJury $memberJury) {}

    
    public function destroy(MemberJury $memberJury) {}
}

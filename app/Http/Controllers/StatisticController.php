<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;

class StatisticController extends Controller
{
    
    public function index() {}


    public function create() {}

    
    public function store(StoreStatisticRequest $request) {}

    
    public function show(Statistic $statistic) {}

    
    public function edit(Statistic $statistic) {}

   
    public function update(UpdateStatisticRequest $request, Statistic $statistic) {}

    
    public function destroy(Statistic $statistic) {}
}

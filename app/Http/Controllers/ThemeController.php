<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    
    public function index()
    {
        $themes = DB::table('themes')->get();
        return response()->json($themes);
    }

    
    public function create(){}

    
    public function store(Request $request)
    {
        try {
            DB::table('themes')->insert([
                'name' => $request->name,
                'description' => $request->description,
                'categorie' => $request->categorie,
                'techs-requises' => $request->techs_requises
            ]);
            return response()->json([
                'message'=>'created successfully'
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
        

    }

    
    public function show(Theme $theme) {}

    
    public function edit(Theme $theme) {}

    
    public function update(UpdateThemeRequest $request, Theme $theme) {}

    
    public function destroy(Theme $theme) {}
}

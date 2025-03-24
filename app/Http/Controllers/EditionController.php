<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Http\Requests\StoreEditionRequest;
use App\Http\Requests\UpdateEditionRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editions = DB::table('editions')->get();
        return response()->json($editions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        try {
            DB::table('editions')->insert([
                'theme' => $request->theme,
                'lien' => $request->lien,
                'date' => $request->date,
                'regles'=> $request->regles
            ]);
    
            return response()->json([
                "message"=> "created succefully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message"=> "erreur"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(DB::table('editions')->where('id' , $id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edition = DB::table('editions')->where('id' , $id)->get();
        return response()->json($edition);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::table('editions')->where('id' , $request->id)->update([
                'theme' => $request->theme,
                'lien' => $request->lien,
                'date' => $request->date,
                'regles'=> $request->regles
            ]);
            
            return response()->json([
                "message"=> "updated successfully"
            ]);

        } catch (Exception $e) {
            return response()->json([
                "message"=> "erreur"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::table('editions')->where('id' , $id)->delete();

            
            return response()->json([
                "message"=> "deleted successfully"
            ]);

        } catch (Exception $e) {
            return response()->json([
                "message"=> "erreur"
            ]);
        }
    }
}

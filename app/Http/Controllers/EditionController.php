<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use App\Http\Requests\StoreEditionRequest;
use App\Http\Requests\UpdateEditionRequest;
use App\Models\Theme;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditionController extends Controller
{
    

    public function index()
    {
        $editions = Edition::with('themes')->get();
        return response()->json($editions);
    }


    public function create() {}

    public function store(Request $request)
    {

        try {
            DB::table('editions')->insert([
                'lien' => $request->lien,
                'date' => $request->date,
                'regles' => $request->regles
            ]);
            return response()->json([
                "message" => "created succefully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => "erreur"
            ]);
        }
    }

    

    public function show($id)
    {
        return response()->json(DB::table('editions')->where('id', $id)->get());
    }

    

    public function edit($id)
    {
        $edition = DB::table('editions')->where('id', $id)->get();
        return response()->json($edition);
    }

    
    

    public function update(Request $request)
    {
        try {
            DB::table('editions')->where('id', $request->id)->update([
                'lien' => $request->lien,
                'date' => $request->date,
                'regles' => $request->regles
            ]);

            return response()->json([
                "message" => "updated successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => "erreur"
            ]);
        }
    }

    

    public function destroy($id)
    {
        try {
            DB::table('editions')->where('id', $id)->delete();


            return response()->json([
                "message" => "deleted successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => "erreur"
            ]);
        }
    }



    public function addThemeToEdition(Request $request)
    {
        try {
            $edition_id = $request->edition_id;
            $theme_id = $request->theme_id;
            $EDIT = Edition::find($edition_id);
            $EDIT->themes()->attach($theme_id);
            return response()->json([
                "message" => "added to editions successfully"
            ]); ;
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }



    public function getEditionThemes(Request $request)
    {
        $edition = Edition::find($request->edition_id);
        $themes = $edition->themes()->get();
        return $themes;
    }
}

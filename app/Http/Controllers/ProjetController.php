<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProjetController extends Controller
{

    public function index() {
        $projects = DB::table('projects')->get();
        return $projects;
    }


    public function create() {}


    public function store(Request $request)
    {
        try {
            $projet = new Projet();
            $projet->name = $request->name;
            $projet->description = $request->description;
            $projet->github = $request->github;
            $id = JWTAuth::parseToken()->authenticate()->id;
            $participant = Participant::find($id);
            $equipe = $participant->equipe;
            $projet->equipe()->associate($equipe);
            $projet->save();
            return [
                "message" => "project submitted successfully"
            ];
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function show(Projet $projet) {}


    public function edit(Projet $projet) {}


    public function update(UpdateProjetRequest $request, Projet $projet) {}


    public function destroy(Projet $projet) {}
}

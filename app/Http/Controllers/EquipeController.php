<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Http\Requests\StoreEquipeRequest;
use App\Http\Requests\UpdateEquipeRequest;
use App\Models\Edition;
use App\Models\Participant;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class EquipeController extends Controller
{

    public function index()
    {
        $equipes = Equipe::with('participants')->get();
        return response()->json($equipes);
    }


    public function create() {}


    public function store(Request $request)
    {
        try {
            $edition = Edition::find($request->edition_id);
            $equipe = new Equipe();
            $equipe->name = $request->name;
            $equipe->status = 'pending';
            $equipe->edition()->associate($edition);
            $equipe->save();
            $user = User::find(JWTAuth::parseToken()->authenticate()->id);
            // return $user->role->name;
            //bnadm 

            if ($user->role->name === "participant") {
                $participant = new Participant();

                $participant->mapper($participant, $user);

                $participant->equipe()->associate($equipe);
                $participant->save();
            }
            return $equipe;
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }

    public function show(Equipe $equipe) {}


    public function joinEquipe() {}
}

<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use App\Http\Requests\StoreOrganisateurRequest;
use App\Http\Requests\UpdateOrganisateurRequest;
use App\Models\Equipe;
use App\Models\Message;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Tymon\JWTAuth\Facades\JWTAuth;

class OrganisateurController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreOrganisateurRequest $request) {}

    
    public function show(Organisateur $organisateur) {}

    
    public function edit(Organisateur $organisateur) {}

    
    public function update(UpdateOrganisateurRequest $request, Organisateur $organisateur) {}

    
    public function destroy(Organisateur $organisateur) {}

    public function changeUsersRoles(Request $request)
    {
        $email = $request->email;
        $newRoleName = $request->newRoleName;
        if(JWTAuth::parseToken()->authenticate()->role->name != 'organisateur'){
            return [
                "message" => "not allowed"
            ];
        }
        if($newRoleName != 'admin' && $newRoleName != 'jury' && $newRoleName != 'participant' )
        {
            return [
                "message" => "non valid role"
            ];
        }
        
        $user = User::where('email' , $email)->first();
        $role = Role::where('name' , $newRoleName)->first();
        $user->role()->associate($role);
        $user->save();
        return [
            "message" => "role changed successfully"
        ];
    }

    public function validateTeams(Request $request)
    {
        if(JWTAuth::parseToken()->authenticate()->role->name != 'organisateur'){
            return [
                "message" => "not allowed"
            ];
        }
        $teamName = $request->teamName;
        $newStatus = $request->newStatus;

        if($newStatus != 'confirmee' && $newStatus != 'rejetee'){
            return [
                "message" => "non valid status"
            ];
        }
        
        $equipe = Equipe::where('name' , $teamName)->first();
        $equipe->status = $newStatus;
        $equipe->save();
        return $equipe;


    }
}

<?php

use App\Http\Controllers\EditionController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ThemeController;
use App\Http\Middleware\JwtMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
});

Route::get('/edition', [EditionController::class, 'index']);
Route::post('/edition/store' , [EditionController::class , 'store'])->middleware([ 'is-organisateur']);
Route::get('/edition/show/{id}', [EditionController::class, 'show'])->middleware([ 'is-organisateur']);
Route::get('/edition/edit/{id}' , [EditionController::class , 'edit'])->middleware([ 'is-organisateur']);
Route::post('/edition/update' , [EditionController::class , 'update'])->middleware([ 'is-organisateur']);
Route::post('/edition/destroy/{id}' , [EditionController::class , 'destroy'])->middleware([ 'is-organisateur']);
Route::post('/addThemeToEdition' , [EditionController::class , 'addThemeToEdition'])->middleware([ 'is-organisateur']);
Route::post('/getEditionThemes' , [EditionController::class , 'getEditionThemes'])->middleware([ 'is-organisateur']);




Route::get('/theme', [ThemeController::class, 'index']);
Route::post('/theme/store', [ThemeController::class, 'store']);




Route::post('/equipe/store' , [EquipeController::class , 'store'])->middleware(['is-participant']);
Route::get('/equipe' , [EquipeController::class , 'index'] );



Route::post('/enterEquipe' , [ParticipantController::class , 'enterEquipe'] )->middleware(['is-participant']);


Route::post('/user/role/change' , [OrganisateurController::class , 'changeUsersRoles'])->middleware([ 'is-organisateur']);
Route::post('/equipe/status/change' , [OrganisateurController::class , 'validateTeams'])->middleware([ 'is-organisateur']);



Route::post('/projet/store' , [ProjetController::class , 'store'])->middleware(['is-participant']);



Route::post('/feedback/store' , [FeedbackController::class , 'store'])->middleware('is-jury');








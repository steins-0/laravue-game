<?php

use App\Http\Controllers\Admin\Abilities\AbilityController;
use App\Http\Controllers\Admin\Abilities\AttributeController;
use App\Http\Controllers\Admin\Abilities\PerkController;
use App\Http\Controllers\Admin\Items\ItemController;
use App\Http\Controllers\Admin\Units\RaceController;
use App\Http\Controllers\Admin\Units\SoldierClassController;
use App\Http\Controllers\Admin\Units\SoldierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'classes' => SoldierClassController::class,
    'races' => RaceController::class,
    'soldiers' => SoldierController::class,
    'items' => ItemController::class,
    'abilities' => AbilityController::class,
    'attributes' => AttributeController::class,
    'perks' => PerkController::class,
]);

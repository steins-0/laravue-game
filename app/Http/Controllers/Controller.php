<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private array $types = [
        // Soldier abilities
        'MOVEMENT',
        'DEXTERITY',
        'HEALTH',
        'MANA',
        'STAMINA',
        'WILLPOWER',

        // Resistance
        'DAMAGE_RESISTANCE',
        'FIRE_RESISTANCE',
        'COLD_RESISTANCE',
        'POISON_RESISTANCE',
        'ELECTRICITY_RESISTANCE',

        // Damage
        'DAMAGE',
        'ARMOR_PENETRATION',
        'FIRE_DAMAGE',
        'COLD_DAMAGE',
        'POISON_DAMAGE',
        'ELECTRICITY_DAMAGE'
    ];
}

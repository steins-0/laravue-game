<?php

namespace App\Services;

use App\Models\Units\Soldier\Soldier;

class SoldierService
{
    /**
     * Add or update the soldier
     * @param $request
     * @param null $id
     * @return mixed
     */
    public static function save($request, $id = null)
    {
        return Soldier::updateOrCreate($id, $request);
    }
}

<?php

namespace App\Services;

use App\Models\Units\Soldier\SoldierClass;

class SoldierClassService
{
    /**
     * Create or update the class of the soldier
     * @param $request
     * @param null $id
     * @return mixed
     */
    public static function save($request, $id = null)
    {
        return SoldierClass::updateOrCreate(
            ['id' => $id],
            $request
        );
    }

    /**
     * Delete the soldier class by id
     * @param $id
     * @return int
     */
    public static function delete($id)
    {
        return SoldierClass::destroy($id);
    }
}

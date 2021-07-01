<?php

namespace App\Services;

use App\Models\Abilities\Ability;
use Illuminate\Support\Facades\Log;

class AbilityService
{
    /**
     * Add or update the ability
     * @param $request
     * @param null $id
     * @return mixed
     */
    public static function save($request, $id = null)
    {
        try {
            return Ability::updateOrCreate(
                ['id' => $id],
                $request
            );
        } catch (\Exception $e) {
            Log::info('An error has occurred in AbilityService: ' . $e->getMessage());
        }
    }

    /**
     * Delete the ability by id
     * @param $id
     * @return int
     */
    public static function delete($id)
    {
        return Ability::destroy($id);
    }
}

<?php

namespace App\Services;

use App\Models\Units\Soldier\Soldier;
use Illuminate\Support\Facades\Log;

class SoldierService
{
    /**
     * Add or update the soldier
     * @param $request
     * @param null $id
     * @return mixed
     */
    public static function save( $request, $id = null)
    {
        // Verify if the request have an image and validate it
        $img = $request->file('image');
        if ($img->isValid()) {
            /**
             * TODO
             * Make Queue Job
             */
        }

        try {
            return Soldier::updateOrCreate(
                ['id' => $id],
                $request
            );
        } catch (\Exception $e) {
            Log::info("SoldierService: " . $e->getMessage());
        }
    }

    public static function delete($id)
    {
        return Soldier::destroy($id);
    }
}

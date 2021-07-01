<?php

namespace App\Services;

use App\Models\Abilities\Attribute;
use Illuminate\Support\Facades\Log;

class AttributeService
{
    /**
     * Create or update the attribute
     * @param $request
     * @param null $id
     * @return mixed
     */
    public static function save($request, $id = null)
    {
        try {
            return Attribute::updateOrCreate([
                ['id' => $id],
                $request
            ]);
        } catch (\Exception $e) {
            Log::info("An error has occurred in Attribute Service: " . $e->getMessage());
        }
    }

    /**
     * Delete the attribute by id
     * @param $id
     * @return int
     */
    public static function delete($id)
    {
        return Attribute::destroy($id);
    }
}

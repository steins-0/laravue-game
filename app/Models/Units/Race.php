<?php

namespace App\Models\Units;

use App\Models\Units\Soldier\Soldier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    /**
     * Get a list of soldiers that belongs to this race
     */
    public function soldiers()
    {
        return $this->hasMany(Soldier::class);
    }
}

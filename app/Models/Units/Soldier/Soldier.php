<?php

namespace App\Models\Units\Soldier;

use App\Models\Units\Race;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Soldier extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships

    /**
     * Get the soldier's race
     * @return BelongsTo
     */
    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    /**
     * Get the soldier equipment
     * @return HasOne
     */
    public function equipment()
    {
        return $this->hasOne(SoldierEquipment::class);
    }

    /**
     * Get the soldier attributes
     * @return HasOne
     */
    public function attributes()
    {
        return $this->hasOne(SoldierAttributes::class);
    }

    // !Relationships



    // Repository

    /**
     * Get the last soldiers, default is 10
     * @param int $paginate
     * @return mixed
     */
    public static function getLastSoldiers($paginate = 10)
    {
        return self::orderBy('id', 'DESC')
            ->paginate($paginate);
    }

    /**
     * Get a list of random soldiers (default is 10)
     * based on their levels
     * @param int $paginate
     * @param int $fromLevel
     * @param int $toLevel
     * @return mixed
     */
    public static function getRandomSoldiers($paginate = 10, $fromLevel = 1, $toLevel = 100)
    {
        return self::orderBy('id', 'DESC')
            ->inRandomOrder()
            ->whereBetween('level', [$fromLevel, $toLevel])
            ->limit($paginate)
            ->get();
    }

    // !Repository
}

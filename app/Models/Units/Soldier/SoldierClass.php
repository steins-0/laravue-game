<?php

namespace App\Models\Units\Soldier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SoldierClass extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = [];

    // Relationships

    /**
     * Get the soldiers that belong to this class
     * @return HasMany
     */
    public function soldiers()
    {
        return $this->hasMany(Soldier::class);
    }



    // Repository

    /**
     * Get the last 10 classes
     * @param int $paginate
     * @return mixed
     */
    public static function getLastClasses($paginate = 10)
    {
        return self::orderBy('id', 'DESC')
            ->paginate($paginate);
    }

    // !Repository
}

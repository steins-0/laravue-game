<?php

namespace App\Models\Abilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Attribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships

    /**
     * Get the ability properties
     * @return HasMany
     */
    public function abilityProperties()
    {
        return $this->hasMany(AbilityProperty::class);
    }

    /**
     * Get a list of abilities of the attributes
     * @return HasManyThrough
     */
    public function abilities()
    {
        return $this->hasManyThrough(Ability::class, AbilityProperty::class);
    }

    // !Relationships



    // Repository

    /**
     * Get a default number of attributes
     * @param int $paginate
     * @return mixed
     */
    public static function getAttributesList($paginate = 30)
    {
        return self::orderBy('name', 'ASC')
            ->paginate($paginate);
    }

    // !Repository
}

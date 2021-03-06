<?php

namespace App\Models\Abilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ability extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships

    /**
     * Get a list of level trees that have this ability
     * @return BelongsToMany
     */
    public function levelTrees()
    {
        return $this->belongsToMany(LevelTree::class, 'level_tree_abilities');
    }

    /**
     * Get the ability properties
     * @return HasMany
     */
    public function properties()
    {
        return $this->hasMany(AbilityProperty::class);
    }

    // !Relationships



    // Repository

    /**
     * Get a list of abilities
     * @param int $paginate
     * @return mixed
     */
    public static function getAbilities($paginate = 30)
    {
        return self::orderBy('name', 'ASC')
            ->paginate($paginate);
    }

    // !Repository
}

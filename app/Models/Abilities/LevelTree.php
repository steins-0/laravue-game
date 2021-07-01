<?php

namespace App\Models\Abilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LevelTree extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships

    /**
     * Get the a list of abilities that belong to the level tree
     * @return BelongsToMany
     */
    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'level_tree_abilities');
    }

    // !Relationships
}

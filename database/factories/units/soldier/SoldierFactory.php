<?php

namespace Database\Factories\Units\Soldier;

use App\Models\Units\Race;
use App\Models\Units\Soldier\Soldier;
use App\Models\Units\Soldier\SoldierClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Soldier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'race_id' => Race::all()->random()->id,
            'class_id' => SoldierClass::all()->random()->id,
            'name' => $this->faker->name(),
            'level' => 1,
            'experience' => 0
        ];
    }
}

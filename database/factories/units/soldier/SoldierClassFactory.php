<?php

namespace Database\Factories\Units\Soldier;

use App\Models\Units\Soldier\SoldierClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldierClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoldierClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}

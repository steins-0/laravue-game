<?php

namespace Tests\Feature\Controllers;

use App\Models\Units\Race;
use App\Models\Units\Soldier\SoldierClass;
use App\Models\User;
use Tests\TestCase;

class SoldierControllerTest extends TestCase
{
//    use RefreshDatabase;

    public function test_get_soldiers()
    {
        $response = $this->get('/api/soldiers');
        $response->assertStatus(200);
    }

    /**
     * Create a new soldier
     */
    public function test_create_soldier()
    {
        $user = User::all()->random();

        $response = $this
            ->post('/api/soldiers', [
            'name' => 'Alexa Spring',
            'class_id' => SoldierClass::all()->random()->id,
            'race_id' => Race::all()->random()->id,
            'level' => 1,
            'experience' => 0,
        ]);

        $response->assertStatus(200);
    }

    private function createRaceAndClass()
    {
        $class = SoldierClass::factory()->create();
        $race = Race::factory()->create();

        return [
            'class' => $class,
            'race' => $race
        ];
    }

    private function createFakeUser()
    {
        return new User([
            'id' => 1,
            'name' => 'Alexa'
        ]);
    }
}

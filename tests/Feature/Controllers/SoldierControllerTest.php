<?php

namespace Tests\Feature\Controllers;

use App\Models\Units\Race;
use App\Models\Units\Soldier\SoldierClass;
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
        $response = $this
            ->post('/api/soldiers', [
                'name' => 'Alexa Spring',
                'class_id' => SoldierClass::all()->random()->id,
                'race_id' => Race::all()->random()->id,
                'level' => 1,
                'experience' => 0,
            ]);

        $response->assertCreated();
    }
}

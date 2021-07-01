<?php

namespace Tests\Feature\Controllers;

use App\Models\Abilities\Ability;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class AbilityControllerTest extends TestCase
{
    /**
     * Test if the abilities are getting
     */
    public function test_get_abilities()
    {
        $response = $this->get('/api/abilities');
        $response->assertOk();
    }

    /**
     * Test if the ability is creating
     */
    public function test_create_ability()
    {
        $response = $this->saveAbility();
        $response->assertCreated();
    }

    /**
     * Test if the ability is updating
     */
    public function test_update_ability()
    {
        $id = Ability::all()->random()->id;
        $response = $this->saveAbility($id);
        $response->assertOk();
    }

    /**
     * Test creating and updating the ability
     * @param null $id
     * @return mixed
     */
    private function saveAbility($id = null)
    {
        $url = '/api/abilities';
        $method = 'post';

        if (!is_null($id) && is_integer($id)) {
            $url .= '/' . $id;
            $method = 'put';
        }

        return $this->{$method}($url, [
            'name' => Str::random(10),
            'description' => Str::random(500)
        ]);
    }
}

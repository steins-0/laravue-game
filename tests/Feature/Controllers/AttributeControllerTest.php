<?php

namespace Tests\Feature\Controllers;

use App\Models\Abilities\Attribute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class AttributeControllerTest extends TestCase
{
    /**
     * Index page of the attributes
     */
    public function test_get_attributes()
    {
        $response = $this->get('/api/attributes');
        $response->assertOk();
    }

    public function test_create_attribute()
    {
        $response = $this->saveAttribute();
        $response->assertCreated();
    }

    public function test_update_attribute()
    {
        $id = Attribute::all()->random()->id;
        $response = $this->saveAttribute($id);
        $response->assertOk();
    }

    /**
     * Create or update the attribute
     * @param null $id
     * @return mixed
     */
    private function saveAttribute($id = null)
    {
        $url = '/api/attributes';
        $method = 'post';

        if (!is_null($id) && is_integer($id)) {
            $url .= '/' . $id;
            $method = 'put';
        }

        return $this->{$method}($url, [
            'name' => Str::random(10),
        ]);
    }
}

<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SoldierClassControllerTest extends TestCase
{
    /**
     * Testing the index page
     */
    public function test_soldier_classes()
    {
        $response = $this->get('/api/classes');
        $response->assertStatus(200);
    }

    /**
     * Test the creation of a new soldier class
     */
    public function test_create_soldier_class()
    {
        $response = $this->postClass();
        $response->assertStatus(201);
    }

    /**
     * Test if the name of the soldier class already exists
     * in the database
     */
    public function test_soldier_class_already_exists()
    {
        $response = $this->postClass();
        $response->assertStatus(302);
    }

    private function postClass()
    {
        return $this->post('/api/classes', [
            'name' => 'Elf'
        ]);
    }
}

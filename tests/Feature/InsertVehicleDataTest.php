<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InsertVehicleDataTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $vehicles = factory(\App\Vehicle::class)->create();
    }
    
    /**
    * Set up the environment
    */
    public function setUp()
    {
         parent::setUp();
         $this->createApplication();
         $this->artisan('migrate:refresh');
    }
}

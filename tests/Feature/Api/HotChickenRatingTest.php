<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HotChickenRatingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeRoute()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

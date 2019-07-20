<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\Conference;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferenceTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateConference()
    {
        $data = factory(Conference::class)->make()->toArray();
        Conference::create($data);
        $this->assertDatabaseHas('conferences', $data);
    }
}

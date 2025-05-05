<?php
// filepath: tests/Feature/AcademyTest.php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Academy;

class AcademyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_academy_factory()
    {
        // Create 10 academy records using the factory
        Academy::factory(10)->create();

        // Assert that 10 records were created
        $this->assertCount(10, Academy::all());
    }
}

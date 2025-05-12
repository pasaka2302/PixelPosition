<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_job_belong_to__employer()
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_a_job_can_have_tags()
    {
        $job = Job::factory()->create();
        $job->tag('Frontend');
        $this->assertCount(1, $job->tags);
    }
}

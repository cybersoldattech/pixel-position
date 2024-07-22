<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Employer;
use App\Models\job_jobs;
use Database\Factories\JobJobsFactory;

// class JobTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
// }


it("Belong to an employer", function () {
    $employer = Employer::factory()->create();
    $job = job_jobs::factory()->create(['employer_id' => $employer->id,
    ]);
    $this->assertTrue($job->employer()->is($employer));
});


it("Belong to an ployer", function () {
    $employer = Employer::factory()->create();
    $job = job_jobs::factory()->create(['employer_id' => $employer->id,
    ]);
    $this->assertTrue($job->employer()->is($employer));
});

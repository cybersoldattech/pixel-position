<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\job_jobs;


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

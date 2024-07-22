<?php

use App\Models\Employer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Employer::class);
            $table->string('salary');
            $table->string('location');
            $table->string('schedule')->default("Full Time");
            $table->string('url');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_jobs');
    }
};

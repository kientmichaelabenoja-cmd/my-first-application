<?php

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
    Schema::create('job_listings', function (Blueprint $table) {
        $table->id(); // Auto-incrementing primary key [cite: 36]
        $table->foreignId('employer_id'); // Creates the column linking a job to an employer [cite: 37, 41]
        $table->string('title'); // [cite: 38]
        $table->string('salary'); // [cite: 39]
        $table->timestamps(); // Created at and Updated at columns [cite: 40]
    });
}   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};

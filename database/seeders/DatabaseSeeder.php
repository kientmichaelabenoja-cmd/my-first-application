<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create a set of 5 distinct tags
        $tags = Tag::factory(5)->create();

        // 2. Create 50 jobs (and their employers, as defined in JobFactory)
        Job::factory(50)->create()->each(function (Job $job) use ($tags) {
            // 3. For each job, attach 2 random tags using the 'tags' relationship
            $job->tags()->attach($tags->random(2));
        });
    }
}
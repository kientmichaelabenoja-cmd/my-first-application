<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Lead Software Architect',
                'salary' => '$120,000',
            ],
            [
                'id' => 2,
                'title' => 'Senior Frontend Developer',
                'salary' => '$90,000',
            ],
            [
                'id' => 3,
                'title' => 'Cosmic Data Scientist',
                'salary' => '$150,000',
            ],
        ];
    }

    public static function find($id)
    {
        // Search the array returned by all() and find the first job where the ID matches
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        // If no job is found, abort the request and show the 404 page
        if (! $job) {
            abort(404);
        }

        return $job;
    }
}

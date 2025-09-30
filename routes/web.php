<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // Import the new Job Model

Route::get('/', function () {
    return view('home');
});

// All Jobs - Now uses the Model
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Single Job - Now uses the Model
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});
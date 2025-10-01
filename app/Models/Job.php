<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // CRITICAL: Tells Eloquent to use the 'job_listings' table instead of the default 'jobs'
    protected $table = 'job_listings'; 
    
    use HasFactory; 
    
    // GOOD ADDITION: Protects against mass assignment vulnerabilities (needed for later chapters)
    protected $fillable = ['title', 'salary', 'employer_id']; 

    // GOOD ADDITION: Defines the relationship to the Employer Model (needed for later chapters)
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
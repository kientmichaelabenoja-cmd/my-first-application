<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    // Defines the many-to-many relationship
    public function jobs()
{
    // Tells Eloquent the related key on the pivot table is job_listing_id
    return $this->belongsToMany(\App\Models\Job::class, 'job_listing_tag', relatedPivotKey: "job_listing_id"); 
}
}

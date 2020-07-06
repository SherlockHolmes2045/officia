<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobViews extends Model
{

    protected $table = "jobs_views";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'user_id','job_id'
    ];
}

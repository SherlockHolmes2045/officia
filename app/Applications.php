<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $table = "jobs_candidature";

    protected $fillable = [
      "job_id","user_id"
    ];
}

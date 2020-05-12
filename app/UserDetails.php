<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'users_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','picture','title','location','experience','gender','job_type','about','special_skills','birthdate',
        'special_skills','birthdate','personnal_site','cover_letter','cv','contact',
        'facebook','twitter','github','linkedin','dribble','instagram'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

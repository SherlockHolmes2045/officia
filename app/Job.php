<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'description', 'status','duration','renumeration','cahier_charge','location',
        'type','gender','experience','skills','report','candidate_id','deadline','apply_online'
    ];


}

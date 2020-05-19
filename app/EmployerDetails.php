<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployerDetails extends Model
{
    protected $table = 'employer_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','picture','title','location','about', 'website','contact','size',
        'facebook','twitter','github','linkedin'
    ];


}

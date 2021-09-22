<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //

    protected $table='appliers';
    protected $fillable =['reference_job','title','name','age','degree','email' ,'phone','address','skills','cv' ];
    public function jobs ()
    {
        return $this->belongsTo(Job::class);
    }

}

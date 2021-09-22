<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{

    protected $table = 'Customres';

    protected $fillable = ['name','description','image','created_at','updated_at' ];



    public function scopeSelection($query)
    {
        return $query->select(['id' ,'name','description','image']);
    }


}

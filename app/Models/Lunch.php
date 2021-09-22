<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lunch extends Model
{

    protected $table = 'lanuches';

    protected $fillable = ['name','description','price','image','created_at','updated_at' ];



    public function scopeSelection($query)
    {
        return $query->select(['id' ,'name','description','price','image']);
    }


}

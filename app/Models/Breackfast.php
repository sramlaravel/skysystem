<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Breackfast extends Model
{

    protected $table = 'brackfast';

    protected $fillable = ['name','description','price','image','created_at','updated_at' ];



    public function scopeSelection($query)
    {
        return $query->select(['id','category_id','name','description','price','image']);
    }


}

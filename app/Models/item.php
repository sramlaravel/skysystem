<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class item extends Model
{

    protected $table = 'items';

    protected $fillable = ['id','name_ar','name_en','image','created_at','updated_at' ];



    public function scopeSelection($query)
    {
        return $query-> select('id','name_ar','name_en');
    }

    public function Apps(){
        return $this->hasMany('App\Models\Apps','item_id');

    }


}

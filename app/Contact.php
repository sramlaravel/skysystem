<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table="contacts";
    public $fillable = ['name', 'email', 'phone', 'message'];

    public function scopeSelection($query)
    {
        return $query->select(['id','name', 'email', 'phone', 'message']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class branches extends Model
{

//
//    protected $table='locations';
//    protected $fillable =['location_name_ar','desc_ar','phone','location_type','lat','lng' ,'email'];
//
////    protected $hidden = ['category_id', 'password'];
//
//
////    public function scopeActive($query)
////    {
////
////        return $query->where('active', 1);
////    }
//
//    public function getLogoAttribute($val)
//    {
//        return ($val !== null) ? asset('assets/' . $val) : "";
//
//    }
//
//
//    public function scopeSelection($query)
//    {
//        return $query->select('id','location_name_ar','desc_ar','phone','location_type','lat','lng' ,'email' );
//    }
//
//
////    public function category()
////    {
////
////        return $this->belongsTo('App\Models\MainCategory', 'category_id', 'id');
////    }
//
////    public function getActive()
////    {
////        return $this->active == 1 ? 'مفعل' : 'غير مفعل';
////
////    }
//
////
////    public function setPasswordAttribute($password)
////    {
////        if (!empty($password)) {
////            $this->attributes['password'] = bcrypt($password);
////        }
////    }
}

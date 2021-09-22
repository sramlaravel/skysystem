<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table='sliders';

    protected $fillable=['id','title_ar','title_en','description_ar','description_en','image','statu','created_at','updated_at'];




    protected static function boot()
    {
        parent::boot();

    }
    public function scopeActive($query){
        return $query -> where('statu',1);
    }

    public function  scopeSelection($query){

        return $query -> Select( 'title_ar','title_en','description_ar','description_en','image','statu');
    }


    public function getActive(){
        return   $this ->statu == 1 ? 'مفعل'  : 'غير مفعل';
    }


//
//    protected $table='abouts';
//
//    protected $fillable=['id','title','description','image','created_at','updated_at'];
//
//
//    protected static function boot()
//    {
//        parent::boot();
//
//    }
//    public function scopeActive($query){
//        return $query -> where('statu',1);
//    }
//
//    public function  scopeSelection($query){
//
//        return $query -> select('title','description','image');
//    }
//
//
//    public function getActive(){
//        return   $this ->statu == 1 ? 'مفعل'  : 'غير مفعل';
//    }

}

<?php

namespace App\Models;
use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table='services';
    protected $fillable=['id','title_ar','title_en','description_ar','description_en','image','model','created_at','updated_at'];


    protected static function boot()
    {
        parent::boot();

    }
    public function scopeActive($query){
        return $query -> where('statu',1);
    }

    public function  scopeSelection($query){

        return $query -> select('title_ar','title_en','description_ar','description_en','image','model');
    }


    public function getActive(){
        return   $this ->statu == 1 ? 'مفعل'  : 'غير مفعل';
    }



}

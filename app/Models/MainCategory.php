<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
class MainCategory extends Model
{

    protected $table='services';
    protected $fillable=['title','title_desc','model','description','image','statu', 'created_at', 'updated_at'];
    protected static function boot()
    {
        parent::boot();

    }

    public function scopeActive($query)
    {
        return $query->where('statu', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('title','title_desc','model','description','image','statu');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function getActive()
    {
        return $this->statu == 1 ? 'مفعل' : 'غير مفعل';

    }

//    public function scopeDefaultCategory($query){
//        return  $query -> where('statu',0);
//    }

//
//      // get all translation categories
//    public function categories()
//    {
//        return $this->hasMany(self::class, 'translation_of');
//    }
//
//
//    public  function subCategories(){
//        return $this -> hasMany(SubCategory::class,'category_id','id');
//    }
//
//
//
//    public function vendors(){
//
//        return $this -> hasMany('App\Models\Vendor','category_id','id');
//    }

}

<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
class Apps extends Model
{

    protected $table='Apps';
    protected $fillable=['id','title_ar','title_en','description_ar','description_en','image','image1','item_id','price','created_at','updated_at'];



    public function scopeSelection($query)
    {

        return $query->select('id','title_ar','title_en','description_ar','description_en','image','image1','item_id' );
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

    public function category(){
        return $this->hasOne('App\Models\item','id','item_id');

    }
//
//
//    public function vendors(){category_id
//
//        return $this -> hasMany('App\Models\Vendor','category_id','id');
//    }

}

<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class blogController extends Controller
{
    public function about()
    {
        $news=Comenews ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','news_img','information','updated_at','created_at' )->orderBy('id','DESC')->paginate(4);

  $newss=Comenews ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','news_img','information','updated_at','created_at' )->orderBy('id','DESC')->take(3)->get();




        return view('front.blog',compact('news','newss'));
    }
    function detail($news_id){
        $newss=Comenews ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','news_img','information','updated_at','created_at' )->orderBy('id','DESC')->take(3)->get();


        $newsDetail=Comenews ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','news_img','information','updated_at','created_at')-> where('id', '=', $news_id)->get();



        return view('front.Blog-details',compact('newsDetail','newss'));

    }
}

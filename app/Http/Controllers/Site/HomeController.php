<?php

namespace App\Http\Controllers\Site;


use App\Models\about;
use App\Models\Abouts;
use App\Models\Apps;
use App\Models\Breackfast;
use App\Models\Category;
use App\Models\Comenews;
use App\Models\Courses;
use App\Models\Customer;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Language;
use App\Models\Lunch;
use App\Models\Opnoin;
use App\Models\Services;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
//        $data = [];
//         $data['sliders'] = Slider::get(['photo']);
//         $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
//            $q->select('id', 'parent_id', 'slug');
//            $q->with(['childrens' => function ($qq) {
//                $qq->select('id', 'parent_id', 'slug');
//            }]);
//        }])->get();
//        $about=Language::select()->get();
        $sliders=Language::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','created_at')->get();


        $abouts=Abouts::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','created_at')->get();
        $Services=Services::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','model','created_at')->get();

        $items=item::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name' )->get();


        $Apps=Apps ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','item_id' )-> where('item_id', '=', '5')->get();


        $its=Apps ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','item_id' )-> where('item_id', '=', '7')->get();


        // $Courses=Courses::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','created_at')->get();
//        $Dinner=Dinner::select()->get();
//        $Lunch=Lunch::select()->get();
//        $Customer=Customer::select()->get();
//        $items=item::select()->get();
//        $opinon=Opnoin::select()->get();
//        $opinon=Opnoin::select()->get();

        $news=Comenews ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','news_img','information','updated_at','created_at' )->orderBy('id','DESC')->take(3)->get();


        return view('front.home',compact('sliders','abouts','Services','items','Apps','its','news' ));
    }
}


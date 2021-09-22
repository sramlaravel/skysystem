<?php

namespace App\Http\Controllers\Site;

use App\Models\Breackfast;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Lunch;
use App\Models\Product;
use App\Models\Services;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServicesController extends Controller
{
    public function Services()
    {
//        $data = [];
//        $data['category'] = Category::where('slug', $slug)->first();
//
//        if ($data['category'])
////            $data['products'] = $data['category']->products;
//        $breackfast=Breackfast::select()->get();
//        $Dinner=Dinner::select()->get();
//        $Lunch=Lunch::select()->get();
//        return view('front.project',compact('breackfast','Dinner','Lunch'));

        $Services=Services::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','model','created_at')->get();

        return view('front.Services', compact('Services'));
    }
    public function projectdetails($project_id)
    {
        $Service=Services::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','model','created_at')->where(['id'=>$project_id])->get();
      //  $Servic=Services::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','model','created_at') ->get();
//        $news = Services ::orderBy ('id', 'desc')->take(3)->get();
//        $projects=DB::table('items')->where(['id'=>$project_id])->get();
//        $catogry=DB::table('categories')->where(['id'=>$projects[0]->category_id])->get();

        return view('front.services_detials',compact('Service'));

    }

}

<?php

namespace App\Http\Controllers\Site;

use App\Models\Apps;
use App\Models\Breackfast;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Lunch;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProjectController extends Controller
{
    public function project()
    {

        $Apps=Apps ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','item_id' )->orderBy('id','DESC')->paginate(6);


       return view('front.project',compact('Apps'));
    }
    public function projectdetails($project_id)
    {


        $projects=Apps ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','image1','created_at' )->where(['id'=>$project_id])->get();

        return view('front.project_detials',compact('projects'));

    }

}

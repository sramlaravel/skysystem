<?php

namespace App\Http\Controllers\Site;

use App\Models\Abouts;

use App\Http\Controllers\Controller;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
class aboutController extends Controller
{
    public function about()
    {
        $abouts=Abouts::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','description_'.LaravelLocalization::getCurrentLocale().' as  description','image','created_at')->get();

       return view('front.about',compact('abouts' ));
    }

}

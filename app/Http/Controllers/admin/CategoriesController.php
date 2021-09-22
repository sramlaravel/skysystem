<?php

namespace App\Http\Controllers\Admin;

use App\Apply;
use App\Http\Controllers\Controller;


use App\Http\Requests\MainCategoryRequest;

use App\Models\item;
use App\Models\MainCategories;
use GuzzleHttp\Psr7\Request;


use Illuminate\Support\Facades\Response ;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{


    public function index()
    {

        $categories = item::select()->get();

        return view('admin.maincategories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.maincategories.create');
    }


    public function store(\Illuminate\Http\Request $request)
    {
        $filePath = "";
        try {
            if ($request->has('image')) {
                $filePath =uploadImage('items', $request->image);
            }

            item::create([
                'name_ar' => $request->get('name_ar'),
                'name_en' => $request->get('name_en'),

                'image' => $filePath,

            ]);

            return redirect()->route('admin.maincategories')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    /**
     * @param $mainCat_id
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($mainCat_id)
    {


        //get specific categories and its translations
        $mainCategory = item::find($mainCat_id);

        if (!$mainCategory)
            return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.maincategories.edit', compact('mainCategory'));
    }


    public function update(  $id,\Illuminate\Http\Request $request)
    {


   try{

            $main_category =item::find($id);

            if (!$main_category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

            // update date


       if ($request->has('image')) {
           $filePath =uploadImage('abouts', $request->image);
           item::where('id', $id)
               ->update([
                   'image' => $filePath,
               ]);

       }


       $data = $request->except('_token', 'id','image');

       item::where('id', $id) ->update( $data  );

       DB::commit();





            // save image



            return redirect()->route('admin.maincategories')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $maincategory = item::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

            $vendors = $maincategory->Apps();
            if (isset($vendors) && $vendors->count() > 0) {
                return redirect()->route('admin.maincategories')->with(['error' => 'لأ يمكن حذف هذا القسم  ']);
            }

//            $image = Str::after($maincategory->photo, 'assets/');
//            $image = base_path('assets/' . $image);
//            unlink($image); //delete from folder

            $maincategory->delete();
            return redirect()->route('admin.maincategories')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $maincategory = item::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

            $status =  $maincategory -> active  == 0 ? 1 : 0;

            $maincategory -> update(['active' =>$status ]);

            return redirect()->route('admin.maincategories')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


}

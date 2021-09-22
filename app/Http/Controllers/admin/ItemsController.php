<?php

namespace App\Http\Controllers\Admin;

use App\Apply;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchesRequest;
use App\Models\Apps;
use App\Models\branches;
use App\Models\item;
use App\Models\MainCategories;
use App\Models\MainCategory;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ItemsController extends Controller
{

    public function index()
    {
        $items=Apps::all();
        return view('admin.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = item::all();
        return view('admin.items.create',compact('categories'));
    }

//    public function index()
//    {
//        $locations = branches::selection()->paginate(PAGINATION_COUNT);
//
//        return view('admin.branches.index', compact('locations'));
//    }
//
//    public function create()
//    {
//
//        return view('admin.branches.create');
//    }

    public function store(Request $request)
    {
        try {


//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('image')) {
                $filePath = uploadImage('Apps', $request->image);
            }

            $filePath = "";
            if ($request->has('image1')) {
                $filePath = uploadImage('Apps', $request->image1);
            }

            $item= new Apps();
            $item->item_id=$request->item_id;
            $item->title_ar=$request->title_ar;
            $item->title_en=$request->title_en;
            $item->description_ar=$request->description_ar;
            $item->description_en=$request->description_en;
            $item->price=$request->price;
            $item->image=$filePath;
            $item->image1=$filePath;
            $item->save();





            return redirect()->route('admin.items')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.items')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($id)
    {
        try {
            $categories = item::all();
            $mainCategory = Apps::select()->find($id);
            if (!$mainCategory){   return redirect()->route('admin.items')->with(['error' => 'هذا الموقع غير موجود او ربما يكون محذوفا ']);}


            return view('admin.items.edit', compact('mainCategory','categories'));

        } catch (\Exception $exception) {
            return redirect()->route('admin.items')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id,Request $request)
    {

        try {


            $locations = Apps::select()->find($id);
            if (!$locations)
                return redirect()->route('admin.items')->with(['error' => 'هذا  الصنف غير موجود او ربما يكون محذوفا ']);


            DB::beginTransaction();

            //photo
            if ($request->has('image') ) {
                $filePath = uploadImage('Apps', $request->image);
                Apps::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);
            }


            if ($request->has('image1') ) {
                $filePath = uploadImage('Apps', $request->image1);
                Apps::where('id', $id)
                    ->update([
                        'image1' => $filePath,
                    ]);
            }
//

//
//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id','image','image1');


//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            Apps::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.items')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.items')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $locations = Apps::find($id);
            if (!$locations) {
                return redirect()->route('admin.items', $id)->with(['error' =>'هذه  الفرع  غير موجوده']);
            }
            $locations->delete();

            return redirect()->route('admin.items')->with(['success' => 'تم حذف الفرع  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.items')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

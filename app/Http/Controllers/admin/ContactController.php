<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchesRequest;
use App\Models\branches;
use App\Models\Breackfast;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Lunches;
use App\Models\MainCategories;
use App\Models\MainCategory;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ContactController  extends Controller
{

    public function index()
    {
        $contact = Contact::selection()->paginate(PAGINATION_COUNT);

        return view('admin.dashboard', compact('contact'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.Breackfast.create',compact('categories'));
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
                $filePath = uploadImage('Breackfast', $request->image);
            }

            $item= new Breackfast();
            $item->name=$request->name;
            $item->description=$request->description;
            $item->price=$request->price;
            $item->image=$filePath;
            $item->save();





            return redirect()->route('admin.Breackfast')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.Breackfast')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($id)
    {
        try {
            $categories = MainCategories::all();
            $mainCategory = Breackfast::select()->find($id);
            if (!$mainCategory){   return redirect()->route('admin.Breackfast')->with(['error' => 'هذا الموقع غير موجود او ربما يكون محذوفا ']);}


            return view('admin.Breackfast.edit', compact('mainCategory','categories'));

        } catch (\Exception $exception) {
            return redirect()->route('admin.Breackfast')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id,Request $request)
    {

        try {


            $locations = Dinner::select()->find($id);
            if (!$locations)
                return redirect()->route('admin.Breackfast')->with(['error' => 'هذا  الصنف غير موجود او ربما يكون محذوفا ']);


            DB::beginTransaction();

            //photo
            if ($request->has('image') ) {
                 $filePath = uploadImage('Breackfast', $request->image);
                Breackfast::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);
            }
//
//
//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id','image');


//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            Breackfast::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.Breackfast')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.Breackfast')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $locations = Breackfast::find($id);
            if (!$locations) {
                return redirect()->route('admin.Breackfast', $id)->with(['error' =>'هذه  الفرع  غير موجوده']);
            }
            $locations->delete();

            return redirect()->route('admin.Breackfast')->with(['success' => 'تم حذف الفرع  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.Breackfast')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

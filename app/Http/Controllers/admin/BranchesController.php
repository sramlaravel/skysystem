<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchesRequest;
use App\Models\branches;
use App\Models\MainCategory;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use DB;

class BranchesController extends Controller
{


    public function index()
    {
        $locations = branches::selection()->paginate(PAGINATION_COUNT);

        return view('admin.branches.index', compact('locations'));
    }

    public function create()
    {

        return view('admin.branches.create');
    }

    public function store(BranchesRequest $request)
    {
        try {

//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

//            $filePath = "";
//            if ($request->has('icon')) {
//                $filePath = uploadImage('vendors', $request->logo);
//            }

           branches::create([
                'location_name_ar' => $request->location_name_ar,
                'desc_ar' => $request->desc_ar,
                'phone' => $request->phone,
                'location_type' => $request->location_type,
                'email' => $request->email,
                'lat' => $request->lat,
                'lng' => $request->lng,

            ]);



            return redirect()->route('admin.branches')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($id)
    {
        try {

            $locations = branches::select()->find($id);
            if (!$locations){   return redirect()->route('admin.branches')->with(['error' => 'هذا الموقع غير موجود او ربما يكون محذوفا ']);}


            return view('admin.branches.edit', compact('locations'));

        } catch (\Exception $exception) {
            return redirect()->route('admin.branches')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id, BranchesRequest $request)
    {

        try {

            $locations = branches::select()->find($id);
            if (!$locations)
                return redirect()->route('admin.branches')->with(['error' => 'هذا  الفرع غير موجود او ربما يكون محذوفا ']);


            DB::beginTransaction();

            //photo
//            if ($request->has('logo') ) {
//                 $filePath = uploadImage('vendors', $request->logo);
//                branches::where('id', $id)
//                    ->update([
//                        'logo' => $filePath,
//                    ]);
//            }
//
//
//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id');


//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            branches::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.branches')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.branches')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $locations = branches::find($id);
            if (!$locations) {
                return redirect()->route('admin.branches', $id)->with(['error' =>'هذه  الفرع  غير موجوده']);
            }
            $locations->delete();

            return redirect()->route('admin.branches')->with(['success' => 'تم حذف الفرع  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.branches')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

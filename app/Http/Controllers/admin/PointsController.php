<?php

namespace App\Http\Controllers\Admin;

use App\country;
use App\Http\Controllers\Controller;
use App\Http\Requests\PointRequest;
 ;
use App\Models\points;




use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PointsController extends Controller
{


//    public function index()
//    {
//        $Points = points::selection()->paginate(PAGINATION_COUNT);
//
//        return view('admin.ServicePoint.index', compact('Points'));
//    }
//
//    public function create()
//    {
//        $countries =DB::table('countries')->pluck("name_ar","id" );
//
//
//        return view('admin.ServicePoint.create', compact('Points','countries','cities'));
//    }
//
//
//    public function getStates($id)
//    {
//
//        $cities = DB::table("cities")->where('country_id', '=', $id)->pluck("city_name","id");
//       dd($cities);
//        return  json_encode($cities);
//
////
////        if ($request->ajax()) {
////
////            $cities = DB::table("cities")->where('country_id', '=', $id)->pluck("city_name", "id");
////
////            return response()->json([$cities]);
////
////
////        }
//
//    }
//
//    public function store(PointRequest $request)
//    {
//
//        try {
//
////            if (!$request->has('active'))
////                $request->request->add(['active' => 0]);
////            else
////                $request->request->add(['active' => 1]);
//
////            $filePath = "";
////            if ($request->has('icon')) {
////                $filePath = uploadImage('vendors', $request->logo);
////            }
//
//            points::create([
//                'name_point' => $request->get('name_point'),
//                'poin_id' =>  random_int(2,1000),
//                'branch_name' =>str::random(6),
//                'desc_ar' => $request->get('desc_ar'),
//                'phone' => $request->get('phone'),
//                'fax' => $request->get('fax'),
//                'city_id' => $request->get('city_id'),
//
//
//
//            ]);
//
//
//
//            return redirect()->route('admin.ServicePoint')->with(['success' => 'تم الحفظ بنجاح']);
//
//        } catch (\Exception $ex) {
// return $ex;
//            return redirect()->route('admin.ServicePoint')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//
//        }
//    }
//
//    public function edit($id)
//    {
//        try {
//
//            $Points = points::select()->find($id);
//            if (!$Points){   return redirect()->route('admin.ServicePoint')->with(['error' => 'هذا الموقع غير موجود او ربما يكون محذوفا ']);}
//            $countries =DB::table('countries')->pluck("name_ar","id" );
//            $cities =DB::table('cities')->pluck("city_name","id" );
//            return view('admin.ServicePoint.edit', compact('Points','countries','cities'));
//
//        } catch (\Exception $exception) {
//            return redirect()->route('admin.ServicePoint')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//        }
//    }
//
//    public function update($id, PointRequest $request)
//    {
//
//        try {
//
//            $Points = points::select()->find($id);
//            if (!$Points)
//                return redirect()->route('admin.ServicePoint')->with(['error' => 'هذا  الفرع غير موجود او ربما يكون محذوفا ']);
//
//
//       DB::beginTransaction();
//
//            //photo
////            if ($request->has('logo') ) {
////                 $filePath = uploadImage('vendors', $request->logo);
////                branches::where('id', $id)
////                    ->update([
////                        'logo' => $filePath,
////                    ]);
////            }
////
////
////            if (!$request->has('active'))
////                $request->request->add(['active' => 0]);
////            else
////                $request->request->add(['active' => 1]);
//
//             $data = $request->except('_token', 'id','country_id' );
//
////            if ($request->has('password') && !is_null($request->  password)) {
////
////                $data['password'] = $request->password;
////            }
//
//            points::where('id', $id)
//                ->update(
//                    $data
//                );
//
//            DB::commit();
//            return redirect()->route('admin.ServicePoint')->with(['success' => 'تم التحديث بنجاح']);
//        } catch (\Exception $exception) {
//            return $exception;
//            DB::rollback();
//            return redirect()->route('admin.ServicePoint')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//        }
//
//    }
//    public function destroy($id)
//    {
//
//        try {
//            $Points = points::find($id);
//            if (!$Points) {
//                return redirect()->route('admin.ServicePoint', $id)->with(['error' =>'هذه  الفرع  غير موجوده']);
//            }
//            $Points->delete();
//
//            return redirect()->route('admin.ServicePoint')->with(['success' => 'تم حذف الفرع  بنجاح']);
//
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.ServicePoint')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
//        }
//    }
//    public function changeStatus()
//    {
//
//    }
//

}

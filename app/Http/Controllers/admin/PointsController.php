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
//            return redirect()->route('admin.ServicePoint')->with(['success' => '???? ?????????? ??????????']);
//
//        } catch (\Exception $ex) {
// return $ex;
//            return redirect()->route('admin.ServicePoint')->with(['error' => '?????? ?????? ???? ?????????? ???????????????? ??????????']);
//
//        }
//    }
//
//    public function edit($id)
//    {
//        try {
//
//            $Points = points::select()->find($id);
//            if (!$Points){   return redirect()->route('admin.ServicePoint')->with(['error' => '?????? ???????????? ?????? ?????????? ???? ???????? ???????? ???????????? ']);}
//            $countries =DB::table('countries')->pluck("name_ar","id" );
//            $cities =DB::table('cities')->pluck("city_name","id" );
//            return view('admin.ServicePoint.edit', compact('Points','countries','cities'));
//
//        } catch (\Exception $exception) {
//            return redirect()->route('admin.ServicePoint')->with(['error' => '?????? ?????? ???? ?????????? ???????????????? ??????????']);
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
//                return redirect()->route('admin.ServicePoint')->with(['error' => '??????  ?????????? ?????? ?????????? ???? ???????? ???????? ???????????? ']);
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
//            return redirect()->route('admin.ServicePoint')->with(['success' => '???? ?????????????? ??????????']);
//        } catch (\Exception $exception) {
//            return $exception;
//            DB::rollback();
//            return redirect()->route('admin.ServicePoint')->with(['error' => '?????? ?????? ???? ?????????? ???????????????? ??????????']);
//        }
//
//    }
//    public function destroy($id)
//    {
//
//        try {
//            $Points = points::find($id);
//            if (!$Points) {
//                return redirect()->route('admin.ServicePoint', $id)->with(['error' =>'??????  ??????????  ?????? ????????????']);
//            }
//            $Points->delete();
//
//            return redirect()->route('admin.ServicePoint')->with(['success' => '???? ?????? ??????????  ??????????']);
//
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.ServicePoint')->with(['error' => '???????? ?????? ???? ???????? ???????????????? ???????? ??????']);
//        }
//    }
//    public function changeStatus()
//    {
//
//    }
//

}

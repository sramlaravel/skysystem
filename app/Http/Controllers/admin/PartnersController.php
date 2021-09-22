<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnersRequest;

use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;


class PartnersController extends Controller
{
    public function index()
    {
        $Partners = Partners::select()->paginate(PAGINATION_COUNT);

        return view('admin.mainparnters.index', compact('Partners'));
    }

    public function create()
    {
        return view('admin.mainparnters.create');
    }

    public function store (PartnersRequest $request)
    {

        try {


//            if (!$request->has('statu'))
//                $request->request->add(['statu' => 0]);
//            else
//                $request->request->add(['statu' => 1]);

            $filePath = "";
            $filePath1="";

            if ($request->has('logo')) {
                $filePath1 =uploadImage1 ('partners','logos', $request->logo);
            }
            if ($request->has('image')) {
                $filePath =uploadImage1 ('partners','image', $request->image);
            }



            Partners::create([
                    'title' => $request->get('title'),

                    'model' => $request->get('model'),

                   'description' => $request->get('description'),
                    'logo' =>$filePath1,

                    'image' => $filePath,

                ]);


               return redirect()->route('admin.mainparnters')->with(['success' => 'تم حفظ الوكيل  بنجاح']);


              } catch (\Exception $ex) {

        return redirect()->route('admin.mainparnters')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }


//        try {
//
//            Language::create($request->except(['_token']));
//            return redirect()->route('admin.languages')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
//        }
    }

    public function edit($id)
    {
        $Partners = Partners::select()->find($id);
        if (!$Partners) {
            return redirect()->route('admin.mainparnters')->with(['error' => 'هذه الوكيل غير موجوده']);
        }

        return view('admin.mainparnters.edit', compact('Partners'));
    }

    public function update($id, PartnersRequest $request)
    {

        try {
            $Partners = Partners::find($id);
            if (!$Partners) {
                return redirect()->route('admin.mainparnters.edit', $id)->with(['error' => 'هذه الخدمه غير موجوده']);
            }


//            if (!$request->has('logo'))
//                $request->request->add(['statu' => 1]);

            DB::beginTransaction();

            if ($request->has('logo')) {
                $filePath1 =uploadImage1 ('partners','logos', $request->logo);
                Partners::where('id', $id)
                    ->update([
                        'logo' => $filePath1,
                    ]);

            }
            if ($request->has('image')) {
                $filePath =uploadImage1 ('partners','image', $request->image);
                Partners::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);

            }

            $data = $request->except('_token', 'id', 'logo','image');
            Partners::where('id', $id)
                ->update(
                    $data
                );

//            $Partners->update($request->except('_token', 'logos', 'image'));
            DB::commit();
            return redirect()->route('admin.mainparnters')->with(['success' => 'تم تحديث الخدمه بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.mainparnters')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $Partners = Partners::find($id);
            if (!$Partners) {
                return redirect()->route('admin.mainparnters', $id)->with(['error' =>'هذه الخدمه غير موجوده']);
            }
            $Partners->delete();

            return redirect()->route('admin.mainparnters')->with(['success' => 'تم حذف الخدمه بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.mainparnters')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $Partners = Partners::find($id);

            if (!$Partners)
                return redirect()->route('admin.mainparnters')->with(['error' => 'هذا الخدمه غير موجود ']);

            $status =  $Partners ->statu  == 0 ? 1 : 0;

            $Partners -> update(['statu' =>$status ]);

            return redirect()->route('admin.mainparnters')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.mainparnters')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}

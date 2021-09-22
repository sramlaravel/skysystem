<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Abouts;
use App\Models\Language;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

class ServicesController extends Controller
{
    public function index()
    {
        $Services = Services::select()->paginate(PAGINATION_COUNT);

        return view('admin.Services.index', compact('Services'));
    }

    public function create()
    {
        return view('admin.Services.create');
    }

    public function store ( AboutRequest  $request )
    {


        try {


            if (!$request->has('statu'))
                $request->request->add(['statu' => 0]);
            else
                $request->request->add(['statu' => 1]);

            $filePath = "";

            if ($request->has('image')) {
                $filePath =uploadImage('Services', $request->image);
            }


            Services::create([
                'title_ar' => $request->get('title_ar'),
                'title_en' => $request->get('title_en'),
                'description_ar' => $request->get('description_ar'),
                'description_en' => $request->get('description_en'),

                'image' => $filePath,
            ]);

            return redirect()->route('admin.Services')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);


        } catch (\Exception $ex) {

return $ex;
            return redirect()->route('admin.Services')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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
        $Services = Services::select()->find($id);
        if (!$Services) {
            return redirect()->route('admin.Services')->with(['error' => 'هذه الاسلايد غير موجوده']);
        }

        return view('admin.Services.edit', compact('Services'));
    }

    public function update($id, UpdateAboutRequest $request)
    {

        try {

            $Services = Services::find($id);
            if (!$Services) {
                return redirect()->route('admin.Services.edit', $id)->with(['error' => 'هذه الاسلايد غير موجوده']);
            }


            DB::beginTransaction();
//
//            if (!$request->has('statu'))
//                $request->request->add(['statu' => 1]);


            if ($request->has('image')) {
                $filePath =uploadImage('Services', $request->image);
                Services::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);

            }


            $data = $request->except('_token', 'id','image');

            Services::where('id', $id) ->update( $data  );

            DB::commit();


            return redirect()->route('admin.Services')->with(['success' => 'تم تحديث الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.Services')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $Services = Services::find($id);
            if (!$Services) {
                return redirect()->route('admin.Services', $id)->with(['error' =>'هذه الاسلايد غير موجوده']);
            }
            $Services->delete();

            return redirect()->route('admin.Services')->with(['success' => 'تم حذف الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.Services')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

//    public function changeStatus($id)
//    {
//        try {
//            $sliders = Language::find($id);
//
//            if (!$sliders)
//                return redirect()->route('admin.languages')->with(['error' => 'هذا الاسلايد غير موجود ']);
//
//            $status =  $sliders ->statu  == 0 ? 1 : 0;
//
//            $sliders -> update(['statu' =>$status ]);
//
//            return redirect()->route('admin.languages')->with(['success' => ' تم تغيير الحالة بنجاح ']);
//
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.languages')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//        }
//    }
}

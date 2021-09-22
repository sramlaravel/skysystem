<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

class LanguagesController extends Controller
{
    public function index()
    {
        $slider = Language::select()->paginate(PAGINATION_COUNT);


        return view('admin.languages.index', compact('slider'));

    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store ( LanguageRequest $request)
    {


        try {


            if (!$request->has('statu'))
                $request->request->add(['statu' => 0]);
            else
                $request->request->add(['statu' => 1]);

            $filePath = "";

            if ($request->has('image')) {
                $filePath =uploadImage('Sliders', $request->image);
            }


            Language::create([
                'title_ar' => $request->get('title_ar'),
                'title_en' => $request->get('title_en'),
                'description_ar' => $request->get('description_ar'),
                'description_en' => $request->get('description_en'),
                'statu' => $request->get('statu'),
                'image' => $filePath,
            ]);

            return redirect()->route('admin.languages')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);


        } catch (\Exception $ex) {


            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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
        $slider = Language::select()->find($id);
        if (!$slider) {
            return redirect()->route('admin.languages')->with(['error' => 'هذه الاسلايد غير موجوده']);
        }

        return view('admin.languages.edit', compact('slider'));
    }

    public function update($id, UpdateLanguageRequest $request)
    {

        try {

            $slider = Language::find($id);
            if (!$slider) {
                return redirect()->route('admin.languages.edit', $id)->with(['error' => 'هذه الاسلايد غير موجوده']);
            }


            DB::beginTransaction();
//
//            if (!$request->has('statu'))
//                $request->request->add(['statu' => 1]);


            if ($request->has('image')) {
                $filePath =uploadImage('Sliders'.'/', $request->image);
                Language::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);

            }


            $data = $request->except('_token', 'id','image');

            Language::where('id', $id) ->update( $data  );

            DB::commit();


            return redirect()->route('admin.languages')->with(['success' => 'تم تحديث الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $slider = Language::find($id);
            if (!$slider) {
                return redirect()->route('admin.languages', $id)->with(['error' =>'هذه الاسلايد غير موجوده']);
            }
            $slider->delete();

            return redirect()->route('admin.languages')->with(['success' => 'تم حذف الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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

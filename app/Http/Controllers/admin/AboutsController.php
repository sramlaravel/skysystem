<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Abouts;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

class AboutsController extends Controller
{
    public function index()
    {
        $abouts = Abouts::select()->paginate(PAGINATION_COUNT);

        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store ( AboutRequest $request)
    {


        try {


            if (!$request->has('statu'))
                $request->request->add(['statu' => 0]);
            else
                $request->request->add(['statu' => 1]);

            $filePath = "";

            if ($request->has('image')) {
                $filePath =uploadImage('abouts', $request->image);
            }


            Abouts::create([
                    'title_ar' => $request->get('title_ar'),
                    'title_en' => $request->get('title_en'),
                    'description_ar' => $request->get('description_ar'),
                    'description_en' => $request->get('description_en'),

                    'image' => $filePath,
                ]);

               return redirect()->route('admin.about')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);


              } catch (\Exception $ex) {


        return redirect()->route('admin.about')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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
        $abouts = Abouts::select()->find($id);
        if (!$abouts) {
            return redirect()->route('admin.about')->with(['error' => 'هذه الاسلايد غير موجوده']);
        }

        return view('admin.about.edit', compact('abouts'));
    }

    public function update($id, UpdateAboutRequest $request)
    {

        try {

            $abouts = Abouts::find($id);
            if (!$abouts) {
                return redirect()->route('admin.about.edit', $id)->with(['error' => 'هذه الاسلايد غير موجوده']);
            }


            DB::beginTransaction();
//
//            if (!$request->has('statu'))
//                $request->request->add(['statu' => 1]);


            if ($request->has('image')) {
                $filePath =uploadImage('abouts', $request->image);
                Abouts::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);

            }


            $data = $request->except('_token', 'id','image');

            Abouts::where('id', $id) ->update( $data  );

            DB::commit();


            return redirect()->route('admin.about')->with(['success' => 'تم تحديث الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.about')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $slider = Abouts::find($id);
            if (!$slider) {
                return redirect()->route('admin.about', $id)->with(['error' =>'هذه الاسلايد غير موجوده']);
            }
            $slider->delete();

            return redirect()->route('admin.about')->with(['success' => 'تم حذف الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.about')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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

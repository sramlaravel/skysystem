<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

class  MainServiceController  extends Controller
{
    public function index()
    {
        $service = Language::select()->paginate(PAGINATION_COUNT);

        return view('admin.languages.index', compact('service'));
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
                $filePath =uploadImage ('sliders', $request->image);
            }


            Language::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
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

    public function update($id, LanguageRequest $request)
    {

        try {
            $slider = Language::find($id);
            if (!$slider) {
                return redirect()->route('admin.languages.edit', $id)->with(['error' => 'هذه الاسلايد غير موجوده']);
            }


            if (!$request->has('statu'))
                $request->request->add(['statu' => 1]);

            $slider->update($request->except('_token'));

            return redirect()->route('admin.languages')->with(['success' => 'تم تحديث الاسلايد بنجاح']);

        } catch (\Exception $ex) {
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

    public function changeStatus($id)
    {
        try {
            $sliders = Language::find($id);

            if (!$sliders)
                return redirect()->route('admin.languages')->with(['error' => 'هذا الاسلايد غير موجود ']);

            $status =  $sliders ->statu  == 0 ? 1 : 0;

            $sliders -> update(['statu' =>$status ]);

            return redirect()->route('admin.languages')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}

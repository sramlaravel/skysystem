<?php

namespace App\Http\Controllers\Admin;

use App\country;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;

use App\Http\Requests\UpdateNewsRequest;
use App\Models\Comenews;



use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComeNewsController extends Controller
{


    public function index()
    {
        $News = Comenews::selection()->paginate(PAGINATION_COUNT);

        return view('admin.comenew.index', compact('News'));
    }


    public function create()
    {



        return view('admin.comenew.create' );
    }



    public function store(NewsRequest $request)
    {

        try {

//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('news_img')) {
                $filePath =uploadImage('news', $request->news_img);
            }

            Comenews::create([
                'title_ar' => $request->get('title_ar'),
                'title_en' => $request->get('title_en'),
                'description_ar' => $request->get('description_ar'),
                'description_en' => $request->get('description_en'),

                'news_img' =>$filePath,





            ]);



            return redirect()->route('admin.comenew')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
return  $ex;
            return redirect()->route('admin.comenew')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($id)
    {
        try {

            $News = Comenews::select()->find($id);
            if (!$News){   return redirect()->route('admin.comenew')->with(['error' => 'هذا الخبر  غير موجود او ربما يكون محذوفا ']);}

            return view('admin.comenew.edit', compact('News' ));

        } catch (\Exception $exception) {
            return redirect()->route('admin.comenew')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id, UpdateNewsRequest $request)
    {

        try {

            $News = Comenews::select()->find($id);
            if (!$News)
                return redirect()->route('admin.comenew')->with(['error' => 'هذا  الخبر غير موجود او ربما يكون محذوفا ']);


       DB::beginTransaction();

            //photo
            if ($request->has('news_img') ) {
                 $filePath = uploadImage('news', $request->news_img);
                Comenews::where('id', $id)
                    ->update([
                        'news_img' => $filePath,
                    ]);
            }
//
//
//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id' ,'news_img'  );

//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            Comenews::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.comenew')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.comenew')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $News = Comenews::find($id);
            if (!$News) {
                return redirect()->route('admin.comenew', $id)->with(['error' =>'هذه  الخبر  غير موجوده']);
            }
            $News->delete();

            return redirect()->route('admin.comenew')->with(['success' => 'تم حذف الخبر  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.comenew')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

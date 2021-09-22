<?php

namespace App\Http\Controllers\Admin;

use App\Apply;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobsRequest;

use App\Http\Requests\UpdateJobsRequest;
use App\Models\Jobs;
use Monolog\Handler\IFTTTHandler;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use Illuminate\Support\Facades\Response ;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobsController extends Controller
{


    public function index()
    {
        $jobs = Jobs::selection()->paginate(PAGINATION_COUNT);

        return view('admin.Jobs.index', compact('jobs'));
    }


    public function details($id)
    {

        $newsDetail=DB::table('appliers')->where(['reference_job'=>$id])->get();
        $ap=$newsDetail->count ();

        if ($ap==0 )
            return redirect()->route('admin.Jobs')->with(['error' => 'لا يوجد متفدمين حاليا لهذه الوظيفه']);

else
        return view('admin.Jobs.appliers',compact('newsDetail'));
    }
    public   function getDownload($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/files/".$filename;

        $headers = array(
            'Content-Type: application/pdf',

        );
   return Response:: download ( $file, $filename, $headers)  ;




    }
    public function create()
    {



        return view('admin.Jobs.create' );
    }



    public function store(JobsRequest $request)
    {

        try {

//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('image')) {
                $filePath = uploadImage('jobs', $request->image);
            }

            Jobs::create([
                'title' => $request->get('title'),
                'location' => $request->get('location'),
                'image' =>$filePath,
                'requirements' => $request->get('requirements'),




            ]);

            return redirect()->route('admin.Jobs')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.Jobs')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($id)
    {
        try {

            $jobs = Jobs::select()->find($id);
            if (!$jobs){   return redirect()->route('admin.Jobs')->with(['error' => 'هذا الوظيفه  غير موجود او ربما يكون محذوفا ']);}

            return view('admin.Jobs.edit', compact('jobs' ));

        } catch (\Exception $exception) {
            return redirect()->route('admin.Jobs')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id, UpdateJobsRequest $request)
    {

        try {

            $jobs = Jobs::select()->find($id);
            if (!$jobs)
                return redirect()->route('admin.Jobs')->with(['error' => 'هذا  الوظيفه غير موجود او ربما يكون محذوفا ']);


       DB::beginTransaction();

            //photo
            if ($request->has('image') ) {
                 $filePath = uploadImage('jobs', $request->image);
                Jobs::where('id', $id)
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

             $data = $request->except('_token', 'id' ,'image'  );

//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            Jobs::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.Jobs')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.Jobs')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $jobs= Jobs::find($id);
            $appler  =DB::table('appliers')->where(['reference_job'=>$id])->get();

            if (!$jobs) {
                return redirect()->route('admin.Jobs', $id)->with(['error' =>'هذه  الوظيفه  غير موجوده']);
            }
            $jobs->delete();
            if ($appler) {
                $appler->delete();
            }

            return redirect()->route('admin.Jobs')->with(['success' => 'تم حذف الوظيفه  بنجاح']);

        } catch (\Exception $ex) {

            return redirect()->route('admin.Jobs')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

<?php

namespace App\Http\Controllers\Site;

use App\Apply;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $newsDetail=DB::table('jobs')->where(['id'=>$id])->get();

        return view('front.careers.apply',['newsDetail'=>$newsDetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload(ApplyRequest $req,$id )
    {

        $Detail=Jobs ::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title','requirements_'.LaravelLocalization::getCurrentLocale().' as  requirements','location_'.LaravelLocalization::getCurrentLocale().' as  location','image', 'updated_at','created_at')-> where('id', '=', $id)->get();



        $req->validate([
            'name' => 'required|min:3',
            'age'=>'required|min:2|max:2|regex:/^([0-9\s\-\+\(\)]*)$/',
            'degree'=> 'required',
            'email' => 'required|email',
            'phone' => 'required|min:9|max:9|regex:/^([0-9\s\-\+\(\)]*)$/ ',
            'address' => 'required',
            'skills' => 'required',
            'cv' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
        if($Files = $req->file('cv'))
      {
            $fileName =$Files->getClientOriginalName();
            $filePath = $Files->storeAs('uploads', 'files', 'public');

//            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
//            $fileModel->file_path = '/storage/' . $filePath;
//            $fileModel->save();

            foreach ($Detail as $name  ){
            if ($Files->move($filePath, $fileName)) {
                Apply::create([
                    'reference_job' =>$id,
                    'title' => $name->title,
                    'name' => $req->get('name'),
                    'age' => $req->get('age'),
                    'degree' => $req->get('degree'),
                    'email' => $req->get('email'),
                    'phone' => $req->get('phone'),
                    'address' => $req->get('address'),
                    'skills'=> $req->get('skills') ,
                    'cv' => $fileName

                ]);
//                return back() ->with("success", 'File has been uploaded.')->with('file', $fileName);
            }
            }
            return back()->with("success", "لقد تم استقبال طلبك عزيز وهوه قيد المراجعه .");
        }
    }
//    public function fileUpload(Request $req,$id){
//
//        // Image validation
//        $this->validate($req, [
//            'imageFile' => 'required|max:2048',
//            'imageFile.*' => 'mimes:jpg,jpeg,png,gif'
//        ]);
//
//        if($imageFiles = $req->file('imageFile')){
//            foreach($imageFiles as $file) {
//                $name = $file->getClientOriginalName();
//
//                $path = $file->storeAs('uploads', 'jobs', 'public') ;
//                if($file->move($path, $name)) {
//                    $save   =   Image::create([
//                        'name' => $name,
//                        'image_path' => $path
//                    ]);
//                }
//            }
//            return back()->with("success", "File has been uploaded.");
//        }
//    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

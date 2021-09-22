<?php

namespace App\Http\Controllers\Site;



use App\Contact;
use App\Http\Requests\ContactRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class  ContactController extends Controller
{
    public function contact()
    {
        return view('front.contact');
    }

    public function store(ContactRequest $request)
    {


        try {

//            if (!$request->has('active'))
//                $request->request->add(['active' => 0]);
//            else
//                $request->request->add(['active' => 1]);

//            $filePath = "";
//            if ($request->has('icon')) {
//                $filePath = uploadImage('vendors', $request->logo);
//            }


            Contact::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'message' => $request->get('message')

            ]);



            return redirect()->route('contact')->with(['success' => 'لقد تلقينا رسالتك ونود أن نشكرك على مراسلتنا.سيتم مراجعه رسالتك عزيزي الزائر بقى على تواصل معنا. نحن هنا لمساعدتك']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('contact')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }









    }

}

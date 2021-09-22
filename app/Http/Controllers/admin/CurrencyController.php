<?php

namespace App\Http\Controllers\Admin;

use App\country;
use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyRequests;
use App\Http\Requests\PointRequest;
 ;
use App\Models\Currenies;
use App\Models\points;





use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CurrencyController extends Controller
{


    public function index()
    {
        $sana = Currenies::selection()-> where('zone', '=', 1) ->whereIn('currency_id',  ['USD', 'SAR'])->paginate(PAGINATION_COUNT);
        $aden = Currenies::selection()-> where('zone', '=', 0)->whereIn('currency_id',  ['USD', 'SAR'])->paginate(PAGINATION_COUNT);
        return view('admin.Currency.index', compact('sana','aden'));
    }

    public function create()
    {



        return view('admin.Currency.create' );
    }




    public function store(CurrencyRequests $request)
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

            points::create([
                'name_point' => $request->get('name_point'),
                'poin_id' =>  random_int(2,1000),
                'branch_name' =>str::random(6),
                'desc_ar' => $request->get('desc_ar'),
                'phone' => $request->get('phone'),
                'fax' => $request->get('fax'),
                'city_id' => $request->get('city_id'),



            ]);



            return redirect()->route('admin.currency')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
 return $ex;
            return redirect()->route('admin.currency')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    public function edit($cur_id)
    {
        try {

            $Currencies=Currenies::select()->find($cur_id);

            if (!$Currencies){   return redirect()->route('admin.currency')->with(['error' => 'هذاالعمله  غير موجود او ربما يكون محذوفا ']);}

            return view('admin.Currency.edit', compact('Currencies'));

        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.currency')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function update($id, CurrencyRequests  $request)
    {

        try {

            $Currencies = Currenies::select()->find($id);
            if (!$Currencies)
                return redirect()->route('admin.currency')->with(['error' => 'هذا  الفرع غير موجود او ربما يكون محذوفا ']);


           DB::beginTransaction();


            if ($request->has('stutes') ) {
                 $filePath=  ($request->stutes);
                Currenies::where('id', $id)
                    ->update([
                        'stutes' => $filePath,
                    ]);
            }
//

//            if (!$request->has('stutes'))
//                $request->request->add(['stutes' => '']);
//            else
//                $request->request->add(['active' => 1]);
//            ['cur_id', 'cur_name', 'imagee', 'cur_sell', 'cur_buy', 'cur_date', 'stutes', 'currency_id', 'zone']
             $data = $request->except('_token', ' id','cur_name','imagee','currency_id', 'zone' );

//            if ($request->has('password') && !is_null($request->  password)) {
//
//                $data['password'] = $request->password;
//            }

            Currenies::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();
            return redirect()->route('admin.currency')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.currency')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
    public function destroy($id)
    {

        try {
            $Points =Currenies ::find($id);
            if (!$Points) {
                return redirect()->route('admin.currency', $id)->with(['error' =>'هذه  الفرع  غير موجوده']);
            }
            $Points->delete();

            return redirect()->route('admin.currency')->with(['success' => 'تم حذف الفرع  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.currency')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function changeStatus()
    {

    }


}

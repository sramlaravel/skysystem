<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;

use App\Models\branches;
use App\Models\Comenews;
use App\Models\Jobs;
use App\Models\Language;
use App\Models\Partners;
use App\Models\points;
use App\Models\Services;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){


        $contacts = Contact::selection()->paginate(PAGINATION_COUNT);

         return view('admin.dashboard', compact('contacts') );
    }


    public function destroy($id)
    {

        try {
            $Contacts = Contact::find($id);
            if (!$Contacts) {
                return redirect()->route('admin.dashboard', $id)->with(['error' =>'هذه  العميل  غير موجوده']);
            }
            else
            {
                $Contacts->delete();
                return redirect()->route('admin.dashboard')->with(['success' => 'تم حذف  العميل  بنجاح']);
            }


        } catch (\Exception $ex) {
            return redirect()->route('admin.dashboard')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}

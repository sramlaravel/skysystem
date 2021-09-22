<?php

namespace App\Http\Controllers\Site;

use App\Models\Attribute;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;

class reservationController extends Controller
{
    public function reservation()
    {
        $Customer=Customer::select()->get();

        return view('front.services',compact("Customer") );
    }

}

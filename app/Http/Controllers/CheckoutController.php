<?php

namespace App\Http\Controllers;
use App\Package;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function processPricing($id) {
        $package = Package::find($id);
        return view('frontend.pricingpage', compact('package'));
    }    
}

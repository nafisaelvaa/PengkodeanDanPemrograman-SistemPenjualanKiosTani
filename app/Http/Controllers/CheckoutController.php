<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkout;

class CheckoutController extends Controller
{
    public function indexCheckout(){
        $CheckoutProduct = checkout::all();
        return view('dashboardCheckout', compact("CheckoutProduct"));
    }

    public function showCheckout($id){
        $CheckoutProduct = product::findOrFail($id);
        return view('viewCheckout', compact("CheckoutProduct"));
    }
}

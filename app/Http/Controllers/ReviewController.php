<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function indexReview(){
        $ReviewCust = review::all();
        return view('dashboardPembeli', compact("ReviewCust"));
    }

    public function showReview($id){
        $ReviewCust = review::findOrFail($id);
        return view('viewCheckout', compact("ReviewCust"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use App\Models\checkout;
use App\Models\review;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    //login
    public function loginAdmin(){
        return view('loginAdmin');
    }
    public function loginAdminAction(Request $req){
        $user = User::where('phonenumber', $req->phonenumber)->first();
        if($user){
            $NewProduct = product::all();
            return view('dashboardAdmin', compact("NewProduct"));
        }
        return view('landingPage');
    }
    public function loginPembeli(){
        return view('loginPembeli');
    }
    public function loginPembeliAction(Request $req){
        $user = User::where('phonenumber', $req->phonenumber)->first();
        if($user){
            $ReviewCust = review::all();
            return view('dashboardPembeli', compact("ReviewCust"));
        }
        return view('landingPage');
    }

    //register
    public function register(){
        return view('register');
    }
    public function registerAction(Request $req){
        $user = User::create([
            'name'=>$req->name,
            'phonenumber'=>$req->phonenumber,
            'address'=>$req->address,
            'password'=>$req->password,
        ]);
        return view('landingPage');
    }

    //Dashboard Admin
    public function dashboardAdmin(){
        $NewProduct = product::all();
        return view('dashboardAdmin', compact("NewProduct"));
    }
    public function inputProduct(){
        return view('inputProduct');
    }
    public function inputProduct_action(Request $req){
        $product = product::create([
            'namaBuah'=>$req->namaBuah,
            'harga'=>$req->harga,
            'quantity'=>$req->quantity,
        ]);
        $NewProduct = product::all();
        return view('dashboardAdmin', compact("NewProduct"));
    }

    //Pembeli
    public function dashboardPembeli(){
        $ReviewCust = review::all();
        return view('dashboardPembeli', compact("ReviewCust"));
    }
    public function indexPembeli(){
        $Pembeli = User::all();
        return view('userProfilling', compact("Pembeli"));
    }
    public function showPembeli($id){
        $Pembeli = User::findOrFail($id);
        return view('userProfilling', compact("Pembeli"));
    }
    public function userProfilling(){
        return view('userProfilling');
    }

    //Checkout
    public function dashboardCheckout(){
        $CheckoutProduct = checkout::all();
        return view('dashboardCheckout', compact("CheckoutProduct"));
    }
    public function addCart(){
        $CheckoutProduct = checkout::all();
        return view('addCart', compact("CheckoutProduct"));
    }
    public function addCartAction(Request $req){
        $checkout = checkout::create([
            'checkoutProduk'=>$req->checkoutProduk,
            'checkoutQuantity'=>$req->checkoutQuantity,
            'totalHarga'=>$req->totalHarga,
        ]);
        $CheckoutProduct = checkout::all();
        return view('dashboardCheckout', compact("CheckoutProduct"));
    }

    //Review
    public function reviewCustomer(){
        $ReviewCust = review::all();
        return view('reviewCustomer', compact("ReviewCust"));
    }
    public function ReviewAction(Request $req){
        $review = review::create([
            'namaPembeli'=>$req->namaPembeli,
            'komentar'=>$req->komentar,
        ]);
        $ReviewCust = review::all();
        return view('dashboardPembeli', compact("ReviewCust"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $NewProduct = product::all();
        return view('dashboardAdmin', compact("NewProduct"));
    }

    public function show($id){
        $NewProduct = product::findOrFail($id);
        return view('viewProduct', compact("NewProduct"));
    }

    public function destroy($id){
        $NewProduct = product::findOrFail($id);
        $NewProduct->delete();
       return redirect()->back();
    }

    public function edit($id){
        $NewProduct = product::findOrFail($id);
        return view('editProduct', compact("NewProduct"));
    }

    public function update(Request $req, $id){
        $this->validate($req, [
        'namaBuah' => 'required',
        'harga' => 'required',
        'quantity' => 'required',
        ]);

        $NewProduct = product::findOrFail($id);
        
        $NewProduct->update([
            'namaBuah'=>$req->namaBuah,
            'harga'=>$req->harga,
            'quantity'=>$req->quantity,
        ]);
        return redirect('dashboardAdmin')->with('Success', 'Data Has Been Update');
    }
}

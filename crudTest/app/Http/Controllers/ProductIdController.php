<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Controller;

class ProductIdController extends Controller
{
    public function submit(Request $request)
    {
    /*  $validation = $request->validate([
          'name'=>'required|min:3,|max:40',
          'price'=>'required|min:1|max:11'
      ]);*/
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->route('home')->with('success', 'Product was added!');
    }
    public function allData(){
        return view('messages', ['data' => Product::all()]);
    }
    public function showOneProduct($id){
        return view('products.one-product', ['data' => Product::find($id)]);
    }
    public function editProduct($id){
        return view('products.edit-product', ['data' => Product::find($id)]);

    }
    public function deleteProduct($id){
       Product::find($id)->delete();
        return redirect()->route('home')->with('success', 'Product was deleted!');
    }

    public function editProductSubmit($id,Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->route('one-product',$id)->with('success', 'Product was updated!');
    }

}


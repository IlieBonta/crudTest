<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        return redirect()->route('home');
    }
}

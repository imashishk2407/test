<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
         return view('products.index');
    }

    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();
    }


    public function list(Request $request){
        
        $product = Product::get();
        
        return view('products.list')->with('product',$product);
        
   }

   public function edit($id){
    $product = Product::findOrFail($id);
  
    return view('products.edit',compact('product'));
}

    public function updateProduct(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect('list')->with('success', 'Product updated successfully');
    }


    public function destroy($id)
        {
        $product=Product::find($id);
        $product->delete();
        
        return redirect('list')->with('success', 'Product Delete successfully');
        }
}

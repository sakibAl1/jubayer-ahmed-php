<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function addproduct()

    {
        
        return view('addproduct');
    }

    public function allproduct()
    {
        $products=Product::all();
        return view('allproduct',compact('products'));
    }

    public function storeproduct(Request $request)
    {

        $request->validate([
            'product_name' => 'required|unique:products',
            
        ]);

        $products = new Product();

        $products->product_name=$request->product_name;
        
        if(isset($request->product_img)){
            $filename = time().'.'.$request->product_img->extension();
            $upload_path = public_path('upload/productphoto');
            $request->product_img->move($upload_path,$filename);
            $products->product_img = $filename;
        }
       
       


        $products->save();

        return redirect()->route('allproduct')->with('message', 'your Product added successfully.');
    }


  public function editproduct($id){
    $products=Product::find($id);
    return view('editproduct',compact('products'));
  }


  public function updateproduct(Request $request, $id){
    $products=Product::find($id);
    $products->product_name=$request->product_name;


    $products->save();


    return redirect()->route('allproduct')->with('message', 'your Product updated successfully.');

    

  }



    public function deleteproduct($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('allproduct')->with('message', 'your Product deleted successfully.');
    }
    
}

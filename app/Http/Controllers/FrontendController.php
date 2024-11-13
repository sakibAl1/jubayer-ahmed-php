<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function shop_grid()
    {
        return view('shop_grid');
    }

    public function shop_details()
    {
        return view('shop_details');
    }

    public function blog_details()
    {
        return view('blog_details');
    }

    public function shopping_cart()
    {
        return view('shopping_cart');
    }

    public function home_page()
    {
        $products = Product::all();
        return view('home_page',compact('products'));
    }

}

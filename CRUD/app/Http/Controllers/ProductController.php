<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product,Request $request)
    {
        //validate data
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10240'
        ]);
        // $ImageName = time().'.'.$request->image->extension();
        $ImageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('products'),$ImageName);
        $product->name  = $request->name;
        $product->description = $request->description;
        $product->image = $ImageName;
        $product->save();
        return back()->withSuccess('Product Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Product $product)
    {
        $product = Product::find($id);
        return view('Products.edit',['products'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request, Product $product)
    {
        //validate data
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10240'
        ]);
        $product = Product::find($id);
        if (isset($request->image)) {
            $Imagename = $request->image->getClientOriginalName();
            $request->image->move(public_path('products'),$Imagename);
            $product->image = $Imagename;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->withSuccess('Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,Product $product)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->withSuccess('Product Deleted');
    }
}

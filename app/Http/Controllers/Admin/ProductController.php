<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Flavor;
use App\Models\Category;
use App\Models\CategoryChild;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productList = Product::paginate(10);
        return view('Admin.product.index',compact('productList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $flavorList = Flavor::get();
        $categoryList = Category::get();
        $categoryChildList = CategoryChild::get();
        return view('Admin.product.add-Product',compact('flavorList','categoryList','categoryChildList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = $request->name."".time();
            $extension = $file->extension();
            $file->storeAs(config('constants.url.image-product'), $file_name.'.'.$extension);
        }
        $request['image'] = $file_name.'.'.$extension;
        $request['flavor_id'] = $request->flavor[0];
        $request['category_id'] = $request->category[0];
        $request['category_child_id'] = $request->category_child[0];
        $request['discription'] = $request->editor1;
        $request['slug'] = Str::slug($request->name);
        $request['reviews'] = 0;
        $request['sell'] = 0;
        Product::create($request->except('flavor','category','category_child','editor1','img'));
        return redirect('product')->with('Addition Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categoryList = Category::get();
        $categoryChildList = CategoryChild::get();
        $flavorList = Flavor::get();
        return view('Admin.product.update-Product',compact('categoryList','categoryChildList','flavorList','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = $request->name."".time();
            $extension = $file->extension();
            $file->storeAs(config('constants.url.image-product'), $file_name.'.'.$extension);
            $request['image'] = $file_name.'.'.$extension;
            File::delete(public_path(config('constants.url.image-product').$product->image));
        }
        else{
            $request['image'] = $product->image;
        }
        $request['flavor_id'] = $request->flavor[0];
        $request['category_id'] = $request->category[0];
        $request['category_child_id'] = $request->category_child[0];
        $request['discription'] = $request->editor1;
        $request['slug'] = Str::slug($request->name);
        $request['reviews'] = $request->reviews;
        $request['sell'] = $request->sell;
        $product->update($request->except('flavor','category','category_child','editor1','img'));
        return redirect('product')->with('Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('product')->with('Delete Successful');
    }
}

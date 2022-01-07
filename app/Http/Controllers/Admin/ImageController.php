<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ImageService;
use Illuminate\Support\Str;
use File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $imageList = Image::orderByDesc("product_id")->get();
        return view('Admin.image.index',compact('imageList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.image.add-ImageProduct');
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
        $request['src'] = $file_name.'.'.$extension;
        $request['slug'] = Str::slug($request->name);
        $product_id = @Product::where('name',$request->product_name)->first()->id;
        $request['product_id'] = $product_id;
        Image::create($request->except('product_name','img'));
        return redirect('image-product')->with("Addition Image Product Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image_product)
    {
        //
        return view('Admin.image.update-ImageProduct',compact('image_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image_product)
    {
        //
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = $request->name."".time();
            $extension = $file->extension();
            $file->storeAs(config('constants.url.image-product'), $file_name.'.'.$extension);
            $request['src'] = $file_name.'.'.$extension;
            File::delete(public_path(config('constants.url.image-product').$image_product->src));
        }
        else{
            $request['src'] = $image_product->src;
        }
        $request['slug'] = Str::slug($request->name);
        $product_id = @Product::where('name',$request->product_name)->first()->id;
        $request['product_id'] = $product_id;
        $image_product->update($request->except('product_name','img'));
        return redirect('image-product')->with("Update Image Product Successful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image_product)
    {
        //
        $image_product->delete();
        File::delete(public_path(config('constants.url.image-product').$image_product->src));
        return redirect('image-product')->with("Delete Image Product Successful");
    }
}

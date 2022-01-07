<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
class HomeController extends Controller
{
    //
    public function homepage(){
        $productList = Product::get();
        return view('Home.index',compact('productList'));
    }

    public function view_supplement(){
        $productListWhey = Product::where('category_id',Category::where('slug','whey-protein')->first()->id)->inRandomOrder()->get();
        $productListWhey1 = Product::where('category_id',Category::where('slug','whey-protein')->first()->id)->inRandomOrder()->get();
        $productListWhey2 = Product::where('category_id',Category::where('slug','whey-protein')->first()->id)->inRandomOrder()->get();
        $productListBcaa = Product::where('category_id',Category::where('slug','bcaa')->first()->id)->inRandomOrder()->get();
        $productListBcaa1 = Product::where('category_id',Category::where('slug','bcaa')->first()->id)->inRandomOrder()->get();
        $productListWeight = Product::where('category_id',Category::where('slug','sua-tang-can')->first()->id)->inRandomOrder()->get();
        $productListWeight1 = Product::where('category_id',Category::where('slug','sua-tang-can')->first()->id)->inRandomOrder()->get();
        $productListWeight2 = Product::where('category_id',Category::where('slug','sua-tang-can')->first()->id)->inRandomOrder()->get();
        $productListVitamin = Product::where('category_id',Category::where('slug','vitamin-khoang')->first()->id)->inRandomOrder()->get();
        $productListVitamin1 = Product::where('category_id',Category::where('slug','vitamin-khoang')->first()->id)->inRandomOrder()->get();
        
        return view('Home.supplement',compact(
            'productListWhey','productListWhey1','productListWhey2',
            'productListBcaa','productListBcaa1','productListWeight',
            'productListWeight1','productListWeight2',
            'productListVitamin','productListVitamin1'));
    }

    public function detail_supplement(Product $product){
        $productRelevantList = Product::where('category_id',$product->category_id)->get();
        return view('Home.detail-product',compact('product','productRelevantList'));
    }

    public function view_cart($user_id){
        $cartList = Cart::where('user_id',$user_id)->latest()->get();
        return view('Home.cart',compact('cartList'));
    }

    public function addCart(Request $request)
    {
        $check_product = Cart::where('product_id',$request->product_id)->where('user_id',$request->user_id)->get();
        if($check_product->count() > 0){
            return response()->json(0);
        }
        else{
            $cart = new Cart();
            $cart -> product_id = $request->product_id;
            $cart -> user_id = $request->user_id;
            $cart->save();
            return response()->json(1);
        }
        // 
    }

    public function paymentProduct(Request $request)
    {
        $cartList = Cart::where('user_id',$user_id)->latest()->get();
        return view('Home.cart',compact('cartList'));
    }
}

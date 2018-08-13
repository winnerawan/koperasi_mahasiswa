<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Product;
use App\Promo;
use App\Tax;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function index()
    {
        $tax = Tax::first();
        $products = Product::all()->where('status', '=', 1);
        $promos = Promo::with('product')->get();
//        $n_products = $products->map(function ($c) {
//            return collect($c)->forget('product');
//        });

        foreach ($promos as $key => $promo) {
            foreach ($products as $val => $product) {
                if ($product->id == $promo->product_id) {
                    $products->forget($val);
                }
            }
        }
//        dd(count($products));
        $carts = Cart::content();
        $categories = Category::all();

        return view('front.index')->with(['tax' => $tax, 'products' => $products, 'promos' => $promos, 'carts' => $carts, 'categories' => $categories]);
    }

    public function product_by_category($id)
    {

        $tax = Tax::all()->first();
        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->where('status', '=', 1)->get();
        return view('front.catalogue')->with(['tax' => $tax, 'products' => $products, 'categories' => $categories]);
    }

    public function product_detail($id)
    {
//            $customer = Auth::user();
//            if ($customer==null) {
//                redirect('customer/login');
//            } else {
//                $product = Product::find($id);
//                $tax = Tax::all()->first();
//                $customer = Auth::user();
//                $categories = Category::all();
//                //dd($customer);
//                return view('front.product')->with(['tax' => $tax, 'product' => $product, 'categories' => $categories]);
//            }

        $product = Product::find($id);
        $tax = Tax::all()->first();
        $customer = Auth::user();
        $categories = Category::all();
        //dd($customer);
        return view('front.product')->with(['tax' => $tax, 'product' => $product, 'categories' => $categories]);

    }

    public function product_promo_detail($id)
    {
        $product = Product::find($id);
        $tax = Tax::all()->first();
        $customer = Auth::user();
        $categories = Category::all();
        //dd($customer);
        return view('front.product_promo')->with(['tax' => $tax, 'product' => $product, 'categories' => $categories]);

    }

    public function about()
    {
        return view('front.about');
    }
}

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
        $carts = Cart::content();
        $categories = Category::all();
//        return $promos;
//dd($tax);

        return view('front.index')->with(['tax' => $tax, 'products' => $products, 'promos' => $promos, 'carts' => $carts, 'categories' => $categories]);
    }

    public function product_by_category($id)
    {

        $tax = Tax::all()->first();
        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->get();
        return view('front.catalogue')->with(['tax' => $tax, 'products' => $products, 'categories' => $categories]);
    }

    public function product_detail($id)
    {
        if (Auth::guest()) {
            return redirect('customer/login');
        }
        $product = Product::find($id);
        $tax = Tax::all()->first();
        $customer = Auth::user();
        $categories = Category::all();
        //dd($customer);
        return view('front.product')->with(['tax' => $tax, 'product' => $product, 'categories' => $categories]);
    }

    public function about()
    {
        return view('front.about');
    }
}

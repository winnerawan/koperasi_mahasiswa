<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Category;
use App\Product;
use App\Merchant;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('merchant_id', '=', Auth::user()->id);
        return view('merchant.product.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $merchants = Merchant::all();

        return view('merchant.product.create')->with(['categories' => $categories, 'merchants' => $merchants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $merchant = Auth::user();
        $product->category_id = $request->category_id;
        $product->merchant_id = $merchant->id;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/products/'.$filename);
            Image::make($image)->resize(270, 300)->save($location);
            $product->image = $filename;
            $product->status = 0;
        }

        $product->save();

        return redirect()->route('merchant.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('merchant.product.show')->with(['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $merchants = Merchant::all();

        return view('merchant.product.edit')->with(['product' => $product, 'categories' => $categories, 'merchants' => $merchants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->category_id = $request->input('category_id');
        $product->merchant_id = Auth::user()->id;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');

        $product->status = 0;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/products/'.$filename);
            Image::make($image)->resize(270, 300)->save($location);
            $oldFilename = $product->image;
            $product->image = $filename;
            Storage::delete($oldFilename);
        }

        $product->save();

        return redirect()->route('merchant.product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete($product->image);

        return redirect()->route('merchant.product.index');
    }

    public function sale_product()
    {
        $products = DB::select('SELECT * FROM order_details INNER JOIN products ON order_details.product_id = products.id WHERE products.merchant_id = ' . Auth::user()->id);
        return view('merchant.sales')->with(['products' => $products]);
    }

    public function income()
    {
        $incomes = DB::select("SELECT * FROM orders INNER JOIN order_details ON order_details.order_id = orders.id LEFT JOIN products ON products.id = order_details.product_id WHERE products.merchant_id = " . Auth::user()->id." GROUP BY order_id");
        return view("merchant.income")->with(['incomes' => $incomes]);
    }
}

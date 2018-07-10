<?php

namespace App\Http\Controllers\AdminAuth;

use App\Category;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Merchant;
use App\Http\Controllers\Controller;
use App\Tax;
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
        $products = Product::all();
        return view('admin.product.index')->with(['products' => $products]);
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

        return view('admin.product.create')->with(['categories' => $categories, 'merchants' => $merchants]);
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

        $product->category_id = $request->category_id;
        $product->merchant_id = $request->merchant_id;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = 1;
        $product->quantity = $request->quantity;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/products/'.$filename);
            Image::make($image)->resize(270, 300)->save($location);
            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('admin.product.index');

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
        return view('admin.product.show')->with(['product' => $product]);
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

        return view('admin.product.edit')->with(['product' => $product, 'categories' => $categories, 'merchants' => $merchants]);
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
        $product->merchant_id = $request->input('merchant_id');

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        $product->quantity = $request->input('quantity');


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

        return redirect()->route('admin.product.index');

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

        $product->delete();

        return redirect()->route('admin.product.index');
    }

    public function sales()
    {
        $sales = Order::with("order_detail")->get();

//        return $sales;
        // foreach ($sales as $sale) {
        //     $od = OrderDetail::find($sale->id);
        // }
//        dd($od);
        return view('admin.sales')->with(['sales' => $sales]);
    }

    public function sales_detail($id)
    {
        $sales_detail = OrderDetail::with("product")->where("order_id", "=", $id)->get();
        $tax = Tax::first();
//        return $sales_detail;
//        dd($sales_detail->price);
        return view('admin.sales_detail')->with(['tax' => $tax, 'sales_detail' => $sales_detail]);
    }

    public function invoice($id)
    {
        $tax = Tax::all()->first();
        $order = Order::find($id);
        $order_details = OrderDetail::where('order_id', '=', $id)->get();

        return view('admin.invoice')->with(['tax' => $tax, 'order' => $order, 'order_details' => $order_details]);
    }
}

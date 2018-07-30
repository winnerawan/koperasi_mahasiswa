<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use App\Profit;
use App\Tax;
use Cart;
use DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $order = Order::all()->where('customer_id', '=', Auth::user()->id)->first();
        if ($order!=null) {
            $order_details = OrderDetail::all()->where('order_id', '=', $order->id);
            $payments = Payment::all();
            return view('customer.cart')->with(['order_details' => $order_details, 'payments' => $payments]);
        }
        return view('customer.cart');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//    {
//        if (Auth::user()==null) {
//            return redirect('customer/login');
//        } else {
////            $cart = Cart::add($request->pro_id, $request->pro_name, $request->qty, $request->pro_price);
//            $order = new Order;
//            $order->customer_id = Auth::user()->id;
//            $order->total_price = 0;
//            $order->save();
//
//            $order_detail = new OrderDetail;
//            $order_detail->order_id = $order->id;
//            $order_detail->product_id = $request->pro_id;
//            $order_detail->qty = $request->qty;
//            $order_detail->sub_total = (double)$request->pro_price * (int)$request->qty;
//
//            $order_detail->save();
//            return redirect('customer/cart')->with(['cart' => $order_detail]);
//        }
            if (Auth::user()==null) {
                return redirect('customer/login');
            } else {
            $cart = Cart::add($request->pro_id, $request->pro_name, $request->qty, $request->pro_price, ['untung' => $request->untung]);
                $payments = Payment::all();
//            dd($request->untung)
            $tax = Tax::first();
                return view('customer.cart')->with(['tax' => $tax, 'cart' => $cart, 'payments' => $payments]);

            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,100'
        ]);
        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
//        return response()->json(['success' => true]);
        $payments = Payment::all();

        return view('customer.cart')->with(['payments' => $payments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('customer/cart');
    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect('customer/cart');
    }

    public function pay(Request $request)
    {
        $order = new Order;
        $order->customer_id = Auth::user()->id;
        $order->total_price = Cart::total();
//        $order->merchant_id = $request->merchant_id;
        $order->payment_id  = $request->payment_id;

        $order->save();
        $profit = new Profit;

        $this->count_profit($order->id, $request->untung);
        $cart = Cart::content();
//        $item = [];
//
//        for($i = 0; $i<$cart->count(); $i++) {
//            $item = new OrderDetail();
//            dd($cart->id);
//            $item->order_id = $order->id;
//            $item->product_id = $cart[$i]->id;
//            $item->qty = $cart[$i]->qty;
//
//            $item->save();
//        }

        foreach ($cart as $item) {
            //dd($item->qty);
            $od = new OrderDetail;
            $od->order_id = $order->id;
            $od->product_id = $item->id;
            $od->qty = $item->qty;

            $od->save();
            $this->subtract_stock($od->product_id, $item->qty);
        }

        $payments = Payment::all();


        $this->emptyCart();
//        return view('customer/home')->with(['payments' => $payments, 'order_details' => $od]);
        return redirect()->route('customer.payment', $request->payment_id);
    }

    public function history()
    {
        $payments = Payment::all();
        $tax = Tax::all()->first();

        $order = Order::all()->where('customer_id', '=', Auth::user()->id)->first();
        if ($order!=null) {
            $order_details = DB::select("SELECT p.name, od.created_at, od.qty, p.price FROM products as p INNER JOIN order_details as od ON p.id = od.product_id INNER JOIN orders ON orders.id = od.order_id WHERE orders.customer_id =". Auth::user()->id);
            return view('customer.home')->with(['tax' => $tax, 'order_details' => $order_details, $payments]);
        }
        return view('customer.cart')->with(['tax' => $tax, 'payments' => $payments]);
        // $customer = Auth::user()->id;
        // $orders = OrderDetail::with('order')->where('orders.customer_id', '=', $customer)->get();
        // return $orders;
        // return view('customer.home')->with(['orders' => $orders, $payments]);

    }


    public function payment($id)
    {
        $payment = Payment::find($id);
        return view('customer.payment')->with(['payment' => $payment]);
    }

    public function subtract_stock($id, $qty) {
        $product = Product::find($id);
        $product->quantity = $product->quantity - $qty;

        $product->save();
    }

    public function count_profit($trans, $untung)
    {
        $profit = new Profit;
        $profit->order_id = $trans;
        $profit->profit = $untung;
//        dd($untung);

        $profit->save();
    }
}

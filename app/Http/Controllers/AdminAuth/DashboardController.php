<?php

namespace App\Http\Controllers\AdminAuth;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\Order;
use App\Product;
use App\Profit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $products = Product::all();
        $merchants = Merchant::all();
        $customers = Customer::all();
        $orders = Order::all();
        $profits = Profit::all();

        $p=0;
        foreach ($profits as $profits) {
//            dd($order['total_price']);
//            dd(str_replace(",", "", $order->total_price));
            $p += str_replace(",", "", $profits->profit);
        }
        $tp=0;
        foreach ($orders as $order) {
//            dd($order['total_price']);
//            dd(str_replace(",", "", $order->total_price));
            $tp += str_replace(",", "", $order->total_price);
        }

        return view('admin.home')->with(['p' => $p, 'products'=> $products, 'merchants' => $merchants, 'customers'=> $customers, 'orders' => $orders, 'tp' => $tp]);
    }
}

<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Merchant;
use App\Order;
use App\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use PdfReport;
use App\Tax;

class ReportController extends Controller
{

    public function index()
    {
        $arr = [ "--pilih laporan--", "Hari ini", "Minggu ini", "Bulan ini", "Tahun ini"];
        $merchants = Merchant::all();

        return view('admin.report.index')->with(['dates' => $arr, 'merchants' => $merchants]);
    }

    public function report_today()
    {
        // Report title
        $title = 'Laporan Penjualan Hari Ini';
        $meta = [];
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = Order::select(['customers.name', 'payments.name as pembayaran', 'orders.total_price','orders.created_at'])->join('customers', 'customers.id', '=', 'orders.customer_id')->join('payments', 'payments.id', '=', 'orders.payment_id')->whereDate('orders.created_at', '=', Carbon::today());
        $columns = [
//            'id' => 'id',
            'Pembeli' => 'name',
            'Pembayaran' => 'pembayaran',
            'Total' =>  'total_price',
            'Tanggal' => 'created_at'
        ];

//        return $orders;
        return PdfReport::of($title, $meta, $orders, $columns)->stream();
    }

    public function report_weekly()
    {
// Report title
        $title = 'Laporan Penjualan Hari Ini';
        $meta = [];
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = Order::select(['customers.name', 'payments.name as pembayaran', 'orders.total_price','orders.created_at'])->join('customers', 'customers.id', '=', 'orders.customer_id')->join('payments', 'payments.id', '=', 'orders.payment_id')->whereBetween('orders.created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
        $columns = [
//            'id' => 'id',
            'Pembeli' => 'name',
            'Pembayaran' => 'pembayaran',
            'Total' =>  'total_price',
            'Tanggal' => 'created_at'
        ];

//        return $orders;
        return PdfReport::of($title, $meta, $orders, $columns)->stream();
    }

    public function report_monthly()
    {
// Report title
        $title = 'Laporan Penjualan Hari Ini';
        $meta = [];
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = Order::select(['customers.name', 'payments.name as pembayaran', 'orders.total_price','orders.created_at'])->join('customers', 'customers.id', '=', 'orders.customer_id')->join('payments', 'payments.id', '=', 'orders.payment_id')->whereBetween('orders.created_at', [Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()]);
        $columns = [
//            'id' => 'id',
            'Pembeli' => 'name',
            'Pembayaran' => 'pembayaran',
            'Total' =>  'total_price',
            'Tanggal' => 'created_at'
        ];

//        return $orders;
        return PdfReport::of($title, $meta, $orders, $columns)->stream();
    }

    public function report_yearly()
    {
// Report title
        $title = 'Laporan Penjualan Hari Ini';
        $meta = [];
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = Order::select(['customers.name', 'payments.name as pembayaran', 'orders.total_price','orders.created_at'])->join('customers', 'customers.id', '=', 'orders.customer_id')->join('payments', 'payments.id', '=', 'orders.payment_id')->whereBetween('orders.created_at', [Carbon::now()->startOfYear(),Carbon::now()->endOfYear()]);
        $columns = [
//            'id' => 'id',
            'Pembeli' => 'name',
            'Pembayaran' => 'pembayaran',
            'Total' =>  'total_price',
            'Tanggal' => 'created_at'
        ];

//        return $orders;
        return PdfReport::of($title, $meta, $orders, $columns)->stream();
    }

    public function report_merchant_earning($id)
    {
        $title = 'Laporan Penjualan Hari Ini';
        $meta = [];
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = OrderDetail::select(['merchants.name as penjual', 'products.name as name', 'products.price as harga', 'order_details.qty as jumlah', 'order_details.created_at as tanggal'])->join('products', 'products.id', '=', 'order_details.product_id')->join('merchants', 'merchants.id', '=', 'products.merchant_id')->where('products.merchant_id', '=', $id);
//        $orders = DB::select('SELECT * FROM order_details INNER JOIN products ON order_details.product_id = products.id WHERE products.merchant_id = ' . $id);

        $columns = [
//            'id' => 'id',
            'Penjual' => 'penjual',
            'Produk' => 'name',
            'Harga Satuan' => 'harga',
            'Jumlah' => 'jumlah',
            'Tanggal' => 'tanggal',
            'Total' =>  function($result) {
                return ($result->harga * $result->jumlah);
            }

        ];

//        return $orders;
        return PdfReport::of($title, $meta, $orders, $columns)->stream();
    }


    public function generateNota($id)
    {
        $tax = Tax::all()->first();
        $order = Order::find($id);
        $order_details = OrderDetail::where('order_id', '=', $id)->get();

        foreach ($order_details as $od) {

        }

        $invoice = \ConsoleTVs\Invoices\Classes\Invoice::make()
            ->addItem($od->product->name, $od->product->price + ($od->product->price * $tax->tax/100), $od->qty, $order->total_price)
            ->number($id)->tax(0)->notes('Metode Pembayaran : ' . $order->payment->name)->customer([
                'name' => $order->customer->name
            ])->download('demo')->save('public/invoice.pdf');
    }

}

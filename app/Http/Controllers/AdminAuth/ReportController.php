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
//        $orders = DB::select("SELECT o.id, c.name, p.name, o.total_price, o.created_at FROM `orders` as o INNER JOIN customers as c ON c.id = o.customer_id INNER JOIN payments as p ON p.id = o.payment_id WHERE DATE(o.created_at) = CURDATE()");
        $orders = OrderDetail::select(['merchants.name as penjual', 'products.name as name', 'products.price as harga', 'order_details.qty as jumlah', 'order_details.created_at as tanggal'])->join('products', 'products.id', '=', 'order_details.product_id')->join('merchants', 'merchants.id', '=', 'products.merchant_id')->where('products.merchant_id', '=', $id)->get();
//        $orders = DB::select('SELECT * FROM order_details INNER JOIN products ON order_details.product_id = products.id WHERE products.merchant_id = ' . $id);
//        $orders = OrderDetail::join('products', 'products.id', '=', 'order_details.product_id')->join('merchants', 'merchants.id', '=', 'products.merchant_id')->where('merchants.id', '=', $id)->get();
//        dd($orders);
        $header = array('No', 'Penjual', 'Produk', 'Harga', 'Jumlah', "Total", "Tanggal");
        $fpdf = new \Codedge\Fpdf\Fpdf\Fpdf();
        $fpdf->AddPage("P", "A5");
        $fpdf->SetFont('Courier', 'B', 18);
        $this->letak($fpdf, "admin/assets/images/deptic.png");
        $this->judul($fpdf, "KOPERASI TEKNIK INFORMATIKA", "FAKULTAS TEKNIK", "UNIVERSITAS PGRI MADIUN", "Jl. Auri No. 6 Madiun, Jawa Timur, Indonesia", "Telp: 0351-462986 Email: rektorat@unipma.ac.id");
        $this->garis($fpdf);
        $fpdf->Cell(1000, 10, "", null);
        $fpdf->Ln();

        $this->TableMerchantEarning($fpdf, $header, $orders);
        $this->ttd($fpdf);

        $fpdf->Output();

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



    public function judul(\Codedge\Fpdf\Fpdf\Fpdf $fpdf, $teks1, $teks2, $teks3, $teks4, $teks5)
    {
        $fpdf->Cell(20);
        $fpdf->SetFont("Times", "B", "12");
        $fpdf->Cell(0, 5, $teks1, 0, 1, "C");
        $fpdf->Cell(20);
        $fpdf->Cell(0, 5, $teks2, 0, 1, "C");
        $fpdf->Cell(20);
        $fpdf->SetFont("Times", "B", "15");
        $fpdf->Cell(0, 5, $teks3, 0, 1, "C");
        $fpdf->Cell(20);
        $fpdf->SetFont("Times", "I", "8");
        $fpdf->Cell(0, 5, $teks4, 0, 1, "C");
        $fpdf->Cell(20);
        $fpdf->Cell(0, 2, $teks5, 0, 1, "C");
    }

    function garis(\Codedge\Fpdf\Fpdf\Fpdf $fpdf)
    {
        $fpdf->SetLineWidth(1);
        $fpdf->Line(10, 36, 138, 36);
        $fpdf->SetLineWidth(0);
        $fpdf->Line(10, 37, 138, 37);
    }

    function letak(\Codedge\Fpdf\Fpdf\Fpdf $fpdf, $gambar)
    {
        $fpdf->Image($gambar, 10, 10, 20, 20);
    }

    public function ttd(\Codedge\Fpdf\Fpdf\Fpdf $fpdf)
    {
        $fpdf->SetY(-60);
        $fpdf->SetFont("Times", "B", "8");
        $fpdf->Cell(0, 5,  "Madiun, ". Carbon::today('Asia/Jakarta')->format('d F Y'), 0, 1, "R");
        $fpdf->Cell(121, 5, "Mengetahui", 0, 1, "R");
        $fpdf->Cell(122, 3, "Ketua Kopma", 0, 1, "R");
        $fpdf->SetFont("Times", "U", "8");
        $fpdf->Cell(0, 15, "", 0, 1, "C");
        $fpdf->SetFont("Times", "BU", "8");
        $fpdf->Cell(124, 3, "Iqro' Wiradhika", 0, 1, "R");
        $fpdf->Cell(0, 0, "", 0, 1, "C");
        $fpdf->SetFont("Times", "", "8");
        $fpdf->Cell(124, 3, "NIM: 16211033X", 0, 1, "R");

        $fpdf->Footer();
    }

    // Colored table
    public function TableMerchantEarning(\Codedge\Fpdf\Fpdf\Fpdf $fpdf, $header, $data)
    {
        // Colors, line width and bold font
        $fpdf->SetFillColor(102, 179, 255);

        $fpdf->SetLineWidth(.3);
        $fpdf->SetFont('', 'B');
        // Header
        $w = array(7, 30, 32, 15, 10, 15, 20);
        for ($i = 0; $i < count($header); $i++)
            $fpdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $fpdf->Ln();

        $fpdf->SetTextColor(0);
        $fpdf->SetFont('');
        // Data
        $fill = false;
        foreach ($data as $x => $row) {
            $fpdf->Cell($w[0], 6, $x+1, 'LR', 0, 'L', $fill);
            $fpdf->Cell($w[1], 6, $row->penjual, 'LR', 0, 'L', $fill);
            $fpdf->Cell($w[2], 6, $row->name, 'LR', 0, 'L', $fill);
            $fpdf->Cell($w[3], 6, $row->harga, 'LR', 0, 'R', $fill);
            $fpdf->Cell($w[4], 6, $row->jumlah, 'LR', 0, 'R', $fill);
            $fpdf->Cell($w[5], 6, $row->harga * $row->jumlah, 'LR', 0, 'R', $fill);
            $fpdf->Cell($w[6], 6, Carbon::parse($row->tanggal)->format('d-M-Y'), 'LR', 0, 'R', $fill);
            $fpdf->Ln();
        }
        // Closing line
        $fpdf->Cell(array_sum($w), 0, '', 'T');
    }

}

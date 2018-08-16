<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Carbon;

class Profit extends Model
{
    protected $fillable = [
        'order_id', 'profit',
    ];

    public static function GetProfitToday()
    {
//        return DB::select("SELECT * FROM profits WHERE DATE(created_at) = CURDATE()");
//        return OrderDetail::with("product")->where(DATE('created_at', '=', CURDATE()))->get();
        return DB::select("SELECT * FROM order_details INNER JOIN products ON products.id = order_details.product_id WHERE order_details.created_at = CURDATE()");
    }

    public static function GetProfitWeekly()
    {
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();

        return DB::select("SELECT * FROM order_details INNER JOIN products ON products.id = order_details.product_id WHERE order_details.created_at BETWEEN  '$start' AND '$end'");
    }

    public static function GetProfitMonthly()
    {
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();

        return DB::select("SELECT * FROM order_details INNER JOIN products ON products.id = order_details.product_id WHERE order_details.created_at BETWEEN  '$start' AND '$end'");
    }

    public static function GetProfitYearly()
    {
        $start = Carbon::now()->startOfYear();
        $end = Carbon::now()->endOfYear();

        return DB::select("SELECT * FROM order_details INNER JOIN products ON products.id = order_details.product_id WHERE order_details.created_at BETWEEN  '$start' AND '$end'");
    }
}

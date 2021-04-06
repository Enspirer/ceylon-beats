<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    public static function GetTotalSales()
    {
        $getInvoices = Invoice::where('status','success')->sum('total');
        return $getInvoices;
    }

    public static function NumberOfOders()
    {
        $getNumberOfOrders = Invoice::where('status','success')->get()->count();
        return $getNumberOfOrders;
    }
}

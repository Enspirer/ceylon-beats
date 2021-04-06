<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use DB;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $totalSales =  InvoiceItem::GetTotalSales();
        $numberofOrders =  InvoiceItem::NumberOfOders();
        $usersCount =  User::all()->count();
        $invoiceItems =  InvoiceItem::all()->count();


        $ordersDays = Invoice::select(
            DB::raw('sum(total) as sums'),
            DB::raw("DATE_FORMAT(created_at,'%D %M %Y') as days"))
            ->groupBy('days')
            ->get();








        return view('backend.dashboard',[
            'total_sales' => $totalSales,
            'numberof_orders' => $numberofOrders,
            'user_count' => $usersCount,
            'invoice_item' => $invoiceItems,
            'orderDays' => $ordersDays,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class PurchaseHistoryController extends Controller
{
   public function index()
   {
       $getPurchasedMusic_item = InvoiceItem::where('user_id',auth()->user()->id)->get();

       return view('frontend.user.purchase_history.purchase_history',[
           'purchased_details' => $getPurchasedMusic_item
       ]);
   }
}

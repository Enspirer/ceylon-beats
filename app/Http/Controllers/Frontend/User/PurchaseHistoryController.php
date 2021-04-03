<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class PurchaseHistoryController extends Controller
{
   public function index()
   {
       $getInvoices = Invoice::where('user_id',auth()->user()->id)->get();

       $invoices = [];
       foreach ($getInvoices as $invoice)
       {
           $arrayitems = [];
           $getPurchasedMusic_item = InvoiceItem::where('user_id',auth()->user()->id)
               ->where('invoice_id',$invoice->id)
               ->get();
           foreach ($getPurchasedMusic_item as $purhaseItem)
           {
               $music_details = [
                   'item_name' => $purhaseItem->music_name,
                   'selected_license' => $purhaseItem->selected_license,
                   'music_id' => $purhaseItem->music_id,
                   'preview_link' => $purhaseItem->preview_link,
                   'download_link' => $purhaseItem->download_link,
                   'author_name' => $purhaseItem->author_name,
                   'genres' => $purhaseItem->genres,
               ];
               array_push($arrayitems,$music_details);
           }
           $outarray = [
               'invoice_id' => $invoice->id,
               'total' => $invoice->total,
               'sub_total' => $invoice->sub_total,
               'status' => $invoice->status,
               'date' => $invoice->created_at,
               'price' => $invoice->price,
               'music_items' => $arrayitems
           ];
           array_push($invoices,$outarray);
       }

       return view('frontend.user.purchase_history.purchase_history',[
           'purchased_details' => $getPurchasedMusic_item
       ]);
   }
}

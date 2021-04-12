<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use DB;
use Cart;
use Mail;
use App\Mail\OrderCompleteMail;
class MyCartController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_cart.my_cart');
    }


    public function not_working()
    {
        return view('frontend.error_report.purchase_error');
    }

    public function checkout_finish()
    {
        $cardDetails = Cart::getTotal();
        $getCartContent = Cart::getContent();
        DB::beginTransaction();
        try {
            $music_output = [];
            $Invoice = new Invoice;
            $Invoice->user_id = auth()->user()->id;
            $Invoice->total = $cardDetails;
            $Invoice->sub_total = $cardDetails;
            $Invoice->payment_method = 'payhere';
            $Invoice->phone_number = 'null';
            $Invoice->status = 'success';
            $Invoice->discount_type = 'none';
            $Invoice->discount_value = '0';
            $Invoice->discount_value = '0';
            $Invoice->save();
            foreach ($getCartContent as $key => $music)
            {
                $productDetails = MusicProducts::where('id',$music->id)->first();
                $arrayDetail = [
                    'music_id' => $music->id,
                    'selected_license' => $music->attributes->license_name,
                    'price' => $music->price,
                    'offer_available' => 'yes',
                    'offered_price' => $music->price,
                    'preview_link' => $music->attributes->preview_link,
                    'download_link' => $productDetails->download_link,
                    'user_id' => auth()->user()->id,
                    'author_name' => $productDetails->author_name,
                    'genres' => $productDetails->genres_id,
                    'music_name' =>$music->name,
                    'invoice_id' =>$Invoice->id
                ];
                DB::table('invoice_items')->insert($arrayDetail);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        Cart::clear();
        Mail::to('sanjayaharshana@yopmail.com')->send(new OrderCompleteMail($Invoice->id));
        return back()->with('message', 'message|Record updated.');
    }



}

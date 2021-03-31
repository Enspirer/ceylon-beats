<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use DB;
use Cart;
class MyCartController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_cart.my_cart');
    }

    public function checkout_finish()
    {


        $cardDetails = Cart::getTotal();
        $getCartContent = Cart::getContent();

        dd($getCartContent);



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

            foreach ($request->music_id as $key => $music_id)
            {
                $productDetails = MusicProducts::where('id',$music_id)->first();
                $arrayDetail = [
                    'music_id' => $music_id,
                    'selected_license' => $request->license_name[$key],
                    'price' => $request->price[$key],
                    'offer_available' => 'yes',
                    'offered_price' => $request->price[$key],
                    'preview_link' => $request->preview_link[$key],
                    'download_link' => $productDetails->download_link,
                    'author_name' => $productDetails->author_name,
                    'genres' => $productDetails->genres_id,
                    'music_name' => $request->music_name[$key],
                    'invoice_id' =>$Invoice->id
                ];
                array_push($music_output,$arrayDetail);
            }
            DB::table('invoice_items')->insert($music_output);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        Cart::clear();
        return back();
    }



}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ClientInvoiceMail;
use App\Models\AddressDetails;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use DB;
use Cart;
use Mail;
use App\Mail\OrderCompleteMail;
use GuzzleHttp\Client;
use Http;

class MyCartController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_cart.my_cart');
    }

    public function CheckOutFunc(Request $request)
    {
        if($request['g-recaptcha-response']){
            $newaddress = new AddressDetails;
            $newaddress->address = $request->address;
            $newaddress->phone = $request->phone;
            $newaddress->city = $request->city;
            $newaddress->country = $request->country;
            $newaddress->save();
            $order_id = rand();


            $headers = [
                'user_secret' => '$2a$10$oICbDB.OG5Zt4Cx9fnPZ6.EK/MiAqe0dsn0UFV3c16LbB6TwWmE3i',
                'Content-Type' => 'application/json',
            ];

            $GetOrder = [
                'merchantRID' => $order_id,
                'amount' => number_format($request->amount,2),
                'validTimeLimit' => '5',
                'returnUrl' => 'https://ceylonbeats.com/checkout/'.$newaddress->id.'/'.$order_id,
                'customerMail' => $request->email,
                'customerMobile' => $request->phone,
                'mode' => 'WEB',
                'orderSummary' => 'Order Description',
                'customerReference' => $order_id,
            ];

            $client = new client();
            $res = $client->post('https://app.global.marx.lk/api/v2/ipg/orders', [
                'headers' => $headers,
                'json' => $GetOrder,
            ]);

            $decodeOuts = json_decode($res->getBody()->getContents());
            
            return redirect($decodeOuts->data->payUrl);



        }else{
            return back();
        }








    }


    public function not_working()
    {
        return view('frontend.error_report.purchase_error');
    }

    public function checkout_finish($id,$order_id)
    {

        $headers = [
            'user_secret' => '$2a$10$oICbDB.OG5Zt4Cx9fnPZ6.EK/MiAqe0dsn0UFV3c16LbB6TwWmE3i',
            'Content-Type' => 'application/json',
        ];

        $GetOrder = [
            'merchantRID' => $id,

        ];

        $client = new client();
        $res = $client->put('https://app.global.marx.lk/api/v2/ipg/orders/'.$order_id, [
            'headers' => $headers,
            'json' => $GetOrder,
        ]);


        $decodeOuts = json_decode($res->getBody()->getContents());
        dd($decodeOuts);


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
            AddressDetails::where('id',$id)->update([
                'invoice_id' => $Invoice->id
            ]);
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
//        Mail::to(auth()->user()->email)->send(new OrderCompleteMail($Invoice->id));
        Mail::to(auth()->user()->email)->send(new ClientInvoiceMail($Invoice->id));
        return redirect()->route('frontend.user.my_cart')->with('message', 'message|Record updated.');
    }


    public function helloword($id)
    {
        Mail::to(auth()->user()->email)->send(new ClientInvoiceMail($id));
        Mail::to(auth()->user()->email)->send(new OrderCompleteMail($id));
        return 'subbect';
    }



}

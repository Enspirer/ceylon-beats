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
use BMLConnect\Client as BMLClient;


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

           try{
               $client = new BMLClient('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6ImY3NmRmYTkzLTdhZWQtNDljZC1iNTg4LTczZWE5Yjk0MzkyYiIsImNvbXBhbnlJZCI6IjYyNjBjZmQ1OGI3MDEwMDAwOWJlNDExZiIsImlhdCI6MTY1MTAzOTc5MiwiZXhwIjo0ODA2NzEzMzkyfQ.OnAMFzbWTa32NIHI1-_tqVX50EjVIjXBZnb8yn8umzA', 'f76dfa93-7aed-49cd-b588-73ea9b94392b');
               $requestAmount = $request->amount * 15.42;
               $finalAmountwithCents = $requestAmount * 100;



               //MVR Convertion

               $json = [
                   "currency" => "MVR",
                   "amount" => $finalAmountwithCents,
                   "redirectUrl" => route('frontend.user.checkout_finish',[$newaddress->id,$order_id]), // Optional redirect after payment completion
               ];
               $transaction = $client->transactions->create($json);
               return redirect($transaction->url);

           }catch (\Exception $exception){
               return back();
           }

        }else{
            return back();
        }








    }


    public function not_working()
    {
        return view('frontend.error_report.purchase_error');
    }

    public function checkout_finish($id,$order_id , Request $request)
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

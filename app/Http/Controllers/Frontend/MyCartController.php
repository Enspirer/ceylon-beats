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
use GuzzleHttp;
class MyCartController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_cart.my_cart');
    }

    public function CheckOutFunc(Request $request)
    {
        dd($request);
        $amount = $request->amount;
        $complete_url = $request->return_url;
        $order_id = rand();
        $api_base	= "https://test-gateway.mastercard.com/";
        $URL	= $api_base."api/rest/version/56/merchant/"."SEYLANTEST2"."/session";
        $username='merchant.'."SEYLANTEST2";
        $password= "dc9e4b45b96612160cf7302c8dd9ce9a";
        $header	= ["Content-Type: Application/json;charset=UTF-8"];
        $requestData = [
            'apiOperation' => 'CREATE_CHECKOUT_SESSION',
            'order' => [
                "id" => $order_id,
                "currency" => "USD"
            ],
            'interaction'=>["operation"=>"PURCHASE"]
        ];
        $jsonRequest = json_encode($requestData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$URL);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonRequest);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Length: " . count($requestData)));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
        $result=curl_exec ($ch);
        $info = curl_getinfo($ch);
        curl_close ($ch);
        $response 	= json_decode($result,true);
        //print_r($response);
        $session_id	= "";
        if (!empty($response['result']) && $response['result'] == "SUCCESS")
        {
            $session_id = $response['session']['id'];
        }
        return view('frontend.user.my_cart.cart_checkout',[
            'session_id' => $session_id,
            'api_base' => $api_base,
            'complete_url' => $complete_url,
            'amount' => $amount,
            'order_id' =>$order_id
        ]);
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
        Mail::to(auth()->user()->email)->send(new OrderCompleteMail($Invoice->id));
        return back()->with('message', 'message|Record updated.');
    }



}

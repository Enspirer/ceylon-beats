<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MusicProducts;
use Illuminate\Http\Request;
use Cart;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $infatore = MusicProducts::where('is_features',1)
            ->get();
        return view('frontend.index',[
            'feature_music' => $infatore
        ]);
    }

    public function abouts_us()
    {
        return view('frontend.about_us');
    }



    public function search_query(Request $request)
    {
        if($request->search){
            return redirect()->route('frontend.explorer',['null','null','null','null',$request->search]);
        }else{
            return redirect()->route('frontend.explorer',['null','null','null','null','null']);
        }
    }

    public function addCart(Request $request)
    {
        Cart::add($request->music_item_id, $request->music_name, $request->price_details, 1, [
            'license_name' => $request->license_name,
            'preview_link' => $request->preview_link,
            'author_name' => $request->author_name
        ]);
        return back();
    }

    public function removeCart($cart_item)
    {
        Cart::remove($cart_item);

        return back();

    }

    public function getJsonData($itemID,$price_package)
    {
        $getMusicDetails = MusicProducts::where('id',$itemID)->first();
        $priceDetails = json_decode($getMusicDetails->price);
        foreach ($priceDetails as $pricepack){
            if($pricepack->license_name == $price_package)
            {
                $outputDetails =  [
                    'license_name' => $pricepack->license_name,
                    'price' => $pricepack->price,
                    'item_id' => $getMusicDetails->id
                ];
                return json_encode($outputDetails);
            }
        }
    }
}

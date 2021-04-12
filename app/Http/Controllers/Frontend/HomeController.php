<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\MusicController;
use App\Http\Controllers\Controller;
use App\Models\MusicProducts;
use App\Moduels\License;
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

        $getLastedMusic = MusicProducts::orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('frontend.index',[
            'feature_music' => $infatore,
            'latest_music' => $getLastedMusic
        ]);
    }

    public function abouts_us()
    {
        return view('frontend.about_us');
    }

    public function view_license($name)
    {
        if ($name == 1)
        {
            $license_details = License::where('id',1)->first();
            return view('frontend.view_licenses',[
                'license_details' => $license_details
            ]);
        }else{
            $license_details = License::where('license_name',$name)->first();
            return view('frontend.view_licenses',[
                'license_details' => $license_details
            ]);
        }

    }



    public function search_query(Request $request)
    {
        if($request->search){
            return redirect()->route('frontend.explorer',['genres','author_name','duration','price',$request->search]);
        }else{
            return redirect()->route('frontend.explorer',['genres','author_name','duration','price','music_name']);
        }
    }


    public static function check_chart_exssiting($music_item_id)
    {
        $itemsCart = Cart::getContent();

        foreach ($itemsCart as $cartItem)
        {

            if($music_item_id == $cartItem->id)
            {
                return 'yes';
            }

              return null;
        }

    }

    public function addCart(Request $request)
    {

        $details = self::check_chart_exssiting($request->music_item_id);

        if($details == null)
        {
            Cart::add($request->music_item_id, $request->music_name, $request->price_details, 1, [
                'license_name' => $request->license_name,
                'preview_link' => $request->preview_link,
                'author_name' => $request->author_name,
            ]);
        }


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

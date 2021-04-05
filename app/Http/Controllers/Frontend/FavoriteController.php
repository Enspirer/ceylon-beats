<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favoriteDetails = Favorite::where('user_id',auth()->user()->id)->get();

        $outputArray = [];
        foreach ($favoriteDetails as $favDetails)
        {
            dd($favDetails);
        }

        return view('frontend.user.favorites.index',[
            'favorite_details' => $favoriteDetails
        ]);
    }


    public function insertItem(Request $request)
    {
        $musicID = $request->music_id;
        $favoriteMusicDetails = Favorite::where('music_id',$musicID)->first();
        if($favoriteMusicDetails == null)
        {
            $musicDetails = new Favorite;
            $musicDetails->user_id = 1;
            $musicDetails->music_id = $request->music_id;
            $musicDetails->save();
            return 'added';

        }else{
            $favoriteMusicDetails = Favorite::where('music_id',$musicID)->delete();
            return 'deleted';
        }

    }
}

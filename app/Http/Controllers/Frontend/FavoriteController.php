<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\MusicProducts;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favoriteDetails = Favorite::where('user_id',auth()->user()->id)->get();
        $outputArray = [];
        foreach ($favoriteDetails as $favDetails)
        {
            $getMusicDetails = MusicProducts::where('id',$favDetails->music_id)->first();
            $favoriteDetails = [
                'id' => $getMusicDetails->id,
                'music_name' => $getMusicDetails->music_name,
                'genres' => $getMusicDetails->genres_id,
                'preview_link' => $getMusicDetails->preview_link,
                'author_name' => $getMusicDetails->author_name,
            ];
            array_push($outputArray,$favoriteDetails);
        }

        return view('frontend.user.favorites.index',[
            'favorite_details' => $outputArray
        ]);
    }


    public function delete($id)
    {
        $favoriteMusicDetails = Favorite::where('music_id',$id)->delete();
        return back();
    }


    public function insertItem(Request $request)
    {
        $musicID = $request->music_id;
        $favoriteMusicDetails = Favorite::where('music_id',$musicID)->first();
        if($favoriteMusicDetails == null)
        {
            $musicDetails = new Favorite;
            $musicDetails->user_id = $request->user_id;
            $musicDetails->music_id = $request->music_id;
            $musicDetails->save();
            return 'added';

        }else{
            $favoriteMusicDetails = Favorite::where('music_id',$musicID)->delete();
            return 'deleted';
        }

    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Generes;
use App\Models\MusicProducts;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index($genres,$author_name,$duration,$price,$music_name)
    {
        $sounditems = MusicProducts::query();
        if($genres != 'null')
        {
           $sounditems->where('genres_id','like',$genres);
        }

        if($author_name != 'null')
        {
            $sounditems->where('author_name',$author_name);
        }

        if($duration != 'null')
        {
            $sounditems->where('duration',$duration);
        }

        if($music_name != 'null')
        {
            $sounditems->orWhere('music_name', 'like', '%' . $music_name . '%');


        }

        $getGenres = Generes::where('status',1)->get();





        return view('frontend.explorer',[
            'sound_item' => $sounditems->get(),
            'getGenres' => $getGenres,
            'genres_name' => $genres,
            'author_name' => $author_name,
        ]);
    }
}

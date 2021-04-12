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
        if($genres != 'genres')
        {
           $sounditems->where('genres_id','like',$genres);
        }

        if($author_name != 'author_name')
        {
            $sounditems->where('author_name',$author_name);
        }

        if($duration != 'duration')
        {
            $sounditems->where('duration',$duration);
        }

        if($music_name != 'music_name')
        {

            $pieces = explode(" ", $music_name);


            foreach ($pieces as $pices)
            {
                $sounditems->orWhere('music_name', 'like', '%' . $pices . '%');
                $sounditems->orWhere('tags', 'like', '%' . $pices . '%');

            }




        }

        $getGenres = Generes::where('status',1)->get();





        return view('frontend.explorer',[
            'sound_item' => $sounditems->paginate(10),
            'getGenres' => $getGenres,
            'genres_name' => $genres,
            'author_name' => $author_name,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MusicProducts;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index($genres,$author_name,$duration,$price)
    {
        $sounditems = MusicProducts::all();

        return view('frontend.explorer',[
            'sound_item' => $sounditems
        ]);
    }
}

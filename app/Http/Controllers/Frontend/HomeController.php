<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MusicProducts;

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
}

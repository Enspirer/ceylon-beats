<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchasedMusicController extends Controller
{
    public function index()
    {
        return view('frontend.user.purchased_music.index');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class PurchasedMusicController extends Controller
{
    public function index()
    {
        $itemDetails = InvoiceItem::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.purchased_music.index',[
            'music_detaials' => $itemDetails
        ]);
    }


}

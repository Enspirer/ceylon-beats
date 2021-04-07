<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function save_settings(Request $request)
    {
        Settings::where('key','currency')
            ->update([
                'value' => $request->currency
            ]);


        Settings::where('key','app_title')->update(['value' => $request->app_title]);
        Settings::where('key','payment_getway_oparation')->update(['value' => $request->payment_getway_oparation]);

        return back();
    }

    public function show()
    {
        return view('backend.settings.show');
    }
}

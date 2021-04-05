<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.account');
    }

    public function updateUserDetails(Request $request)
    {
        $getUderDetails = User::where('email',$request->email)->first();

        if($getUderDetails)
        {
            if(auth()->user()->email == $request->email )
            {
                $userDetailsUpdate = User::where('id',auth()->user()->id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'contact_number' => $request->contact_number,
                    'address' => $request->address
                ]);
                return back();
            }else{
                return back();

            }
        }else{
            $userDetailsUpdate = User::where('id',auth()->user()->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'address' => $request->address
            ]);

            return back();
        }

    }


    public function passwordChange(Request $request)
    {

     }
}

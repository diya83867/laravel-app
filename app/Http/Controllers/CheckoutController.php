<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function createForm(Request $request)
    {
        return view ('checkout');
    }

    public function Checkout(Request $request)
    {
        // $this->validate($request,[
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        //     'email' => 'required|email',
        // ]);

        // $user = User::find($request->email);
        // if($user){
        // $user->name = $request->firstname;
        // $user->email = $request->email;
        // $user->save();
    // }
        return redirect()->route('stripe');

    }
}

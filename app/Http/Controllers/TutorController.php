<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TutorController extends Controller
{
    //
    public function signupaccount(Request $request)
    {  
        $rules = Validator::make($request->all(), [
            // 'id' => 'required|min:6|unique:users',
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|min:10000000',
            'mailing_address' => 'required',
            'state' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'min:6',
            // 'agree-term' => 'accepted'
        ]);

        $rules->validate();

        $obj = new User();

        $obj->fullname = $request->fullname;
        $obj->email = $request->email;
        $obj->phone_number = $request->phone_number;
        $obj->mailing_address = $request->mailing_address;
        $obj->state = $request->state;
        $obj->password = bcrypt($request->password);
        
        $obj->save();
         
        return redirect('login');
    }

    public function loginaccount(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $variable = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($variable)) {
            // session()->start('info');
            return redirect('home');
        } else {
            // Session::flash('error', 'Wrong credential Inputted');
            return redirect('login');
        }
    }
    
    public function logoutaccount(Request $request)
    {
        // session()->forget('info');
        Auth::logout();
        return redirect('login');
    }
}

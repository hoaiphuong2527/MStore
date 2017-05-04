<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index(Request $request)
	{
		return view("frontend.register");
	}

    public function register(Request $request)
	{
		$validator = Validator::make($request->all(), [
                'firstname'     => 'required|min:5|max:30',
                'lastname'      => 'required|min:5|max:30',
                'username'      => 'required|min:5|max:30|unique:users,Username',
                'email'         => 'required|email|unique:users,Email',
                'password'      => 'required|min:5|max:30|confirmed'
            ],
            [
            ]);

        if ($validator->fails())
        {
            $username = $request->get('username');

            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            return "fgdfd";
        }
	}
}

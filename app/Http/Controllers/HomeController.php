<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "home"
        
            ]);
    }
    public function faq()
    {
        return view('faq', [
            "title" => "faq" ,
            ]);
    }
    public function contact()
{
    return view('contact', [
        "title" => "contact",

    ]);
}
   
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['password']);
        $username = $request->username;

        // Check if the input is an email
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            if (Auth::guard('web')->attempt(['username' => $username, 'password' => $credentials['password']])) {
                $request->session()->regenerate();
                return redirect(route('dashboard'))->with('success', 'Anda berhasil login');
            }
        }

        return back()->with('error', 'username atau password anda salah!');
    }
}

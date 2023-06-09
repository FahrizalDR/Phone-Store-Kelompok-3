<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function loginPost(Request $request)
    {
    
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');       
               
        if (Auth::attempt($credentials, $remember)) { 
            // error_log("Masuk benar"); 
            $request->session()->put("userAccess", "user");
            $request->session()->regenerate();          
            return redirect()->route('index')->with('success', 'Login Successfully');;            
        }
        else 
        {
            // error_log("tidak benar");
            return redirect()->route('login')->with('failed', 'Wrong email or password');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index')->with('logout', 'You have logged out');
    }

    public function register()
    {
        return view('login');
    }
    public function registerPost(Request $request)
    {
        // dd($request->all());

        $customer = new customer([
            'NIK_PEMBELI' => $request->nik,
            'NAMA_PEMBELI' => $request->name,
            'TELP_PEMBELI' => ' ',
            'ALAMAT_PEMBELI' => ' ',
            'GENDER_PEMBELI' => ' ',
            'TGL_LAHIR_PEMBELI' => null,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'STATUS_DEL_PEMBELI' => '0'
        ]);


        $customer->save();

        return back()->with('success', 'Register Succesfully');
    }

}

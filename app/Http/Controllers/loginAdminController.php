<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;

class loginAdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function login()
    {
        return view('adminlogin');
    }

    public function registeradmin()
    {
        return view('register');
    }

    public function loginAdminPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // error_log("Masuk benar");             
            $request->session()->put("userAccsess", "admin");
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login Successfully');            
        } else {
            // error_log("tidak benar");
            return redirect()->route('adminlogin')->with('failed', 'Wrong email or password');
        }
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dashboard')->with('logout', 'You have logged out');
    }

    public function adminRegisterPost(Request $request)
    {        

        $admin = new admin([
            'ID_PEGAWAI' => $request->idpegawai,
            'NAMA_PEGAWAI' => $request->name,
            'email' => $request->email,
            'TELP_PEGAWAI' => '',
            'ALAMAT_PEGAWAI' => '',
            'GENDER_PEGAWAI' => '',
            'TGL_LAHIR_PEGAWAI' => null,
            'JABATAN_PEGAWAI'=> '',           
            'password' => Hash::make($request->password),
            'STATUS_DEL_PEGAWAI' => '0'
        ]);


        $admin->save();

        return back()->with('success', 'Register Succesfully');
    }
}

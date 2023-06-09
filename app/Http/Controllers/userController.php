<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataproduk;
use Carbon\Carbon;


class userController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detailproduct(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search))
        {
            $data = dataproduk::where('HP.NAMA_HP', 'LIKE','%'.$search.'%')
            ->orwhere('HP.WARNA_HP', 'LIKE', '%'.$search.'%')
            ->paginate(12);
            
            return view('shop', compact('data'))->with(['search' => $search]);
        }
        $data = dataproduk::paginate(12);

        return view('shop', compact('data'))->with(['search' => $search]);

    }

    public function homeproduct(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search))
        {
            $table = dataproduk::where('HP.NAMA_HP', 'LIKE','%'.$search.'%')
            ->orwhere('HP.WARNA_HP', 'LIKE', '%'.$search.'%')
            // ->orwhere('hp.stock_hp', 'LIKE', '%'.$search.'%')
            ->paginate(6);
            
            return view('index', compact('table'))->with(['search' => $search]);
        }
        $table = dataproduk::paginate(6);

        return view('index', compact('table'))->with(['search' => $search]);

    }
    
}
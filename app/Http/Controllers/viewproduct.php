<?php

namespace App\Http\Controllers;

use App\Models\dataproduk;
use Illuminate\Http\Request;

class viewproduct extends Controller
{
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
            $table = dataproduk::where('hp.nama_hp', 'LIKE','%'.$search.'%')
            ->orwhere('hp.warna_hp', 'LIKE', '%'.$search.'%')
            // ->orwhere('hp.stock_hp', 'LIKE', '%'.$search.'%')
            ->paginate(6);
            
            return view('index', compact('table'))->with(['search' => $search]);
        }
        $table = dataproduk::paginate(6);

        return view('index', compact('table'))->with(['search' => $search]);

    }
}
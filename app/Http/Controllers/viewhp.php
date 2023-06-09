<?php

namespace App\Http\Controllers;

use App\Models\viewlistproduk;
use Illuminate\Http\Request;

class viewhp extends Controller
{
    public function viewproduk(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search))
        {
            $data = viewlistproduk::where('HP.NAMA_HP', 'LIKE','%'.$search.'%')
            ->orwhere('HP.WARNA_HP', 'LIKE', '%'.$search.'%')
            ->paginate(10);

            return view('product', compact('data'))->with(['search' => $search]);
        }
        $data = viewlistproduk::paginate(10);

        return view('product', compact('data'))->with(['search' => $search]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\adminViewSales;
use Illuminate\Http\Request;


class AdminController extends Controller
{   
    public function dashboard()
    {
        return view('dashboard');
    }
    public function viewSales(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $data = adminViewSales::where('NOTA_PENJUALAN.ID_NOTA_PENJUALAN', 'LIKE', '%' . $search . '%')                
                ->orwhere('NOTA_PENJUALAN.NIK_PEMBELI', 'LIKE', '%' . $search . '%')
                ->orwhere('NOTA_PENJUALAN.TGL_PENJUALAN', 'LIKE', '%' . $search . '%')
                ->paginate(10);

            return view('sales', compact('data'))->with(['search' => $search]);
        }
        $data = adminViewSales::paginate(10);


        return view('sales', compact('data'))->with(['search' => $search]);
    }
}
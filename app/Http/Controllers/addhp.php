<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hp;

class addhp extends Controller
{

    public function addproduk()
    {
        return view('add product');
    }
    public function addhp(Request $request)
    {
        $hpData = [
            'ID_HP' => $request->inputID,
            'NAMA_HP' => $request->inputNamaHp,
            'WARNA_HP' => $request->inputWarna,
            'STOCK_HP' => $request->inputStok,
            'HARGA_PENJUALAN' => $request->inputHargaJual,
            'HARGA_PEMBELIAN' => $request->inputHargaBeli,
            'STATUS_DEL_HP' => '0',
        ];
        
        if ($request->hasFile('image_hp')) {
            $file = $request->file('image_hp');
        
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('images/shop'), $filename);
                $hpData['image_hp'] = $filename;
            } else {

            }
        }
        
        $hp = new hp($hpData);
        $hp->save();

        return back()->with('success', 'Produk Berhasil Dimasukkan');
    }
}
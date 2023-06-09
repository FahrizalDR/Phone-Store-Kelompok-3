<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hp extends Model
{
    use HasFactory;
    protected $table = 'HP';
    public $timestamp = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'ID_HP',
        'NAMA_HP',
        'WARNA_HP',
        'STOCK_HP',
        'HARGA_PENJUALAN',
        'HARGA_PEMBELIAN',
        'STATUS_DEL_HP',
        'image_hp',
    ];
}

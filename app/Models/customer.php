<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class customer extends Model implements Authenticatable
{    
    use AuthenticableTrait;

    protected $table = 'CUSTOMER';

    protected $primaryKey = 'NIK_PEMBELI';

    public $timestamps = false;

    
    //buat regrister
    protected $fillable = [
        'NIK_PEMBELI',
        'NAMA_PEMBELI',
        'TELP_PEMBELI',
        'ALAMAT_PEMBELI',
        'GENDER_PEMBELI',
        'TGL_LAHIR_PEMBELI',
        'email',
        'password',        
        'STATUS_DEL_PEMBELI',
    ];
    
    protected $hidden = [
        'PASSWORD_PEMBELI',
    ];

}

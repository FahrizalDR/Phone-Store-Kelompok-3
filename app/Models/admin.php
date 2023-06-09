<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class admin extends Model implements Authenticatable
{
    use AuthenticableTrait;
    
    protected $table = 'PEGAWAI';

    public $timestamps = false;
    
    //buat regrister
    protected $fillable = [
        'ID_PEGAWAI',
        'NAMA_PEGAWAI',
        'email',
        'TELP_PEGAWAI',
        'ALAMAT_PEGAWAI',
        'GENDER_PEGAWAI',
        'TGL_LAHIR_PEGAWAI',
        'JABATAN_PEGAWAI',        
        'password',        
        'STATUS_DEL_PEGAWAI',
    ];
    
    protected $hidden = [
        'PASSWORD_PEGAWAI',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table ="tb_lapor";
    protected $fillable= [
        'id','nip','jenis_laporan','nama_pelapor','email_pelapor','alamat','kota','laporan'
    ];
}

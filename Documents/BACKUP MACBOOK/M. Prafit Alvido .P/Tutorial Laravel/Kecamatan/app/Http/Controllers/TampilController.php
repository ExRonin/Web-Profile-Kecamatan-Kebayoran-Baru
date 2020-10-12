<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilController extends Controller
{

   public function tampil()
    {
        $data = \DB::select("SELECT * FROM tb_lapor");
        return view('daftarnama',['data'=> $data]);
    }

}
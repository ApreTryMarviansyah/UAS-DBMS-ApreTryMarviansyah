<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangApreController extends Controller
{
    public function index()
    {
        $barang = DB::table('t_barang_apre')->select('*')->get();
        return view('barang-apre', ['barang' => $barang]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranItemApreController extends Controller
{
    public function index()
    {
        $pengeluaranitem = DB::table('t_pengeluaranitem_apre')
            ->select('*')
            ->join('t_pengeluaran_apre', 't_pengeluaran_apre.nobk', '=', 't_pengeluaranitem_apre.nobk')
            ->join('t_barang_apre', 't_barang_apre.barang_id', '=', 't_pengeluaranitem_apre.barang_id')
            ->get();
        return view('pengeluaranitem-apre', ['pengeluaranitem' => $pengeluaranitem]);
    }
}

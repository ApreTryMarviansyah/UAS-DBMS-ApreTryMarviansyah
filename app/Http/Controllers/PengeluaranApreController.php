<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranApreController extends Controller
{
    public function index()
    {
        $pengeluaran = DB::table('t_pengeluaran_apre')
            ->select('*')
            ->join('t_bagian_apre', 't_bagian_apre.bagian_id', '=', 't_pengeluaran_apre.bagian_id')
            ->join('t_petugas_apre', 't_petugas_apre.petugas_id', '=', 't_pengeluaran_apre.petugas_id')
            ->get();
        return view('pengeluaran-apre', ['pengeluaran' => $pengeluaran]);
    }
}

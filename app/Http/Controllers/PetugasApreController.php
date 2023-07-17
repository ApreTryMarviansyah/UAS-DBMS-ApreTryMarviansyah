<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasApreController extends Controller
{
    public function index()
    {
        $petugas = DB::table('t_petugas_apre')->select('*')->get();
        return view('petugas-apre', ['petugas' => $petugas]);
    }
}

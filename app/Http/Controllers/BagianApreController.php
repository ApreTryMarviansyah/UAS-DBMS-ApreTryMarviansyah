<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianApreController extends Controller
{
    public function index()
    {
        $bagian = DB::table('t_bagian_apre')->select('*')->get();
        return view('bagian-apre', ['bagian' => $bagian]);
    }
}

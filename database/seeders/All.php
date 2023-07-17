<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class All extends Seeder
{
    public function id($table, $column)
    {
        $a = DB::table($table)->select(DB::raw($column . ' AS id'))->get();

        $b = collect($a)->shuffle()->all();
        return $b[0]->id;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_bagian_apre')->insert([
            ['nama_bagian' => 'Kantor Utama', 'kepala_bagian' => 'Henda Pratama', 'telp' => '081253683595', 'created_at' => now(), 'updated_at' => now()],
            ['nama_bagian' => 'Kantor Cabang 1', 'kepala_bagian' => 'Budi Prasetya', 'telp' => '082264837493', 'created_at' => now(), 'updated_at' => now()],
            ['nama_bagian' => 'Kantor Cabang 2', 'kepala_bagian' => 'Andre Kurniawan', 'telp' => '087886389362', 'created_at' => now(), 'updated_at' => now()],
            ['nama_bagian' => 'Kantor Cabang 3', 'kepala_bagian' => 'Andi Darmasurya', 'telp' => '089864727248', 'created_at' => now(), 'updated_at' => now()],
            ['nama_bagian' => 'Kantor Cabang 4', 'kepala_bagian' => 'Gunawan', 'telp' => '08565383482', 'created_at' => now(), 'updated_at' => now()],
            ['nama_bagian' => 'Kantor Cabang 5', 'kepala_bagian' => 'Budi', 'telp' => '085362758363', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('t_barang_apre')->insert([
            ['nama_barang' => 'Printer', 'satuan' => 'Unit', 'kategori' => 'ATK', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Meja', 'satuan' => 'Unit', 'kategori' => 'Furnitur', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Sofa', 'satuan' => 'Unit', 'kategori' => 'Furnitur', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'AC', 'satuan' => 'Unit', 'kategori' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Infocus', 'satuan' => 'Unit', 'kategori' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Lemari', 'satuan' => 'Unit', 'kategori' => 'Furnitur', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('t_petugas_apre')->insert([
            ['nama_petugas' => 'Rudi', 'handphone' => '0822689864468', 'password' => '12345', 'level' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['nama_petugas' => 'Ujang', 'handphone' => '0822864357647', 'password' => '12345', 'level' => 'Anggota', 'created_at' => now(), 'updated_at' => now()],
            ['nama_petugas' => 'Angga', 'handphone' => '0878532567899', 'password' => '12345', 'level' => 'Anggota', 'created_at' => now(), 'updated_at' => now()],
            ['nama_petugas' => 'Rani', 'handphone' => '0852364686865', 'password' => '12345', 'level' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['nama_petugas' => 'Yuni', 'handphone' => '0852876476456', 'password' => '12345', 'level' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['nama_petugas' => 'Yuda', 'handphone' => '0855433654738', 'password' => '12345', 'level' => 'Anggota', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('t_pengeluaran_apre')->insert([
            ['tanggal' => now()->toDateString(), 'noreff' => rand(100, 999), 'bagian_id' => $this->id('t_bagian_apre', 'bagian_id'), 'petugas_id' => $this->id('t_petugas_apre', 'petugas_id'), 'created_at' => now(), 'updated_at' => now()],
            ['tanggal' => now()->toDateString(), 'noreff' => rand(100, 999), 'bagian_id' => $this->id('t_bagian_apre', 'bagian_id'), 'petugas_id' => $this->id('t_petugas_apre', 'petugas_id'), 'created_at' => now(), 'updated_at' => now()],
            ['tanggal' => now()->toDateString(), 'noreff' => rand(100, 999), 'bagian_id' => $this->id('t_bagian_apre', 'bagian_id'), 'petugas_id' => $this->id('t_petugas_apre', 'petugas_id'), 'created_at' => now(), 'updated_at' => now()],
            ['tanggal' => now()->toDateString(), 'noreff' => rand(100, 999), 'bagian_id' => $this->id('t_bagian_apre', 'bagian_id'), 'petugas_id' => $this->id('t_petugas_apre', 'petugas_id'), 'created_at' => now(), 'updated_at' => now()],
            ['tanggal' => now()->toDateString(), 'noreff' => rand(100, 999), 'bagian_id' => $this->id('t_bagian_apre', 'bagian_id'), 'petugas_id' => $this->id('t_petugas_apre', 'petugas_id'), 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('t_pengeluaranitem_apre')->insert([
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
            ['nobk' => $this->id('t_pengeluaran_apre', 'nobk'), 'barang_id' => $this->id('t_barang_apre', 'barang_id'), 'jumlah' => rand(1, 10), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
